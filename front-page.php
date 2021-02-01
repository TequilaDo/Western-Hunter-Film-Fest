<?php get_header(); ?>

<section class="header md:min-h-screen pb-8 flex flex-col items-center pt-16 bg-hero-background" style="background:url(<?php echo get_template_directory_uri(); ?>/img/header.png)">
	<div class="flex flex-col justify-center">
		<p class="text-white text-center">2021</p>
		<h1 class="text-center text-white text-6xl md:text-8xl max-w-md">Film Festival</h1>
		<p class="text-center text-white max-w-md mb-2 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmsod
		tempor incididunt ut labore et dolore magna aliqua.</p>
		<a class="mx-auto button border-white text-white" href="#">Submit a Film</a>
	</div>
	<div class="container video-container max-w-4xl mx-auto p-10">
		<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/RjoO6wPAaVI' frameborder='0' allowfullscreen></iframe></div>
	</div>
</section>


<section class="how-it-works sm:pb-96 sm:pt-6 md:pt-64 h-full px-6" style="background:url(<?php echo get_template_directory_uri(); ?>/img/how-it-works.jpg);background-size:cover;background-position: bottom right;">
	<div class="container max-w-5xl mx-auto">
		<div class="grid grid-cols-2 gap-1">
			<div class="col-span-2 md:col-span-1">
				<h2>How it Works</h2>
				<p class="max-w-sm">Entries will be divided into four different categories to diversify our portfolio.</p>
				<ol>
					<li class="max-w-xs mt-2"><p>Submit Your Film</p><p>Entries will be divided into four different categories to diversify our portfolio.</p></li>
					<li class="max-w-xs mt-2"><p>Industry Judges Vote</p><p>Entries will be divided into four different categories to diversify our portfolio.</p></li>
					<li class="max-w-xs mt-2"><p>Public Votes</p><p>Entries will be divided into four different categories to diversify our portfolio.</p></li>
					<li class="max-w-xs mt-2"><p>Winners Announced</p><p>Entries will be divided into four different categories to diversify our portfolio.</p></li>
				</ol>
				<a class="button" href="#">Submit a Film</a>
			</div>
			<div class="col-span-1">
				
			</div>
		</div>
	</div>
</section>

<section class="four-categories  py-32 h-full">
	<div class="container mx-auto">
		<img class="mx-auto image-4" src="<?php echo get_template_directory_uri(); ?>/img/4.png">
		<h2 class="mx-auto text-center">Four Categories</h2>
		<p class="text-center max-w-sm mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		<div class="grid grid-cols-2 gap-4 max-w-4xl mx-auto my-16 four-categories-blocks-container">
			<div class="col-span-1">
				<h3>Professional Full Feature</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
			</div>
			<div class="col-span-1">
				<h3>Professional Short Film</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
			</div>
			<div class="col-span-1">
				<h3>Amateur Full Feature</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
			</div>
			<div class="col-span-1">
				<h3>Amateur Short Feature</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
			</div>	
		</div>
	</div>
</section>

<section class="four-prizes pt-32 h-full pb-96" style="background: url(<?php echo get_template_directory_uri() ?>/img/prizes.jpg);background-size: cover;" />
	<div class="container mx-auto">
		<img class="mx-auto image-4" src="<?php echo get_template_directory_uri(); ?>/img/4-.png">
		<h2 class="mx-auto text-center">Four Incredible Prizes</h2>
		<p class="text-center max-w-sm mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		<div class="grid grid-cols-4 gap-5 max-w-6xl mx-auto my-16 four-prizes-blocks-container px-6">
			<div class="col-span-2 md:col-span-1">
				<p class="category">Amateur Short Film</p>
				<h3 class="prize-name">Prize #1</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				<p class="cash">+500 Cash</p>
			</div>
			<div class="col-span-2 md:col-span-1">
				<p class="category">Amateur Short Film</p>
				<h3 class="prize-name">Prize #2</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				<p class="cash">+500 Cash</p>
			</div>
			<div class="col-span-2 md:col-span-1">
				<p class="category">Amateur Short Film</p>
				<h3 class="prize-name">Prize #3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				<p class="cash">+500 Cash</p>
			</div>
			<div class="col-span-2 md:col-span-1">
				<p class="category">Amateur Short Film</p>
				<h3 class="prize-name">Prize #4</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				<p class="cash">+500 Cash</p>
			</div>	
		</div>
	</div>
</section>

<section class="judges pt-32 h-full pb-96 px-6"/>
	<div class="container mx-auto">
		<img class="mx-auto image-4" src="<?php echo get_template_directory_uri(); ?>/img/25.png">
		<h2 class="mx-auto text-center">Industry Judges</h2>
		<p class="text-center max-w-sm mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		<div class="grid grid-cols-3 gap-2 max-w-6xl mx-auto my-16 three-judges-blocks-container text-center">
			<div class="col-span-1 judge">
				<img class="mx-auto" src="//placehold.it/250">
				<h3 class="name">Nate Simmons</h3>
				<p>The Western Hunter</p>
			</div>
			<div class="col-span-1 judge">
				<img class="mx-auto" src="//placehold.it/250">
				<h3 class="name">Chris Denham</h3>
				<p>The Western Hunter</p>
			</div>
			<div class="col-span-1 judge">
				<img class="mx-auto" src="//placehold.it/250">
				<h3 class="name">Randy Rockey</h3>
				<p>The Western Hunter</p>
			</div>
		</div>
	</div>

	<div class="container mx-auto max-w-6xl">
		<div class="main-carousel" >
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		  <div class="carousel-cell">
		  	<img class="mx-auto" src="//placehold.it/250">
		  </div>
		</div>
	</div>

</section>

<section class="sponsors bg-gray">
	<div class="container text-center">
		<img src="//placehold.it/110/50">
	</div>
</section>

<section class="submit-a-film flex">
	<div class="flex-grow flex-2 w-28">
		<img src="<?php echo get_template_directory_uri(); ?>/img/submit-a-film-2.jpg">
	</div>
	<div class="flex-1 w-8 sm:p8 md:p-8 md:px-28">
		<?php
		gravity_form( 1, false, false); ?>
	</div>
</section>

<script>
	var elem = document.querySelector('.main-carousel');
	var flkty = new Flickity( elem, {
	  // options
	  cellAlign: 'left',
	  contain: true,
	  freeScroll: true,
	  wrapAround: true
	});

	// element argument can be a selector string
	//   for an individual element
	var flkty = new Flickity( '.main-carousel', {
	  // options
});
</script>
<?php get_footer(); ?>














