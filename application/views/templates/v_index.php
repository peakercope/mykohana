<div class="home-page main">
	<section class="grid-wrap" >
		<header class="grid col-full">
			<hr>
			<p class="fleft"><?=$id?></p>
			<?=HTML::anchor('about', 'see more infos',array('class'=>'arrow fright'))?>
		</header>
		
		<div class="grid col-one-half mq2-col-full">
			<h1><?=$text->name?></h1>
			<p><?=$text->body?></p>
		</div>
			
	
		 <div class="slider grid col-one-half mq2-col-full">
		   <div class="flexslider">
		     <div class="slides">
		       <div class="slide">
		           	<figure>
		                 <img src="img/img2.jpg" alt="">
		                 <figcaption>
		                 	<div>
		                 	<h5>Caption 1</h5>
		                 	<p>Lorem ipsum dolor set amet, lorem, <a href="#">link text</a></p>
		                 	</div>
		                 </figcaption>
		             	</figure>
		           </div>
		           
		           <div class="slide">
		               	<figure>
		                     <img src="img/img.jpg" alt="">
		                     <figcaption>
		                     	<div>
		                     	<h5>Caption 2</h5>
		                     	<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
		                     	</div>
		                     </figcaption>
		                 	</figure>
		               </div>
		            </div>
		   </div>
		 </div>
		
		 </section>
	

	</div> <!--main-->