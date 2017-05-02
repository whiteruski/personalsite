var resize;
var updateStyles = function(){
    clearTimeout(resize);
    resize = setTimeout(function(){

        $('.item-skills').each(function(){
            newWidth = $(this).parent().width() * $(this).data('percent');
            $(this).width(0);
            $(this).animate({
                width: newWidth,
            }, 1000);
        });
        $('.icons-red').each(function(){
            height = $(this).height();
            $(this).animate({
                height: 14,
            }, 2000);
        });
    }, 100);

};

$(document).load(updateStyles);

window.onresize = function() {
    updateStyles();
};

$(function(){
    // Set email to avoid spam
    // TODO: contact form instead
    var un = 'xenadeveloper';
    var domain = 'gmail.com';

    document.getElementById('email').innerHTML = un + '@' + domain;
    document.getElementById('email-footer').innerHTML = un + '@' + domain;
});
