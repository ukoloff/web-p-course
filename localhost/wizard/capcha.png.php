<?
header('Content-Type: image/png');

$_SESSION['?capcha'] = $text = rand(1000, 9999);
$font = '.fonts/harngton.ttf';
$size = 50;
$angle = rand(-10, 10);


foreach(imagettfbbox($size, $angle, $font, $text) as $k=>$v)
  if(1 & $k)
    $y[]=$v;
  else
    $x[]=$v;

$x0 = min($x); $y0 = min($y);
$x1 = max($x); $y1 = max($y);

$img = imagecreatetruecolor($x1 - $x0, $y1 - $y0);
$color = imagecolorallocate($img, 250, 250, 0);
imagettftext($img, $size, $angle, -$x0, -$y0, $color, $font, $text);
imagefilter($img, IMG_FILTER_EMBOSS);
imagefilter($img, IMG_FILTER_GAUSSIAN_BLUR);
imagepng($img);
?>
