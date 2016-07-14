/**
 * Created by goshan on 08.07.16.
 */
var duration = 0;

$('[data-link]').on('click',function () {
    $('body').css('overflow','hidden');
    $('[data-animate]').each( function (i,elem) {
            setTimeout(function () {
                $(elem).toggleClass($(elem).data('animate'));
                $(elem).toggleClass($(elem).data('animate-out'));
            },100*(i+1));
            duration = (140*(i+1))+500;
        }
    );
    setTimeout('location=\"'+this.href+'\"',duration);
    return false;
});

$(document).ready(function(){
    $('[data-animate]').each(function (i, elem) {
        setTimeout(function () {
            $(elem).addClass($(elem).data('animate'));
            $(elem).removeClass('uk-hidden');
            $(elem).removeClass('visible-hidden');
        },200*(i+1));
    });

    $('html').css('overflow','auto')
});