<?php require "functions/functions.php";?>
<!DOCTYPE html>
 <html lang="en">
   <?php hdr("Cushions");?>
<body>
<div class="container-fluid">
<?php ttl("Cushions","Cushions");?> 
     <div class="row">
        <div class="col-sm-4 col-4 col-md-4 col-lg-4">
           <?php  pic_display("crafts1_200.jpg","crafts1.jpg","Cushion #1");
			?>
        </div>
        <div class="col-sm-4 col-4 col-md-4 col-lg-4">
           <?php               pic_display("crafts2_200.jpg","crafts2.jpg","Cushion #2");
            ?>
        </div>
        <div class="col-sm-4 col-4 col-md-4 col-lg-4">
           <?php pic_display("crafts3_200.jpg","crafts3.jpg","Cushion #3");
		  	?>
        </div>
   </div> <!--row-->
   <div class="row">
        <div class="col-sm-4 col-4 col-md-12">
           &nbsp;
        </div>
    </div><!--row-->
   <div class="row">
        <div class="col-sm-4 col-4 col-md-4 col-lg-4">
             <?php 
			      pic_display("cushion3_200.jpg","cushion3.jpg","Cushion #4");
			 ?>
        </div>
        <div class="col-sm-4 col-4 col-md-4 col-lg-4">
           <?php pic_display("cushion4_200.jpg","cushion4.jpg","Cushion #5");
             ?>
        </div>
        <div class="col-sm-4 col-4 col-md-4 col-lg-4">
           <?php pic_display("cushion5_200.jpg","cushion5.jpg","Cushion #6");
	    ?>
       </div>
    </div> <!--row-->
    <div class="row">
        <div class="col-md-12">
           &nbsp;
        </div>
    </div><!--row-->
  <div class="row">
        <div class="col-sm-4 col-4 col-md-4 col-lg-4">
            &nbsp;
        </div>
        <div class="col-sm-11 col-11 col-md-11 col-lg-11 txtCenter">
              &pound;20 Each - including filler  (+postage&amp;packing)
       </div>
</div>
 <div class="row">
                   <div class="col-md-11 col-11 col-lg-11 foot">
					Click on images to view full-sized.
					</div>
                </div>
		</div> <!-- container-->
         <script src="//code.jquery.com/jquery.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.2.2/ekko-lightbox.min.js"></script>
		<script type="text/javascript" src="js/jscript-foot.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   </body>
</html>
