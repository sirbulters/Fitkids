function section4(scroll) {
    if ($('.s4mannetje').css('margin-left')[0] == '-') {
        $('.s4mannetje').css('margin-left', -Math.abs(window.innerWidth / 100 * 50) + scroll);
    }

    if ($('.s4text').css('margin-right')[0] == '-') {
        $('.s4text').css('margin-right', -Math.abs(window.innerWidth / 100 * 40) + scroll);
    }

    if ($('.s4bal').css('margin-left')[0] == '-') {
        $('.s4bal').css('margin-left', -Math.abs(window.innerWidth / 100 * 40) + scroll);
    }
}