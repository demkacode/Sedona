$(document).ready(function(){

    $('#btn-search').on('click', function(e){
        console.log(123);
        e.preventDefault();
        $('.popup_form').fadeToggle();
    });

});
