function section3(scroll) {
    if ($('.S3vrienden').css('margin-left')[0] == '-') {
        $('.S3vrienden').css('margin-left', -Math.abs(window.innerWidth / 100 * 30) + scroll);
    }
    if ($('.S3text').css('margin-right')[0] == '-') {
        $('.S3text').css('margin-right', -Math.abs(window.innerWidth / 100 * 30) + scroll);
    }
}