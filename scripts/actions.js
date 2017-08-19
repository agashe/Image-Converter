/**
 * 
 *Image Converter
 *
 *@author Mohamed Yousef <engineer.mohamed.yossef@gmail.com>
 *@copyright 2017 AGASHE
 */

$(document).ready(function(){
	var current = 0;
	$("#about_btn").click(function(){
		if(current == 0){
			$("#about").show();
			current = 1;
		}else{
			$("#about").hide();
			current = 0;
		}
	});
	
	$("input[name=file]").change(function(){
		$("input[name=file_name]").val($("input[name=file]").val());
	});
});