<?
// Get a list of videos
$videos = $this->widget( 'videomgmt', 'videolist', '' );
if( is_array( $videos ) ){
	$hero_video = $videos[0]['filename'];
}
// Mobile Detect
require_once( SP.'/core/libraries/mobile-detect/Mobile_Detect.php' );
$detect = new Mobile_Detect;
?>


<section id="hero">

	<?
	if( $detect->isMobile() || !$hero_video ){
		// echo '<h1>LETS ADD SOME CONTENT ABOVE THE VIDEO OR PAD IT</H1>';
		// echo '<p style="height:50px"> </p>';
	}
	?>
	
	<div class="ratio ratio-16x9">
			<video id="hero-video" autoplay playsinline loop muted>
			<source src="/files/v1-template/videomgmt/files/<?=$hero_video?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>

	<div id="hero-cta">
		<? $this->flaresWidget('UzEjZbwNoB',1) ?>
	</div>

	<a id="unmute-button" class="text-center">
		<div><i class="fa-solid fa-volume"></i></div>
		<p>Click For Sizzle!</p>
	</a>

</section>

<div id="sections-wrapper">
	<?
	require $this->inc.'snippets/section1.php';
	require $this->inc.'snippets/section2.php';
	require $this->inc.'snippets/section3.php';
	require $this->inc.'snippets/section4.php';
	?>
</div>


<div id="fs-video-overlay">
    <i id="fs-video-close" aria-label="Close video" class="fa-solid fa-rectangle-xmark"></i>
    <video id="fs-video-player" controls autoplay>
    <source src="" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>


