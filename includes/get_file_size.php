<?php
function get_file_size($file, $size=null, $decimals=2, $dec_sep='.', $thousands_sep=','){
	if (!is_file($file)){
	  return "El fichero no existe";
	}
	$bytes = filesize($file);
	$sizes = array('bytes', 'KB', 'MB', 'GB');
	if(isset($size)){
	  $factor = strpos($sizes, $size[0]);
	  if ($factor===false){
	   return "El tama?o debe ser B, K, M, G, T o P";
	  }
	}else{
	  $factor = floor((strlen($bytes) - 1) / 3);
	  $size = $sizes[$factor];
	}
return number_format($bytes / pow(1024, $factor), $decimals, $dec_sep, $thousands_sep).' '.$size;
}
?>