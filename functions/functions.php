<?php
function hdr($t,$fb="Y",$xmas="N")
{
	$ret='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	$ret.='<html xmlns="http://www.w3.org/1999/xhtml">';
	$ret.='<head>';
	if ($xmas=="Y")
{
	$ret.='<script type="text/javascript" src="snowstormv144_20131208/snowstorm.js"></script>';
    $ret.='<link href="css/xmas.css" type="text/css" rel="stylesheet" />';
}
else
{
	$ret.='<link href="css/main.css" type="text/css" rel="stylesheet" />';
}
$ret.='<meta name="p:domain_verify" content="17c69f6b1a2f6a9fb7abb85ad3b8e583"/>';
$ret.='<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>';
$ret.='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
if ($fb=="Y")
{
	$ret.='<link rel="stylesheet"
		href="http://www.chorltonlittlegems.co.uk/fancybox/source/jquery.fancybox.css?v=2.1.5"
		type="text/css" media="screen" />';
	$ret.='<script type="text/javascript"
	src="http://www.chorltonlittlegems.co.uk/fancybox/source/jquery.fancybox.pack.js?v=2.1.5">
	</script>';
}
$ret.='<meta content="en-gb" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />';
$ret.='<meta name="rating" content="general" />
<meta name="revisit-after" content="90 Days" />
<meta name="expires" content="never" />
<meta name="robots" content="index" />
<meta name="keywords" content="Manchester, baby, Chorlton, Childminder,South Manchester, Whalley Range, Stretford , Tot, Childcare,'.$t.'"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">';
$ret.='<title>Chorlton Little Gems Child Minders - '.$t.'</title>
<meta name="description" content="Manchester Chorlton Childminder -  '.$t.' "/>';
if ($fb=="Y")
{
	$ret.='<script type="text/javascript">
			$(document).ready(function() {
				 $(".fancybox").fancybox({
   					 	helpers : {
     				   	title: {
         			   	type: "inside",
            			position: "top"
        			}
			    },
				 nextEffect: "fade",
  				 prevEffect: "fade"
				});
			});
			</script>';
}
$ret.='</head>';
$ret.='<body title="Chorlton&nbsp;Little&nbsp;Gems&nbsp;Childminding">';
$ret.='<div class="logo"><a name="top"></a><a href="http://www.chorltonlittlegems.co.uk/index.php" title="Chorlton Little Gems - Childminding in South Manchester"><img
src="images/diamondz.jpg" alt="Chorlton Little Gems - Childminder" border="0" /></a></div>';
if ($xmas=="Y")
{
	$ret.='<div class="logo-right">';
	$ret.='<a href="http://www.chorltonlittlegems.co.uk/index.php" title="Chorlton Little Gems - Childminding in South Manchester"><img src="images/father-christmas1.jpg" alt="Chorlton Little Gems - Childminder" border="0" width="90"/></a>';
	$ret.='</div>';
}
$ret.='<div class="menupos">
<div class="menu"><a href="index.php" title="Chorlton Little Gems Homepage">Homepage</a></div>
<div class="menu"><a href="rates.php" title="Childminding Services and rates">Services</a></div>
<div class="menu"><a href="vacancies.php" title="Childminding Vacancies">Vacancies</a></div>
<div class="menu"><a href="premises.php" title="Childcare Premises">Premises</a></div>
<div class="menu"><a href="garden.php" title="Child-friendly garden">Garden</a></div>
<div class="menu"><a href="transport.php" title="Zero carbon child transport">Transport</a></div>
<div class="menu"><a href="qualifications.php" title="Childminding Qualifications">Qualifications</a></div>
<div class="menu"><a href="experience.php" title="Childminding and related Experience">Experience</a></div>
<div class="menu"><a href="links.php" title="Childcare Links">Links</a></div>
<div class="menu"><a href="policies.php" title="Child Minding Policies">Policies</a></div>
<div class="menu"><a href="indoors.php" title="Inside Actifities">Inside</a></div>
<div class="menu"><a href="outdoors.php" title="Outside Activities">Outside</a></div>
<div class="menu"><a href="xmas.php" title="Gallery">Christmas</a></div>
<div class="menu"><a href="contact.php" title="Chorlton Little Gems Contact Details">Contact</a></div>';
$ret.='</div>';
$ret.='<h1 align="center">Chorlton&nbsp;Little&nbsp;Gems&nbsp;Childminding</h1>';
$ret.='<h2>'.$t.'</h2>';
$ret.='<div class="mainbit"> ';
return $ret;}

function  photo($pic,$pic_tn,$ttl,$ht_tn=150)
{
print  '<a class="fancybox" rel="group" href="images/'.$pic.'" title="'.$ttl.'"><img src = "images/'.$pic_tn.'" alt="'.$ttl.'" height="'.$ht_tn.'"/></a>  &nbsp; ';
    }
function foot()
{$ret='<br clear="all"/>';
$ret.='<div align="center"><a href="#top" title="top of page">top of page</a>&nbsp;<a href="#top" title="top of page"><img src="images/up.gif" alt="top of page" border="0" /></a></div>
<br/><br/>';
$ret.="</div>
 <script type='text/javascript'>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3773540-40']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>";
return $ret;}









?>
