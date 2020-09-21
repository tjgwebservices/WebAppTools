<?php 
$title = "Ethiopian Calendar Online";

$ethiopianYear = "፳ ፻ ፲ ፫";
$yearText = "Year 2013 of the Ethiopian calendar (September 11, 2020 - September 10, 2021)";

function drawMonth($startX, $startY, $number, $monthStart, $monthNumber, $textbox, $styleno, $monthno) {
$gradientTransformMatrix = array("matrix(1,0,0,0.8,0,70)","matrix(1,0,0,0.9,0,18)");
$rectangleStyle = array("
			opacity:0.8;
			fill:url(#rg2);
			fill-opacity:1;
			fill-rule:evenodd;
			stroke:url(#lg1);
			stroke-width:2;
			stroke-miterlimit:4;
			stroke-dasharray:none;
			stroke-opacity:1
",
"
			opacity:0.8;
			fill:#ebda2a;
			fill-opacity:0;
			fill-rule:evenodd;
			stroke:#ebda2a;
			stroke-width:2;
			stroke-miterlimit:4;
			stroke-dasharray:none;stroke-opacity:1
","
			opacity:0.8;
			fill:#ebda2a;
			fill-opacity:1;
			fill-rule:evenodd;
			stroke:url(#rg2);
			stroke-width:2;
			stroke-miterlimit:4;
			stroke-dasharray:none;stroke-opacity:1
","
			opacity:0.7;
			fill:url(#rg1);
			fill-opacity:.5;
			fill-rule:evenodd;
			stroke:#ebda2a;
			stroke-width:5;
			stroke-miterlimit:4;
			stroke-dasharray:none;
			stroke-opacity:1
","
			opacity:0.8;
			fill:#ffd42a;
			fill-opacity:1;
			fill-rule:evenodd;
			stroke:url(#rg1);
			stroke-width:10;
			stroke-miterlimit:4;
			stroke-dasharray:none;
			stroke-opacity:1
");
//$textcolor = "#4f3e3e";
$textcolor = "#805080";
$textcolor2 = "#b9b2b9";
$ethiopianNumbers = array("፩","፪","፫","፬","፭","፮","፯","፰","፱","፲",
					"፲፩","፲፪","፲፫","፲፬","፲፭","፲፮","፲፯","፲፰","፲፱","፳",
					"፳፩","፳፪","፳፫","፳፬","፳፭","፳፮","፳፯","፳፰","፳፱","፴");
$ethiopianMonths = array("መስከረም","ጥቅምት","ኅዳር","ታኅሣሥ","ጥር", "የካቲት", "መጋቢት", "ሚያዚያ", "ግንቦት", "ሰኔ", "ሐምሌ", "ነሃሴ", "ጳግሜን");
$gregorianMonths = array("Sept Oct","Oct Nov","Nov Dec","Dec Jan","Jan Feb", "Feb Mar", "Mar Apr", "Apr May", "May Jun", "Jun Jul", "Jul Aug", "Aug Sep");


	echo "<g>";
	echo "<text x=\"".($startX-5)."\" y=\"".($startY-5)."\" fill=\"".$textcolor."\" style=\"color:".$textcolor.";\">".$ethiopianMonths[$monthno]."</text>";
	echo "<text x=\"".($startX+55)."\" y=\"".($startY-5)."\" fill=\"".$textcolor2."\" style=\"color:".$textcolor.";\">".$gregorianMonths[$monthno]."</text>";

	for ($i = 0; $i <= 4; $i++) {
		for ($j = 0; $j <= 6; $j++) {
			$number = $number + 1;	
			if ($number >= $monthStart ) {
						$monthNumber = $monthNumber + 1;
						if ($monthNumber > 30) {
							$textbox = "";
							$styleno = 0;						
						} else {
							$textbox = $ethiopianNumbers[$monthNumber-1];
							$styleno = 1;
						}
			} else {
				$textbox = "";
				$styleno = 0;
			}
			
			$boxY = $startY + ($i * 50);
			$boxX = $startX + ($j * 50);
			echo "    <rect";
			echo "       y=\"". $boxY ."\"";
			echo "       x=\"". $boxX ."\"";
			echo "       height=\"40\"";
			echo "       width=\"30\"";
			echo "			style=\"";
			echo $rectangleStyle[$styleno];
			echo "\" />";
			echo "<text x=\"".($boxX+8)."\" y=\"".($boxY+22)."\" style=\"color:".$textcolor.";\">".$textbox."</text>";
		}
	} 
	echo "</g>";

}

function drawPugame($startX, $startY, $number, $monthStart, $monthNumber, $textbox, $styleno, $monthno) {
$gradientTransformMatrix = array("matrix(1,0,0,0.8,0,70)","matrix(1,0,0,0.9,0,18)");
$rectangleStyle = array("
			opacity:0.8;
			fill:url(#rg2);
			fill-opacity:1;
			fill-rule:evenodd;
			stroke:url(#lg1);
			stroke-width:2;
			stroke-miterlimit:4;
			stroke-dasharray:none;
			stroke-opacity:1
",
"
			opacity:0.8;
			fill:#ebda2a;
			fill-opacity:0;
			fill-rule:evenodd;
			stroke:#ebda2a;
			stroke-width:2;
			stroke-miterlimit:4;
			stroke-dasharray:none;stroke-opacity:1
");
$textcolor = "#805080";
$textcolor2 = "#b9b2b9";

$ethiopianNumbers = array("፩","፪","፫","፬","፭","፮","፯","፰","፱","፲",
					"፲፩","፲፪","፲፫","፲፬","፲፭","፲፮","፲፯","፲፰","፲፱","፳",
					"፳፩","፳፪","፳፫","፳፬","፳፭","፳፮","፳፯","፳፰","፳፱","፴");
$ethiopianMonths = array("መስከረም","ጥቅምት","ኅዳር","ታኅሣሥ","ጥር", "የካቲት", "መጋቢት", "ሚያዚያ", "ግንቦት", "ሰኔ", "ሐምሌ", "ነሃሴ", "ጳግሜን");
$gregorianMonths = array("Sept Oct","Oct Nov","Nov Dec","Dec Jan","Jan Feb", "Feb Mar", "Mar Apr", "Apr May", "May Jun", "Jun Jul", "Jul Aug", "Aug Sep");


	echo "<g>";
	echo "<text x=\"".($startX-5)."\" y=\"".($startY-5)."\" fill=\"".$textcolor."\" style=\"color:".$textcolor.";\">".$ethiopianMonths[$monthno]."</text>";
	echo "<text x=\"".($startX+55)."\" y=\"".($startY-5)."\" fill=\"".$textcolor2."\" style=\"color:".$textcolor.";\">Sep</text>";

	for ($i = 0; $i <= 2; $i++) {
		for ($j = 0; $j <= 6; $j++) {
			$number = $number + 1;	
			if ($number >= $monthStart ) {
						$monthNumber = $monthNumber + 1;
						if ($monthNumber > 5) {
							$textbox = "";
							$styleno = 0;						
						} else {
							$textbox = $ethiopianNumbers[$monthNumber];
							$styleno = 1;
						}
			} else {
				$textbox = "";
				$styleno = 0;
			}
			
			$boxY = $startY + ($i * 50);
			$boxX = $startX + ($j * 50);
			echo "    <rect";
			echo "       y=\"". $boxY ."\"";
			echo "       x=\"". $boxX ."\"";
			echo "       height=\"40\"";
			echo "       width=\"30\"";
			echo "			style=\"";
			echo $rectangleStyle[$styleno];
			echo "\" />";
			echo "<text x=\"".($boxX+10)."\" y=\"".($boxY+20)."\" style=\"color:".$textcolor.";\">".$textbox."</text>";
		}
	} 
	echo "</g>";

}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<style>

</style>
</head>
<body>
<div>
<svg xmlns:xlink="http://www.w3.org/1999/xlink"
	xmlns="http://www.w3.org/2000/svg"
	width="3600" height="2700" transform="scale(.5,.5)">
  <defs>
    <linearGradient
       gradientUnits="userSpaceOnUse"
       y2="200"
       x2="180"
       y1="200"
       x1="110"
       id="lg1"
       xlink:href="#lg1" />
    <radialGradient
       gradientUnits="userSpaceOnUse"
       gradientTransform="<?php echo $gradientTransformMatrix[0]; ?>"
       r="30"
       fy="270"
       fx="150"
       cy="260"
       cx="150"
       id="rg1"
       xlink:href="#rg1" />
	<radialGradient
       gradientUnits="userSpaceOnUse"
       gradientTransform="<?php echo $gradientTransformMatrix[1]; ?>"
       r="30"
       fy="140"
       fx="110"
       cy="140"
       cx="110"
       id="rg2"
       xlink:href="#rg2" />
    <radialGradient
       gradientUnits="userSpaceOnUse"
       gradientTransform="<?php echo $gradientTransformMatrix[1]; ?>"
       r="30"
       fy="140"
       fx="110"
       cy="140"
       cx="110"
       id="rg3"
       xlink:href="#rg3" />
  </defs>


<?php
echo "<g transform=\"scale(2.3,2.8)\">";

drawMonth(25, 20, 0, 5, 0, "", 2, 0); 
drawMonth(400, 20, 0, 7, 0, "", 2, 1); 
drawMonth(775, 20, 0, 2, 0, "", 2, 2); 
drawMonth(1200, 20, 0, 4, 0, "", 2, 3); 

drawMonth(25, 280, 0, 6, 0, "", 2, 4); 
drawMonth(400, 280, 0, 1, 0, "", 2, 5); 
drawMonth(775, 280, 0, 3, 0, "", 2, 6); 
drawMonth(1200, 280, 0, 4, 0, "", 2, 7); 

drawMonth(25, 540, 0, 7, 0, "", 2, 8); 
drawMonth(400, 540, 0, 2, 0, "", 2, 9); 
drawMonth(775, 540, 0, 4, 0, "", 2, 10); 
drawMonth(1200, 540, 0, 6, 0, "", 2, 11); 

drawPugame(550, 820, 0, 1, 0, "", 2, 12); 


$titleX1 = 80;
$titleY1 = 830;

$titleX2 = 80;
$titleY2 = 850;

echo "<text x=\"".$titleX1."\" y=\"".$titleY1."\" fill=\"".$textcolor."\" style=\"font-size:48px;font-weight:800;\">".$ethiopianYear."</text>";
echo "<text x=\"".$titleX2."\" y=\"".$titleY2."\" fill=\"".$textcolor2."\" style=\"font-size:8px;\">".$yearText."</text>";

echo "<text x= \"1200\" y=\"800\" style=\"fill:".$textcolor2.";font-size:8px;\"><tspan x= \"1200\" y=\"800\">Ethiopian Calendar Online<tspan><tspan x= \"1200\" y=\"810\">www.ethiopiancalendaronline.com<tspan><tspan x= \"1200\" y=\"820\">brought to you this year by Providence</tspan></text>"; 

echo "</g>";

?>
 </g>
</svg>

