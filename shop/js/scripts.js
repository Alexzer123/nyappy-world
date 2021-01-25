$(document).ready(function () {
    $('.latest-news-slider').slick({
        slidesPerRow: 1,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 1500,
    });

    $(".b-latest-news .latest-news-card-text").each(function (i) {
        len = $(this).text().length;
        if (len > 150) {
            $(this).text($(this).text().substr(0, 150) + '...');
        }
    });

    // $('.latest-news-card-text').text($('.latest-news-card-text').text().replace(/(\n|\r|\f)/g, ' '));
    // $('.latest-news-card-text').html($('.latest-news-card-text').text().replace(/(.{100}).{0,}/, '$1... <span class="detailed">Подробнее</span>'));

    $(".b-your-picture #add-product").on("click", function () {
        $(".b-your-picture #products-own-picture").find(".b-your-picture .product-own-picture").last().clone().appendTo(".b-your-picture #products-own-picture");
    });
});