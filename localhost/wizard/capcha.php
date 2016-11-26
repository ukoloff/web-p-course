<?
if('capcha'!=$_SESSION['page'])
	exit();

header('Content-Type: image/png');
$n = 5;
$text = '';

for($i=0;$i<$n;$i++)
	$text.=rand(0,9);
$_SESSION['?']=$text;

// Replace path by your own font path
$font = '.fonts/swgothi.ttf';
$angle = rand(-15,15);
$size = 20;

foreach(imagettfbbox($size, $angle, $font, $text) as $k=>$v):
	if( $k & 1)
		$y[]=$v;
	else
		$x[]=$v;
endforeach;
$x0=min($x); $x1=max($x);
$y0=min($y); $y1=max($y);

$im = imagecreatetruecolor($x1-$x0, $y1-$y0);

$white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, $x1-$x0, $y1-$y0, $white);
// Create some colors
$color = imagecolorallocate($im, 0, 0, 255);
// The text to draw


// Add some shadow to the text
imagettftext($im, $size, $angle, -$x0, -$y0, $color, $font, $text);
//imagefilter($im, IMG_FILTER_EMBOSS);
imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
imagepng($im);

?>