$(function(){

// Page 2 - opacity in object changes when mouse enters and leaves
    var temeria = $("#temeria");
    temeria.mouseenter(function () {
        $(this).stop().fadeTo(300, 0.5);
    });
    temeria.mouseleave(function () {
        $(this).stop().fadeTo(300, 1);
    });
    
        var kaedwen = $("#kaedwen");
    kaedwen.mouseenter(function () {
        $(this).stop().fadeTo(300, 0.5);
    });
    kaedwen.mouseleave(function () {
        $(this).stop().fadeTo(300, 1);
    });
    
        var aedirn = $("#aedirn");
    aedirn.mouseenter(function () {
        $(this).stop().fadeTo(300, 0.5);
    });
    aedirn.mouseleave(function () {
        $(this).stop().fadeTo(300, 1);
    });
    
// Page 2 - click event drives users to region-specific databases

});