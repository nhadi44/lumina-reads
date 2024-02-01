const slickCarousel = (id) => {
    $(document).ready(function () {
        $(id).slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows: true,
                        autoplay: true,
                        autoplaySpeed: 2000,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: true,
                        autoplay: true,
                        autoplaySpeed: 2000,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        autoplay: true,
                        autoplaySpeed: 2000,
                    },
                },
            ],
        });
    });
};

slickCarousel("#recommendationCarousel");
