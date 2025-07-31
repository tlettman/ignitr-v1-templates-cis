
let audioEnabled = false; // set to true when user unmutes manually
let hardMute = false;
const $video = $('#hero-video');
const $unmuteButton = $('#unmute-button');

function muteHeroVideo() {
  $video.prop('muted', true)[0].volume = 0;
  console.log('Hero video muted by scroll');
}

function unmuteHeroVideo() {
  if (!audioEnabled) return; // only unmute if user previously unmuted
  $video.prop('muted', false)[0].volume = 1;
  console.log('Hero video unmuted by scroll');
}

function fadeInVolume($video, target = 1.0, step = 0.05, interval = 100) {
  const vid = $video[0];
  vid.muted = false;

  let current = vid.volume;

  const fade = setInterval(() => {
    current = Math.min(current + step, target);
    vid.volume = current;

    if (current >= target) {
      clearInterval(fade);
    }
  }, interval);
}


$('.play-fs-video').on('click', function (e) {
  e.preventDefault();

  const videoSrc = 'https://staging.v1.ignitr.com/templates/v1-template/skins/2025/assets/video/MYVIDEO.mp4';
  const $overlay = $('#fs-video-overlay');
  const $player = $('#fs-video-player');

  $player.find('source').attr('src', videoSrc);
  $player[0].load();
  $overlay.fadeIn(300);
  hardMute = true; // turns off scrolling feature when fs video displayed
  muteHeroVideo();
});

// Close handler
$('#fs-video-close').on('click', function () {
  const $overlay = $('#fs-video-overlay');
  const $player = $('#fs-video-player');

  $player[0].pause();
  $player.find('source').attr('src', '');
  $overlay.fadeOut(300);
  hardMute = false;
});



$(function() {

	// Hero Video 
    const video = $video[0];

    let loopCount = 0;
    let lastTime = 0;

    // Fade in button on first play
    $video.one('play', function () {
    $unmuteButton.fadeIn(1000);
    setTimeout(function () {
        $('#hero-cta').fadeIn(1000);
        }, 5000);

    });

    // Manual unmute via button
    $unmuteButton.on('click', function () {
      if( audioEnabled == false ){
        $video.prop('muted', false)[0].volume = 1;
        audioEnabled = true;
        console.log('Hero video unmuted by button');
        // $(this).fadeOut(1000);
        $(this).find('div').html('<i class="fa-solid fa-volume-slash"></i>');
      } else {
        $video.prop('muted', true)[0].volume = 0;
        audioEnabled = false;
        console.log('Hero video muted by button');
        // $(this).fadeOut(1000);
        $(this).find('div').html('<i class="fa-solid fa-volume"></i>');
      }
        
    });
	
});


// Scroll detection: mute when out, unmute when back in
$(window).on('scroll', function () {
  const $video = $('#hero-video');
  const videoTop = $video.offset().top - 100;
  const videoBottom = videoTop + $video.outerHeight();
  const scrollTop = $(window).scrollTop();
  const windowBottom = scrollTop + $(window).height();

  const isVisible = (videoBottom > scrollTop) && (videoTop < windowBottom);

  if (!isVisible) {
    muteHeroVideo();
  } else if( hardMute === false ) {
    unmuteHeroVideo();
  }
});
