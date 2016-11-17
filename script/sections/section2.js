function section2(scroll) {
    if ($('.s2mannetje').css('margin-left')[0] == '-') {
        $('.s2mannetje').css('margin-left', -Math.abs(window.innerWidth / 100 * 40) + scroll);
    }

    if ($('.s2text').css('margin-right')[0] == '-') {
        $('.s2text').css('margin-right', -Math.abs(window.innerWidth / 100 * 40) + scroll);
    }

    //if ($('.s2bal').css('margin-bottom')[0] == '-') {
    //    $('.s2bal').css('margin-bottom', -Math.abs(window.innerHeight / 100 * 20) + scroll);
    //}

    //if ($('.s2bal').css('margin-right')[0] == '-') {
    //    $('.s2bal').css('margin-right', -Math.abs(window.innerWidth / 100 * 10) + scroll);
    //}
}