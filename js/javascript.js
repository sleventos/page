$(document).on('ready', function(){

// ------------- PRELOADER
    TweenLite.to('.preloader', 1, {delay: 1.5, opacity: 0, display: 'none'});
    TweenLite.to('.g-font-size-18--xs g-color--white ti-angle-double-down', 1, {repeat: 0, yoyo: true});

});
