let initA11yMeVideo = function () {
    let videoPlayer = document.querySelectorAll('.a11y-me-videoplayer');

    videoPlayer.forEach(function (videoPlayer, index) {
        let video = videoPlayer.querySelector('video');
        let playerId = 'a11ymevideo-' + index;
        video.setAttribute('id', playerId);

        let lang = video.getAttribute('lang');
        mejs.i18n.language(lang);

        let player = new MediaElementPlayer(playerId, {
            stretching: 'responsive',
            features: ['playpause', 'current', 'progress', 'duration', 'volume', 'tracks', 'a11y', 'fullscreen'],
            toggleCaptionsButtonWhenOnlyOne: true,
            alwaysShowControls: true,
            success: function (mediaElement, originalNode, instance) {
                // because of option: toggleCaptionsButtonWhenOnlyOne: true
                // max 1 Caption => Hide caption-selector => no focus of selector
                let captionSelector = videoPlayer.querySelector('.mejs__captions-selector');
                if (captionSelector) {
                    captionSelector.setAttribute('style', 'display:none');
                }

                // Change Position from .mejs__controls (under the video)
                let buttons = videoPlayer.querySelectorAll('.mejs__overlay-play, .mejs__play button, .mejs__overlay-button, .mejs__controls');
                buttons.forEach(function (button, index) {
                    button.addEventListener('click', event => {
                        videoPlayer.classList.add('active-controls');
                    });
                });
                buttons = videoPlayer.querySelectorAll('button, [role="button"], [tabindex="0"]');
                buttons.forEach(function (button, index) {
                    button.addEventListener('focus', event => {
                        videoPlayer.classList.add('active-controls');
                    });
                });
            }
        });
    });
};

window.addEventListener('load', function (e) {
    initA11yMeVideo();
}, true);

