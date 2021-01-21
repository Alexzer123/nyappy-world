$(document).ready(function () {
    $('.latest-news-slider').slick({
        slidesPerRow: 1,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 1500,
    });

    $(".b-your-picture #add-product").on("click", function () {
        $(".b-your-picture #products-own-picture").find(".b-your-picture .product-own-picture").last().clone().appendTo(".b-your-picture #products-own-picture");
    });
});