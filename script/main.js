window.addEventListener('load', function () {
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll > 0 && scroll < window.innerHeight) {
            section2(scroll);
        } else if (scroll > window.innerHeight  && scroll < window.innerHeight * 2) {
            section3(scroll - window.innerHeight);
        } else if (scroll > window.innerHeight * 2 && scroll < window.innerHeight * 3) {
            section4(scroll - window.innerHeight * 2);
        } else if (scroll > window.innerHeight * 3){
            section5(scroll - window.innerHeight *3);
        }

    });
});