let currentPosition = 1;

$('.laisin-show-product-menu').children().on('click', function() {
    if (!$(this).hasClass('menu-active')) {
        $('.laisin-show-product-menu').children().removeClass('menu-active');
        $(this).addClass('menu-active');

        $('.product-spesification, .product-description').slideToggle('slow'); // Using slideToggle for animation

        currentPosition = (currentPosition === 1) ? 2 : 1; // Ternary operator for concise code
    }
});