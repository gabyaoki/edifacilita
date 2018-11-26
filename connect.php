<?php

class Connect
{
	static function runSql($value, $sql)
	{
		$con = mysqli_connect("192.185.103.161","goki_edifacilita","Abc123*","goki_edifacilita");

		$result = mysqli_query($con, $sql);

		switch ($value){
			case "getData":
				while ($row = mysqli_fetch_assoc($result)) 
				{
					$arrResult[] = $row;
				}
				$arrResult = (isset($arrResult)?$arrResult:'');
				return $arrResult;
				break;

			case "saveData":
				$lastID = mysqli_insert_id($con);

				return $lastID;
				break;
			
			case "singleData":
                if($result){
				    return mysqli_fetch_assoc($result);
                }
                else {
                    return false;
                }
				break;

			default:		 
		}

		mysqli_close($con);

		return $result;	
	}

	static function uploadImg($fileImg)
	{
		$extensions = array('image/jpg', 'image/png', 'image/jpeg');
		$maxSize = 2097152;
		$directoryFiles = "assets";
		$picName = $_FILES[$fileImg]["name"];

		if(($_FILES[$fileImg]["size"] <= $maxSize) && (in_array($_FILES[$fileImg]["type"], $extensions))) {
			$serverPlaceName = "../../".$directoryFiles."/".$picName;
			move_uploaded_file($_FILES[$fileImg]["tmp_name"], $serverPlaceName);

			return $picName;
		} else {
			return false;
		}
	}

	static function uploadFile($file)
	{
		$directoryFiles = "assets";
		$fileName = $_FILES[$file]["name"];

		$serverPlaceName = "../../".$directoryFiles."/".$fileName;
		move_uploaded_file($_FILES[$file]["tmp_name"], $serverPlaceName);

		return $fileName;
	}

	static function getGlobals($type)
	{
	    $arrGlobal = Connect::runSql("getData", "SELECT * FROM globals WHERE strName='".$type."'");
		return $arrGlobal[0]["strValue"];
	}
}

?>