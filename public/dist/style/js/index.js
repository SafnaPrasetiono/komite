$(document).scroll(() => {
    var classed = $('.navbar');
    classed.toggleClass('bg-navbar shadow', $(this).scrollTop() > classed.height());
});