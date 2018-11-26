$(function(){
	var arrDivImg = $(".bgCont");
	for(var i=0; i<arrDivImg.length; i++)
	{
		makeBg(arrDivImg[i]);
	}

	function makeBg(divPhoto){
		$(".bgImg").css("opacity", 0);
		var coverPhoto = divPhoto.getElementsByClassName("bgImg")[0].src;
		divPhoto.style.backgroundImage = "url("+coverPhoto+")";
	}
});