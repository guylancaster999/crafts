// JavaScript Document
function isActive(x,y)
{
	var ret='';
	if (x==y)
	{
		ret='active"';
	}
	return ret;	
}

function btn(x)
{
	var ret='';
	ret+=' <a href="index.php" title="Indian Hand-woven Crafts 2015"><button type="button" class="btn btn-primary '+isActive("Home",x)+'" >Home</button></a>';
	ret+='&nbsp;';
	ret+=' <a href="bags2015.php" title="Indian Hand-woven Bags 2015"><button type="button" class="btn btn-primary '+isActive("Bags 2015",x)+'" >Bags 2015</button></a>';
	ret+='&nbsp;';
	ret+=' <a href="bags.php" title="Bags 2014"><button type="button" class="btn btn-primary '+isActive("Bags 2014",x)+'">Bags 2014</button></a>';
	ret+='&nbsp;';
	ret+=' <a href="cushions.php" title="Cushions"><button type="button" class="btn btn-primary '+isActive("Cushions",x)+'">Cushions</button></a>';
	ret+='&nbsp;';
	ret+=' <a href="looms.php" title="Looms"><button type="button"  class="btn btn-primary '+isActive("Looms",x)+'" >Looms</button></a>';
	ret+='&nbsp;';
	ret+=' <a href="contact.php" title="Contact"><button type="button"  class="btn btn-primary '+isActive("Contact",x)+'" >Contact</button></a>';
	document.write(ret);
}
function bag_foot()
{
   var ret='';
   ret+='<p align="center">Click on photo to return to Gallery.</p>';
   ret+='<p align="center">Indian hand-woven  bags for sale  <a href="contact.php">here</a> for &pound;15-18   </p>';
	document.write(ret);
}
function bag_display(retUrl,pic)
{
	ret='<a href="'+retUrl+'" title="Click to return to Handbag Gallery"><img src="images/'+pic+'"  alt="Click to return to Handbag Gallery" class="img-responsive img-thumbnail"></a>';
	document.write(ret);
}

function pic_display(pic_small,pic_big,ttl)
{
	var ret='';
    ret='<a href="images/'+pic_big+'" data-toggle="lightbox" data-gallery="multiimages" title="'+ttl+' - click to view full size." data-title="'+ttl+'" >'
    ret+='<img src="images/'+pic_small+'" width="300" class="img-rounded img-thumbnail ">';
    ret+='</a>';
	document.write(ret);
}
function bags_display(url,desc,pic)
{
	ret='<a href="'+url+'" title="'+desc+' - click for full size image">';
	ret+='<img src="images/'+pic+'" alt="'+desc+' - Hand Woven in Mizoram, India" class="img-responsive img-thumbnail">';
	ret+='</a>';
	document.write(ret);
}
function bags_foot()
{
   var ret='';
   ret+='<p align="center"> Click on photos to see full sized.</p>';
   ret+='<p align="center">Indian hand-woven  bags for sale  <a href="contact.php">here</a> for &pound;15-18   </p>';
   ret+='<p align="center">Click <a href="cushions.php">here</a> to see cushions</p>';
   document.write(ret);
}
function cushion_display(retUrl,pic)
{
	ret='<a href="'+retUrl+'" title="Click to return to Cushion Gallery"><img src="images/'+pic+'"  alt="Click to return to Cushion Gallery" class="img-responsive img-thumbnail"></a>';
	document.write(ret);
}  
function cushion_foot()
{
   var ret='';
   ret+='<p align="center"> Click on photo  to  return to gallery.</p>';
   ret+='<p align="center">Indian hand-woven cushions &ndash; for sale at <a href="http://chorltonartmarket.com/">Chorlton Art Market</a> for &pound;20</p>';
	document.write(ret);
}    
function cushions_foot()
{
   var ret='';
   ret+='<p align="center"> Click on photos to see full sized.</p>';
   ret+='<p align="center">Indian hand-woven cushions &ndash; for sale at <a href="http://chorltonartmarket.com/">Chorlton Art Market</a> for &pound;20</p>';
   ret+='<p align="center">Click <a href="bags.php">here</a> to see handbags</p> ';
   document.write(ret);
}  
function loom_display(retUrl,pic)
{
	ret='<a href="'+retUrl+'" title="Click to return to Loom Gallery"><img src="images/'+pic+'"  alt="Click to return to Loom Gallery" class="img-responsive img-thumbnail"></a>';
	document.write(ret);
}
