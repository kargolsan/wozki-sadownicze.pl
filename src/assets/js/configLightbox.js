$(document).ready(function () {
    var lightbox = new Lightbox();

    var lightBoxOptions = {
        // options
        boxId: false,
        dimensions: true,
        captions: true,
        prevImg: false,
        nextImg: false,
        hideCloseBtn: false,
        closeOnClick: true,
        loadingAnimation: 200,
        animElCount: 4,
        preload: true,
        carousel: true,
        animation: 400,
        nextOnClick: true,
        responsive: true,
        maxImgSize: 0.8,
        keyControl: true,
    }


    lightbox.load(lightBoxOptions);
});