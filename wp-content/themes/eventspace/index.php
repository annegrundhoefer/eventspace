<?php include('header.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#scroll").click(function() {
      $('html, body').animate({
        scrollTop: $(".touch").offset().top
      }, 1000);
   });
 });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#scroll2").click(function() {
      $('html, body').animate({
        scrollTop: $(".touch").offset().top
      }, 1000);
   });
 });
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.featureImages').fadeTo(10, 0.8);
		$(".featureImages").hover(
		function(){
			$(this).fadeTo(1000, 0.9);
		}, function() {
			$(this).fadeTo(1000, 1)
		});

	});
</script>

<section id="mastHead"> 
	<div class="mast">
		<h3><?php the_field('homepage_address',59); ?></h3>
		<h1> #<?php the_field('homepage_hashtag',59); ?></h1>
		<h2><?php the_field('homepage_tagline',59); ?></h2>
		<div class="btn btn-primary" id ="scroll"><?php the_field('masthead_cta',59); ?></div>
	</div>

	
</section>

<section id="featuresList">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 banner text-center">
			<h2> Features & Services</h2>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 image featureImages">
			<img src="http://d16wm5mxkuw2qn.cloudfront.net/images/20258.jpeg"/>
			<h2><span id = "dtViewsText">Beautiful views of <br>Downtown Dallas<br></span></h2>
		</div>
		<div class = "col-xs-12 col-sm-12 col-md-4 col-lg-4 image featureImages">
			<img src="/eventspace/wp-content/themes/eventspace/img/work.png"/>
			<h2><span>Fastest WiFi in Dallas<br>+<br> Full A/V setup; all at no extra charge!</span></h2>
		</div>
		<div class = "col-xs-12 col-sm-12 col-md-4 col-lg-4 image featureImages">
			<img src="/eventspace/wp-content/themes/eventspace/img/artimage.png"/>
			<h2><span>BYO caterer, alcohol, DJ etc. <br>(or use ours!)</span></h2>
		</div>
<!-- 		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 banner text-center">
			<h2><?php the_field('left_title',59); ?></h2>
			<div class="center">
				<?php the_field('left_list',59); ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 banner text-center">
			<h2><?php the_field('right_title',59); ?></h2>
			<div class="center">
				<?php the_field('right_list',59); ?>
			</div>
		</div> -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 banner text-center benefits">
			<a href="#"><div class="btn3 btn3-primary">View all Features</div></a>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 banner text-center benefits" id="scroll" style = "cursor: pointer">
			<div class="btn2 btn2-primary text-center" id ="scroll2">Book an Event</div>
		</div>

	</div></section>


<section id="audiences">
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-7 audience text-right">
		<h2><?php the_field('first_ribbon',59); ?></h2>
	</div>
</div>


<?php 

/*********************************************/
/*         
	Audience Panels
*/
/*********************************************/

$args = array(
	'post_type' => 'audience'
);

$panels = new WP_Query($args);



if ($panels->have_posts()) {
	while ($panels->have_posts()) {
		$panels->the_post(); 
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		$post_id = get_the_ID();
		?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 icon text-center">
					<img src="<?php echo $url ?>">
			
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 benefits">
				<h3><?php echo get_the_title(); ?></h3>
					<?php echo get_field('content',$post_id); ?>
					<a href="<?php echo get_the_permalink(); ?>"><div class="btn btn-primary"><?php echo get_field('cta_text',$post_id); ?></div></a>
				</div> 
			</div>

	<?php }
}

?>

</section>

<!-- SnapWidget -->
<!-- <iframe src="http://snapwidget.com/sc/?u=Zm9ydF93b3JrfGlufDQwMHwzfDN8fG5vfDV8bm9uZXxvblN0YXJ0fHllc3xubw==&ve=150615" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:1750px; height:400px"></iframe> -->
<iframe src="http://snapwidget.com/sc/?u=Zm9ydF93b3JrfGlufDQwMHwzfDN8fG5vfDV8bm9uZXxvblN0YXJ0fHllc3xubw==&ve=150615" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:400px"></iframe>
<!-- <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-offset-5 col-md-7 col-md-offset-5 col-lg-7 packages text-left">
		<h2><?php the_field('second_ribbon',59); ?></h2>
		<p><?php the_field('second_ribbon_subhead',59); ?></p>
	</div>
</div>
<div class="row"> -->
<!-- 
<?php 

/*********************************************/
/*         
	Packages
*/
/*********************************************/

$args = array(
	'post_type' => 'packages'
);

$packages = new WP_Query($args);

if ($packages->have_posts()) {
	while ($packages->have_posts()) {
		$packages->the_post(); 
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 single-package">
			<img src="http://placehold.it/500x300">
			<div class="title">
				<h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
			</div>
		</div>

	<?php }
}
?> -->


<!-- <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 audience text-right">
		<h2><?php the_field('third_ribbon',59); ?></h2>
	</div>
</div> -->


<!-- <div class="row">
	<?php 

	/*********************************************/
	/*         
		Past Events
	*/
	/*********************************************/

	$args = array(
		'post_type' => 'past_events'
	);

	$events = new WP_Query($args);

	if ($events->have_posts()) {
		while ($events->have_posts()) {
			$events->the_post(); 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 single-package">
						<img src="http://placehold.it/500x300">
					<div class="title">
						<h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
					</div>
				</div>

			<?php } 

		}
	?>
</div> -->
<section id="clients">
	<div class="container">
		<div class="row">
			<?php 

			/*********************************************/
			/*         
				Past Events
			*/
			/*********************************************/

			$args = array(
				'post_type' => 'sponsors'
			);

			$events = new WP_Query($args);

			$count = 1;
			if ($events->have_posts()) {
				while ($events->have_posts()) {
					$events->the_post(); 
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); $post_id = get_the_ID(); 

					?>
					
					<?php if ($count == 5) { ?>
						</div>
					<?php } ?>

					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">
						<a href="<?php echo get_field('sponsor_url',$post_id) ?>" target="_blank"><img src="<?php echo get_field('logo',$post_id); ?>"></a>
					</div>

					<?php if ($count == 5) { ?>
						<div class="row">
					<?php } ?>
				<?php $count++; }

			} ?>
		</div>
	</div>
</section>
<section id="featuresList">
<div class="row">
	<div class="col-sm-12 col-md-8 map" id = "contact">
		<a href="https://www.google.com/maps/dir//211+North+Ervay,+Dallas,+TX+75201/@32.7821534,-96.7976129,17z/data=!4m13!1m4!3m3!1s0x864e99220027e345:0x5821f5dfa4274d24!2s211+North+Ervay,+Dallas,+TX+75201!3b1!4m7!1m0!1m5!1m1!1s0x864e99220027e345:0x5821f5dfa4274d24!2m2!1d-96.7976129!2d32.7821534"><img src="<?php bloginfo('template_url'); ?>/img/map1.png"></a>
	</div>
	<div class="col-sm-6 col-md-offset-1 col-md-3 contact">
		<h3>Location</h3>
			<h4><a href="https://www.google.com/maps/dir//211+North+Ervay,+Dallas,+TX+75201/@32.7821534,-96.7976129,17z/data=!4m13!1m4!3m3!1s0x864e99220027e345:0x5821f5dfa4274d24!2s211+North+Ervay,+Dallas,+TX+75201!3b1!4m7!1m0!1m5!1m1!1s0x864e99220027e345:0x5821f5dfa4274d24!2m2!1d-96.7976129!2d32.7821534" target="_blank">211 N.Ervay St.<br> 8th Floor<br> Dallas, TX 75201</a></h4>
		</div>
		<div class="col-sm-6 col-md-offset-1 col-md-3 contact">
		<h3>Contact</h3>
		<h4>Abby Coben</h4>
		<h4><a href="mailto:abby@dallasfortwork.com">abby@dallasfortwork.com</a></h4>
		<h4><a href="tel:+12144481015">214.448.1015</a></h4>
		</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 touch">
		<?php echo gravity_form( $id = 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex ); ?>

				
		</div>
	</div>
</div>

</section>


</body>
</html>