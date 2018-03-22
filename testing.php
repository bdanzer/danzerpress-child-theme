<?php
/* Template Name: Testing - DanzerPress */
?>
<?php get_header(); ?>

<style type="text/css">
	.danzerpress-title-area {
	    display: none !important;
	}
</style>

<div class="danzerpress-section" id="section-1" style="margin-top: -60px;position: relative; position: relative; height: calc(100vh);">
	<div class="video-background">
	    <div class="video-foreground">
	      <iframe src="https://player.twitch.tv/?channel=gamesdonequick" frameborder="0" allowfullscreen="true" scrolling="no"></iframe>
	    </div>
	    <div class="video-text">
	    	<div class="danzerpress-flex-row">
	    		<div class="danzerpress-two-thirds danzerpress-col-center danzerpress-align-self" style="margin:0px;">
					<h2 class="danzerpress-title" style="margin-bottom: 20px; color: white !important;">What others think</h2>
					<p style="text-align: center; font-size: 21px;margin-bottom: 40px;line-height: 36px;color: white !important;">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Nulla vitae magna sed</p>
					<p style="text-align: center;"><a href="" class="danzerpress-button-modern">Call to action</a></p>
				</div>
	    	</div>
	    </div>
  	</div>
</div>

<div class="danzerpress-section" id="" style="background: #242a30; padding: 40px 0;">
	<div class="danzerpress-wrap">
		
		<div class="danzerpress-flex-row">
			<div class="danzerpress-col-1 danzerpress-col-center" style="margin: 0px auto !important;">
				<div class="danzerpress-flex-row">
					<div class="danzerpress-two-thirds danzerpress-align-center" style="margin:0px;">
						<h2 class="danzerpress-title" style="text-align: center; font-size: 20px; color: white !important; margin:0px !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna sed massa aliquam porta. </h2>
					</div>
					<div class="danzerpress-one-third danzerpress-align-center danzerpress-margin-zero" style="margin:0px;">
						<p style="text-align: center;"><a href="" class="danzerpress-button-modern">Call to action</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<style type="text/css">
.video-background {
  background: #000;
  position: absolute;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: 0;
  display: flex;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
.video-text {
	z-index: 222222;
    position: absolute;
    width: 100%;
    text-align: center;
    display: flex;
    align-self: center;
    justify-content: center;
}
.video-background:after {
    background: #0000008c;
    width: 100%;
    height: 100%;
    display: block;
    content: "";
    position: absolute;
    top: 0;
    z-index: 2;
}
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
</style>


<div class="danzerpress-section" id="" style="">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title" style="margin-bottom: 15px;">Fancybox Testing</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center" style="">

				<p style="text-align: center;">
					Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.
				</p>

				<p style="text-align: center;">
					<a class="danzerpress-button-modern danzerpress-button-left" data-fancybox="" data-type="iframe" data-src="https://danzerpress.com" href="javascript:;">
						Webpage
					</a>

					<a class="danzerpress-button-modern danzerpress-button-off" data-fancybox="" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
					  YouTube video
					</a>
				</p>

			</div>
		</div>
	</div>
</div>


<div class="danzerpress-section danzerpress-odd" id="" style="">
	<div class="danzerpress-wrap">
		<div class="danzerpress-icon-img wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
			<img src="http://localhost:8888/danzerpress-live-environment/wp-content/uploads/2017/11/danzerpressofficial2-e1515976172986.png">
		</div>
		<h2 class="danzerpress-title" style="margin-bottom: 40px;">Slick Slider</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center" style="">

				<div class="slider">
				  <div class="danzerpress-col-3">
				  	<div class="danzerpress-box danzerpress-white danzerpress-shadow-3">
				  		<h4>Hello</h4>
				  		<p>your content</p>
				  	</div>
				  </div>
				  <div class="danzerpress-col-3">
				  	<div class="danzerpress-box danzerpress-white danzerpress-shadow-3">
				  		<h4>Hello</h4>
				  		<p>your content</p>
				  	</div>
				  </div>
				  <div class="danzerpress-col-3">
				  	<div class="danzerpress-box danzerpress-white danzerpress-shadow-3">
				  		<h4>Hello</h4>
				  		<p>your content</p>
				  	</div>
				  </div>
				  <div class="danzerpress-col-3">
				  	<div class="danzerpress-box danzerpress-white danzerpress-shadow-3">
				  		<h4>Hello</h4>
				  		<p>your content</p>
				  	</div>
				  </div>
				  <div class="danzerpress-col-3">
				  	<div class="danzerpress-box danzerpress-white danzerpress-shadow-3">
				  		<h4>Hello</h4>
				  		<p>your content</p>
				  	</div>
				  </div>
				  <div class="danzerpress-col-3">
				  	<div class="danzerpress-box danzerpress-white danzerpress-shadow-3">
				  		<h4>Hello</h4>
				  		<p>your content</p>
				  	</div>
				  </div>
				</div>

			</div>
		</div>
	</div>
</div>



<div class="danzerpress-section recent_post_section" id="" style="">
	<div class="danzerpress-wrap">

		<div class="danzerpress-four-fifths danzerpress-col-center">
			<h2 class="danzerpress-title" style="margin-bottom: 40px;">Half Rectangles</h2>
			<div class="danzerpress-flex-row danzerpress-row-fix">

				<div class="danzerpress-col-2 danzerpress-sm-2 danzerpress-xs-1 danzerpress-flex-row">
					<div class="danzerpress-col-2 danzerpress-md-1 danzerpress-sm-1 danzerpress-fix danzerpress-lineheight-fix">
						<img style="height: 100%;width: 100%;object-fit: cover;" src="https://unsplash.it/1920/1080/?random">
					</div>
					<div class="danzerpress-col-2 danzerpress-md-1 danzerpress-sm-1 danzerpress-flex-column danzerpress-fix">
						<div class="danzerpress-box danzerpress-grey">
							<h2>Sample Post</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan, mauris et auctor consequat, est quam suscipit lacus, eu dictum...</p>
							<p><a class="" href="">Read More</a></p>
						</div>
					</div>
				</div>

				<div class="danzerpress-col-2 danzerpress-sm-2 danzerpress-xs-1 danzerpress-flex-row">
					<div class="danzerpress-col-2 danzerpress-md-1 danzerpress-sm-1 danzerpress-fix danzerpress-lineheight-fix">
						<img style="height: 100%;width: 100%;object-fit: cover;" src="https://unsplash.it/1920/1079/?random">
					</div>
					<div class="danzerpress-col-2 danzerpress-md-1 danzerpress-sm-1 danzerpress-flex-column danzerpress-fix">
						<div class="danzerpress-box danzerpress-grey">
							<h2>Sample Post</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan, mauris et auctor consequat, est quam suscipit lacus, eu dictum...</p>
							<p><a class="" href="">Read More</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>



<div class="danzerpress-section danzerpress-odd danzerpress-slick-carousel" id="" style="">
	<div class="danzerpress-wrap">
		<h2 class="danzerpress-title" style="margin-bottom: 40px;">Slick Caroseul</h2>
		<div class="danzerpress-flex-row">
			<div class="danzerpress-two-thirds danzerpress-col-center" style="">

				<?php 
					$array = array(
						'https://unsplash.it/1920/1080/?random',
						'https://unsplash.it/1920/1079/?random',
						'https://unsplash.it/800/500/?random',
						'https://unsplash.it/1920/1077/?random',
						'https://unsplash.it/1920/1076/?random',
						'https://unsplash.it/1920/1075/?random',
					);
				?>

				<div class="slider-for" style="margin-bottom: 20px;">

					<?php 

					foreach ($array as $value) {
						echo 
						'
						<div class="danzerpress-col-1 danzerpress-fix">
							<div class="danzerpress-white danzerpress-shadow-3 danzerpress-rectangle">
								<img class="danzerpress-ab-items" src="' . $value . '">
							</div>
						</div>
						';
					}

					?>
				</div>

				<div class="slider-nav">

					<?php 

					foreach ($array as $value) {
						echo 
						'
						<div class="danzerpress-col-3">
							<div class="danzerpress-white danzerpress-shadow-3 danzerpress-rectangle">
								<img class="danzerpress-ab-items" src="' . $value . '">
							</div>
						</div>
						';
					}

					?>
				</div>

			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>