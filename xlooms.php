<?php require "functions/functions.php";?>
<!DOCTYPE html>
 <html lang="en">
    <?php hdr("Looms"); ?>
    <body>
    <div class="container-fluid">
   		<div class="jumbotron">
			<h1>Eastern*Hues</h1>
			<h2>North East Indian Crafts</h2>
			<?php btn("Looms");?>
			<h3>Hand Looms from Assam, Manipur, Mizoram and Nagaland (North East India)</h3>
		</div>
		<div class="row">
			<div class="col-sm-4 col-4 sol-lg-4 col-md-4">
                <?php	pic_display("loom1_200.jpg","loom1.jpg","Loom #1");
                ?>
         </div>
	     <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
               <?php pic_display("loom2_200.jpg","loom2.jpg","Loom #2");
                      ?>
         </div>
	     <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
              <?php	pic_display("loom5_200.jpg","loom5.jpg","Loom #3");
                      ?>
       </div>
      </div>
      <div class="row">
         <div class="col-md-4">
	 &nbsp;
    </div>
</div>
      <div class="row">
         <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
                <?php   pic_display("loom6_200.jpg","loom6.jpg","Loom #4");
                     ?>
         </div>
	     <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
                   <?php	               			   pic_display("loom7_200.jpg","loom7.jpg","Loom #5");
                            ?>
         </div>
	     <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
                            <?php	                    	   pic_display("loom8_200.jpg","loom8.jpg","Loom #6");
                            ?>
        </div>
    </div>
<div class="row">
         <div class="col-md-4">
	 &nbsp;
    </div>
</div>
    <div class="row">
         <div class="col-md-4">
               &nbsp;
         </div>
	   </div>
    <div class="row">
	   <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
                  <?php         		    pic_display("loom9_200.jpg","loom9.jpg","Loom #7 - Sikkim. Photo:Guy Lancaster");
                     ?>
         </div>
	     <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
                  <?php	               		    pic_display("assamloinloom_200.jpg","assamloinloom.jpg","Loom #8 - Assam - A Karbi women works on her indigenous loin loom in Birsingi village in Karbi Anglong district of Assam. Photo: Ritu Raj Konwar, the Hindu");
                     ?>
           </div>
		 <div class="col-sm-4 col-4 sol-lg-4 col-md-4">
                  <?php	               		    pic_display("loom10_200.jpg","loom10.jpg","Loom #9 - Dimapur, Nagaland");
                     ?>
           </div>
      </div>
    <div class="row">
           <div class="col-md-11 col-11 col-lg-11 foot">
					Click on images to view full-sized.
		</div>
    </div>
    <div class="row">
           <div class="col-md-5 col-5 col-lg-5"></div>
		   <div class="col-md-2 col-2 col-lg-2 footer">
				<?php	footer();?>	
			</div>
		</div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.2.2/ekko-lightbox.min.js"></script>
	<script type="text/javascript" src="js/jscript-foot.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>