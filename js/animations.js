$(function(){

// Page 2 - hover function

// Opacity in object changes when mouse enters and leaves
    var temeria = $("#temeria");
    temeria.mouseenter(function () {
        $(this).stop().fadeTo(300, 0.2);
    });
    temeria.mouseleave(function () {
        $(this).stop().fadeTo(300, 1);
    });
    
        var kaedwen = $("#kaedwen");
    kaedwen.mouseenter(function () {
        $(this).stop().fadeTo(300, 0.2);
    });
    kaedwen.mouseleave(function () {
        $(this).stop().fadeTo(300, 1);
    });
    
        var aedirn = $("#aedirn");
    aedirn.mouseenter(function () {
        $(this).stop().fadeTo(300, 0.2);
    });
    aedirn.mouseleave(function () {
        $(this).stop().fadeTo(300, 1);
    });

});