<?php 
include("../connect.php");

echo saveCode();

function generateCode($length = 8){
    $alpha = 'abcdefghijklmnopqrstuvwxyz';
    $numeric = '0123456789';
    $alphaLength = strlen($alpha);
    $numLength = strlen($numeric);

    $randomString = '';
    for ($i = 0; $i < floor($length/2) ; $i++) {
        $randomString .= $alpha[rand(0, $alphaLength - 1)];
        $randomString .= $numeric[rand(0, $numLength - 1)];
    }
    $randomString = substr_replace($randomString, "-", floor($length/2), 0);

    return $randomString;
}
function checkCode($code){
    $sql = "SELECT codes.bInUse FROM codes WHERE codes.strCode=".$code;
    $inUse = Connect::runSql("singleData", $sql);
    
    return $inUse;
}
function saveCode(){
    $newCode = generateCode();
    $codeInUse = checkCode($newCode);
    
    if($codeInUse){
        saveCode();
    }
    else if(!$codeInUse && isset($_SESSION['nCondoID'])){
        $sql = "INSERT INTO codes(strCode, nCondoID, bInUse) VALUES ('".$newCode."', '".$_SESSION['nCondoID']."', 0)";
        $nCodeID = Connect::runSql("saveData", $sql);

        return $newCode;
    }
}

?>