function section5(scroll) {
    if ($('.S5_hand').css('margin-top')[0] == '-') {
        $('.S5_hand').css('margin-top', -Math.abs(window.innerWidth / 100 * 40) + scroll);
    }
    else{
        $('.S5_hand').css('margin-top', 0)
    }
    $('.S5_varken').css('margin-top', $('.S5_hand').css('margin-top').replace('-', ''));
    if ($('.S5_varken').css('margin-left')[0] == '-') {
        $('.S5_varken').css('margin-left', -Math.abs(window.innerWidth / 100 * 40) + scroll);
    }
    if (parseInt($('.S5_right').css('margin-right')) <= window.innerWidth / 100 * 5) {
        $('.S5_right').css('margin-right', -Math.abs(window.innerWidth / 100 * 40) + scroll);
    }
    var a = parseInt($('.S5_right').css('margin-right'));
    var b = (window.innerWidth / 100 * 5);

}