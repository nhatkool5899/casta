// const progressCircle = document.querySelector(".autoplay-progress svg");
// const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".banner-swiper", {
    spaceBetween: 10,
    centeredSlides: true,
    navigation: {
        nextEl: '.banner-next-slide',
        prevEl: '.banner-prev-slide',
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    }
});

var swiper = new Swiper(".service-swiper", {
    slidesPerView: 1,
    spaceBetween: 12,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination:{
        el:".service-pagination",
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        576: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 12,
        }
    }
});

var swiper = new Swiper(".swiper-home", {
    slidesPerView: 1,
    spaceBetween: 12,
    navigation: {
        nextEl: '.home-next-slide',
        prevEl: '.home-prev-slide',
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        576: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 12,
        }
    }
});


var swiper = new Swiper(".swiper-news", {
    slidesPerView: 1,
    slidesPerColumn: 1,
    spaceBetween: 12,
    navigation: {
        nextEl: '.news-next-slide',
        prevEl: '.news-prev-slide',
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        576: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 12,
        }
    }
});

var swiper = new Swiper(".swiper-partner", {
    slidesPerView: 2,
    slidesPerColumn: 1,
    spaceBetween: 12,
    loop: false,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.partner-next-slide',
        prevEl: '.partner-prev-slide',
    },
    breakpoints: {
        1400: {
            slidesPerView: 6,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 12,
        },
        992: {
            slidesPerView: 5,
            spaceBetween: 12,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 12,
        },
        400: {
            slidesPerView: 3,
            slidesPerColumn: 1,
            spaceBetween: 12,
        }
    }
});