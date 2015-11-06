<?php
function isActive($x,$y)
{ 
	$ret=($x==$y ? ' active ' : '');
	return $ret; 
}

function btn($x)
{
	$ret='<a href="index.php" title="Indian Hand-woven Crafts 2015"><button type="button" class="btn btn-primary '.isActive("Home",$x).'">Home</button></a>';
	$ret.='&nbsp;';
	$ret.=' <a href="bags2015.php" title="Indian Hand-woven Bags 2015"><button type="button" class="btn btn-primary '.isActive("Bags 2015",$x).'" >Bags 2015</button></a>';
	$ret.='&nbsp;';
	$ret.=' <a href="bags.php" title="Bags 2014"><button type="button" class="btn btn-primary '.isActive("Bags",$x).'">Bags 2014</button></a>';
	$ret.='&nbsp;';
	$ret.=' <a href="cushions.php" title="Cushions"><button type="button" class="btn btn-primary '.isActive("Cushions",$x).'">Cushions</button></a>';
	$ret.='&nbsp;';
	$ret.=' <a href="looms.php" title="Looms"><button type="button"  class="btn btn-primary '.isActive("Looms",$x).'" >Looms</button></a>';
	$ret.='&nbsp;';
	$ret.=' <a href="contact.php" title="Contact"><button type="button"  class="btn btn-primary '.isActive("Contact",$x).'" >Contact</button></a>';
	return $ret;
}
function pic_display($pic_small,$pic_big,$ttl,$sz=300)
{
	print '
	<a href="images/'.$pic_big.'" data-toggle="lightbox" data-gallery="multiimages" title="'.$ttl.' - click to view full size." data-title="'.$ttl.'" >
		<img src="images/'.$pic_small.'" width="'.$sz.'" class="img-rounded img-responsive ">
	</a>';
	return;
}
 function hdr($t="")
{
	 $ret='<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>       
	<link href="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.2.2/ekko-lightbox.min.css" rel="stylesheet"/>
	<meta charset="utf-8"/>
    <title>Eastern*Hues - '.$t.' from North East India</title>
    <meta name="keywords" content="Eastern*Hues, North East, India, Manipur, Mizoram ,'.$t.'" />
    <meta name="description" content="Eastern*Hues - North East Indian '.$t.'" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>'; 
print $ret;
return;
}
 function footer()
{
	$ret='<br/><br/><br/>
	<a href="#top" class="footer">top of page</a>&nbsp;
	<a href="#top"><span class="glyphicon glyphicon-upload"></span></a>';
	print $ret;	
	return;
}
FUNCTION ttl($t,$pg)
{$ret=' <div class="jumbotron">'.
    '<h1>Eastern<img src="images/star.png" alt="*" >Hues</h1>
	 <h2>North East Indian Crafts</h2>'.btn($pg).'<a name="top"></a>
    <h3>'.$t.'</h3>
  </div>';
  print $ret;
  return;
  }
?>
