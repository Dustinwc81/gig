$('.card-image-overlay').hide();

$(".card").hover(function(){
    $(this).attr('.card-image-overlay').toggle();
});
