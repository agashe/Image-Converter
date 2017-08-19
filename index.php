/**
 *PHP version 5.2.3
 *
 *Image Converter
 *
 *@author Mohamed Yousef <engineer.mohamed.yossef@gmail.com>
 *@copyright 2017 AGASHE
 */
 
<?php
	error_reporting(0);
	include_once("includes/bmp_solution.php");
	include_once("includes/get_file_size.php");
	include_once("includes/toJPG.php");
	include_once("includes/toBMP.php");
	include_once("includes/toGIF.php");
	include_once("includes/toPNG.php");
	
	
	if(isset($_POST["jpg_btn"])){
		if($_POST["file_name"] != null){
			$target_dir = "upload/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			$filetype = pathinfo($target_file,PATHINFO_EXTENSION);
		
			if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "bmp" || $filetype == "gif" || $filetype == "png"){
				if($_FILES["file"]["size"] <= 3000000){
					if($filetype != "jpg" && $filetype != "jpeg"){
						move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
						$out = $_FILES["file"]["name"];
						$out = substr($out, 0, strpos($out, "."));
						$tmp_out = $out.".jpg";
						$out = "temp/".$out.".jpg";
						if(convertImageToJPG($target_file, $out, 100)){
							echo '
							<script src="scripts/jquery-1.10.0.min.js" type="text/javascript"></script>
							<script>
								$(document).ready(function(){
									$("#result").show();
									$("#out_name").text("Image name : '.$tmp_out.'");
									$("#out_size").text("Image size : '.get_file_size($out).'");
									$("#out_link").attr("href", "'.$out.'");
								});
							</script>
							';
						}else{
							echo "<script>alert('Unknowen error, please try again later');</script>";
						}
					}else{
						echo "<script>alert('The image is already JPG ^_^');</script>";
					}
				}else{
					echo "<script>alert('Error : File size more than 3.00MB!');</script>";
				}
			}else{
				echo "<script>alert('Error : Invalid file type !');</script>";
			}
		}else{
			echo "<script>alert('Error : Please choose file !');</script>";			
		}
	}
	
	if(isset($_POST["bmp_btn"])){	
		if($_POST["file_name"] != null){
			$target_dir = "upload/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			$filetype = pathinfo($target_file,PATHINFO_EXTENSION);
		
			if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "bmp" || $filetype == "gif" || $filetype == "png"){
				if($_FILES["file"]["size"] <= 3000000){
					if($filetype != "bmp"){
						move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
						$out = $_FILES["file"]["name"];
						$out = substr($out, 0, strpos($out, "."));
						$tmp_out = $out.".bmp";
						$out = "temp/".$out.".wbmp";
						if(convertImageToPNG($target_file, $out, 100)){
							echo '
							<script src="scripts/jquery-1.10.0.min.js" type="text/javascript"></script>
							<script>
								$(document).ready(function(){
									$("#result").show();
									$("#out_name").text("Image name : '.$tmp_out.'");
									$("#out_size").text("Image size : '.get_file_size($out).'");
									$("#out_link").attr("href", "'.$out.'");
								});
							</script>
							';
						}else{
							echo "<script>alert('Unknowen error, please try again later');</script>";
						}
					}else{
						echo "<script>alert('The image is already BMP ^_^');</script>";
					}
				}else{
					echo "<script>alert('Error : File size more than 3.00MB!');</script>";
				}
			}else{
				echo "<script>alert('Error : Invalid file type !');</script>";
			}
		}else{
			echo "<script>alert('Error : Please choose file !');</script>";			
		}
	}
	
	if(isset($_POST["gif_btn"])){	
		if($_POST["file_name"] != null){
			$target_dir = "upload/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			$filetype = pathinfo($target_file,PATHINFO_EXTENSION);
		
			if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "bmp" || $filetype == "gif" || $filetype == "png"){
				if($_FILES["file"]["size"] <= 3000000){
					if($filetype != "gif"){
						move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
						$out = $_FILES["file"]["name"];
						$out = substr($out, 0, strpos($out, "."));
						$tmp_out = $out.".gif";
						$out = "temp/".$out.".gif";
						if(convertImageToGIF($target_file, $out, 100)){
							echo '
							<script src="scripts/jquery-1.10.0.min.js" type="text/javascript"></script>
							<script>
								$(document).ready(function(){
									$("#result").show();
									$("#out_name").text("Image name : '.$tmp_out.'");
									$("#out_size").text("Image size : '.get_file_size($out).'");
									$("#out_link").attr("href", "'.$out.'");
								});
							</script>
							';
						}else{
							echo "<script>alert('Unknowen error, please try again later');</script>";
						}
					}else{
						echo "<script>alert('The image is already GIF ^_^');</script>";
					}
				}else{
					echo "<script>alert('Error : File size more than 3.00MB!');</script>";
				}
			}else{
				echo "<script>alert('Error : Invalid file type !');</script>";
			}
		}else{
			echo "<script>alert('Error : Please choose file !');</script>";			
		}
	}
	
	if(isset($_POST["png_btn"])){	
		if($_POST["file_name"] != null){
			$target_dir = "upload/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			$filetype = pathinfo($target_file,PATHINFO_EXTENSION);
		
			if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "bmp" || $filetype == "gif" || $filetype == "png"){
				if($_FILES["file"]["size"] <= 3000000){
					if($filetype != "png"){
						move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
						$out = $_FILES["file"]["name"];
						$out = substr($out, 0, strpos($out, "."));
						$tmp_out = $out.".png";
						$out = "temp/".$out.".png";
						if(convertImageToPNG($target_file, $out, 100)){
							echo '
							<script src="scripts/jquery-1.10.0.min.js" type="text/javascript"></script>
							<script>
								$(document).ready(function(){
									$("#result").show();
									$("#out_name").text("Image name : '.$tmp_out.'");
									$("#out_size").text("Image size : '.get_file_size($out).'");
									$("#out_link").attr("href", "'.$out.'");
								});
							</script>
							';
						}else{
							echo "<script>alert('Unknowen error, please try again later');</script>";
						}
					}else{
						echo "<script>alert('The image is already PNG ^_^');</script>";
					}
				}else{
					echo "<script>alert('Error : File size more than 3.00MB!');</script>";
				}
			}else{
				echo "<script>alert('Error : Invalid file type !');</script>";
			}
		}else{
			echo "<script>alert('Error : Please choose file !');</script>";			
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>IMAGE Converter</title>
	
	<meta charset="utf-8">
	<meta name="author" content="Mohamed Yousef">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	
	<link href="style/fonts.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="style/responsive.css" rel="stylesheet" type="text/css" media="all"/>
	
	<script src="scripts/jquery-1.10.0.min.js" type="text/javascript"></script>
	<script src="scripts/actions.js" type="text/javascript"></script>
</head>
<body>
	<!-----------------------------[header]----------------------------->
		<div id="header">
			<a href="index.php"><img src="images/logo.png"></img></a>
			<center><p><ul>
				<li><a href="" class="icon icon-facebook" target="_blank" title="FaceBook"></a></li>
				<li><a href="" class="icon icon-github" target="_blank" title="GitHub"></a></li>
				<li><a href="" class="icon icon-linkedin" target="_blank" title="linked In"></a></li>
				<li><a href="" class="icon icon-google-plus" target="_blank" title="Google+"></a></li>				
				<li><a class="icon icon-info-sign" id="about_btn" title="About"></a></li>
			</ul></p></center>
		</div>
	<!-----------------------------[header]----------------------------->
	
	<!-----------------------------[content]----------------------------->
		<div id="content">
			<!---------------[upload-form]--------------->
			<div id="upload-form">
				<form action="" method ="POST" enctype="multipart/form-data">
					<p><input type="text" name="file_name" placeholder="Max File Size (3.00 MB)">
					<label class="icon icon-folder-open"><input type="file" name="file"></label></p><br>
					<input type="submit" value="JPG" name="jpg_btn" class="btn">
					<input type="submit" value="BMP" name="bmp_btn" class="btn">
					<input type="submit" value="GIF" name="gif_btn" class="btn">
					<input type="submit" value="PNG" name="png_btn" class="btn">
				</form>
			</div><br>
			<!---------------[upload-form]--------------->
			
			<!---------------[result]--------------->
			<div id="result">
				<h3 id="out_name"></h3>
				<h3 id="out_size"></h3>
				<a href="" id="out_link" target="_blank">Download</a>
			</div>
			<!---------------[result]--------------->
			
			<!---------------[about]--------------->
			<div id="about">
				<h1 class="icon icon-info-sign">ABOUT</h1>
				<p>Pdf To Doc Converter is a small tool that help the 
				user to convert his documents and books .</p>
				
				For more informations , visit <a href="" title="My blog" target="_blank">My Blog</a> or
				Follow me on <a href="" title="FaceBook" target="_blank">FaceBook</a>
			</div>
			<!---------------[about]--------------->
		</div>
	<!-----------------------------[content]----------------------------->
	
	<!-----------------------------[footer]----------------------------->
		<div id="footer">
			<center><image src="images/footer.png"></image></center>
		</div>
	<!-----------------------------[footer]----------------------------->
</body>
</html>