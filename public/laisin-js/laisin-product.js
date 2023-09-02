$(document).ready(function() {
    let currentPosition = 1;

    $('.laisin-show-product-menu').children().on('click', function() {
        if (!$(this).hasClass('menu-active')) {
            $('.laisin-show-product-menu').children().removeClass('menu-active');
            $(this).addClass('menu-active');

            if (currentPosition == 1) {
                $('.product-spesification, .product-description').toggleClass('hidden');
                currentPosition = 2;
            } else {
                $('.product-spesification, .product-description').toggleClass('hidden');
                currentPosition = 1;
            }

            currentPosition = (currentPosition === 1) ? 2 : 1; // Ternary operator for concise code
        }
    });
})