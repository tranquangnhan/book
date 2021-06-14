$('.show-option').click(function (e) { 
    e.preventDefault();
    var active = $(this).hasClass('control-active');

    if (!active) {        
        var num = $(this).attr('data-show-op');
        var numActive = $('.option-active').attr('data-show-op');
        console.log(num, numActive);

        $('div[data-option="'+ numActive +'"]').removeClass('active');
        $('div[data-option="'+ num +'"]').addClass('active');

        $('div[data-show-op="'+ num +'"]').addClass('option-active');
        $('div[data-show-op="'+ numActive +'"]').removeClass('option-active');        
    } 

});