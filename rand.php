<?php
// Create the image
$im = imagecreatetruecolor(40, 60);
// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 40 , 60, $white);
// The text to draw
$i = rand(0 , 9);
$text = ''.$i;
// Replace path by your own font path
$font = 'DejaVuSans.ttf';
// Add some shadow to the text
//imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);
// Add the text
$angle = intval(rand(2 , 20));

if($angle%2){
	$angle = 0 - $angle;
}
$x = rand(1 , 5);
$y = rand(40 , 50);
imagettftext($im, 38 , $angle , 3 , 45, $black, $font, $text);
// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im , '../data/rand/rand.png');
imagedestroy($im);
?>

