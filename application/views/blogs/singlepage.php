
<!DOCTYPE HTML>
<html>
	<head>
		<title>Karate Life | Blog </title>
		<link href="<?php echo base_url();?>/assets/css/blogstyle.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	

	<body>
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<div class="single-page">
							<div class="single-page-artical">
								<div class="artical-content">
									<img src="/assets/images/blogs/blog1/blog1.jpg" title="banner1">
									<h3><a href="#"><?php echo $blog['title'];  ?></a></h3>
									<p class="para top"><?php echo $blog['para1'] ?></p> 

									<p class="para top"> <?php echo $blog['para2']; ?></p>

									 <p class="para top"><?php echo $blog['para3']; ?></p> 
								    </div>


								    <div class="artical-links">
		  						 	<ul>
		  						 		<li><a href="#"><img src="<?php echo base_url();?>/assets/images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
		  						 		<li><a href="#"><img src="<?php echo base_url();?>/assets/images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
		  						 		<li><a href="#"><img src="<?php echo base_url();?>/assets/images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
		  						 	</ul>
		  						 </div>
		  						 <div class="share-artical">
		  						 	<ul>
		  						 		<li><a href="#"><img src="<?php echo base_url();?>/assets/images/facebooks.png" title="facebook">Facebook</a></li>
		  						 		<li><a href="#"><img src="<?php echo base_url();?>/assets/images/twiter.png" title="Twitter">Twiiter</a></li>
		  						 		<li><a href="#"><img src="<?php echo base_url();?>/assets/images/google+.png" title="google+">Google+</a></li>
		  						 		<li><a href="#"><img src="<?php echo base_url();?>/assets/images/rss.png" title="rss">Rss</a></li>
		  						 	</ul>
		  						 </div>
		  						 <div class="clear"> </div>
							</div>
							<!--start-comments-section-->
							<div class="comment-section">
				<div class="grids_of_2">
					<h2>Comments</h2>
					<div class="grid1_of_2">
						<div class="grid_img">
							<a href=""><img src="<?php echo base_url();?>/assets/images/pic10.jpg" alt=""></a>
						</div>
						<div class="grid_text">
							<h4 class="style1 list"><a href="#">Uku Mason</a></h4>
							<h3 class="style">march 2, 2013 - 12.50 AM</h3>
							<p class="para2"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
							<a href="" class="btn1">Click to Reply</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="grid1_of_2 left">
						<div class="grid_img">
							<a href=""><img src="<?php echo base_url();?>/assets/images/pic10.jpg" alt=""></a>
						</div>
						<div class="grid_text">
							<h4 class="style1 list"><a href="#">Designer First</a></h4>
							<h3 class="style">march 3, 2013 - 4.00 PM</h3>
							<p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
							<a href="" class="btn1">Click to Reply</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="grid1_of_2">
						<div class="grid_img">
							<a href=""><img src="<?php echo base_url();?>/assets/images/pic12.jpg" alt=""></a>
						</div>
						<div class="grid_text">
							<h4 class="style1 list"><a href="#">Ro Kanth</a></h4>
							<h3 class="style">march 2, 2013 - 12.50 AM</h3>
							<p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
							<a href="" class="btn1">Click to Reply</a>
						</div>
						<div class="clear"></div>
					</div>								
						<div class="artical-commentbox">
						 	<h2>Leave a Comment</h2>
				  			<div class="table-form">
								<form action="#" method="post" name="post_comment">
									<div>
										<label>Name<span>*</span></label>
										<input type="text" value=" ">
									</div>
									<div>
										<label>Email<span>*</span></label>
										<input type="text" value=" ">
									</div>
									<div>
										<label>Your Comment<span>*</span></label>
										<textarea> </textarea>	
									</div>
								</form>
								<input type="submit" value="submit">
									
							</div>
							<div class="clear"> </div>
				  		</div>			
					</div>
			</div>
							<!---//End-comments-section--->
						</div>
						 </div>
		</div>
		
		<!---//End-wrap---->
	</body>

</html>

