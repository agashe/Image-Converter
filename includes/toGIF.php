/**
 *PHP version 5.2.3
 *
 *Image Converter
 *
 *@author Mohamed Yousef <engineer.mohamed.yossef@gmail.com>
 *@copyright 2017 AGASHE
 */
 
<?php 
function convertImageToGIF($originalImage, $outputImage, $quality)
{
    // jpg, png, gif or bmp?
    $exploded = explode('.',$originalImage);
    $ext = $exploded[count($exploded) - 1]; 

    if (preg_match('/jpg|jpeg/i',$ext))
        $imageTmp=imagecreatefromjpeg($originalImage);
    else if (preg_match('/png/i',$ext))
        $imageTmp=imagecreatefrompng($originalImage);
    else if (preg_match('/bmp/i',$ext))
        $imageTmp=ImageCreateFromBMP($originalImage);
    else
        return 0;

    // quality is a value from 0 (worst) to 100 (best)
    imagegif($imageTmp, $outputImage, $quality);
    imagedestroy($imageTmp);

    return 1;
}
?>