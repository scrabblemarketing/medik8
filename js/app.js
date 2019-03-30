$('.carousel').carousel({
    interval: false
})

var owl = $('.owl-carousel');
owl.owlCarousel({
    margin: 10,
    loop: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        },
    },
    mouseDrag: true,
    autoplay: false,
    URLhashListener: true
});
var owl2 = $('.owl-carousel');
owl2.owlCarousel({
    margin: 10,
    loop: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        },
    },
    mouseDrag: true,
    autoplay: false,
    URLhashListener: true
});
var owl = $('.owl-carousel.pro-int');
owl.owlCarousel({
    margin: 10,
    loop: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        },
    },
    mouseDrag: true,
    autoplay: false,
    URLhashListener: true
});



$('.menu-caracteristicas li a').on('click', function(e) {
    e.preventDefault();
    $('.menu-caracteristicas li a').removeClass('active');

    $(this).addClass('active');
    const link = $(this).attr('href');
    $('.box-descripcion').removeClass('active');

    $('.box-descripcion' + link).addClass('active')
})


/********* tamaño del menu secundario ******/


const menusSecundario = document.querySelectorAll('.nav-second');
const menuPrincipal = document.querySelectorAll('.menu-principal > ul > li > a');

menuPrincipal.forEach(menu => {
    menu.addEventListener('mouseover', function(e) {
        // $('.nav-second').hide();
        // console.log(e.target);

        const aHover = e.target.parentElement.querySelector('.nav-second');

        if (aHover !== null) {
            aHover.style.display = 'flex';

            aHover.addEventListener('mouseleave', function() {
                aHover.style.display = 'none';
            });

        }

    });

})

menusSecundario.forEach(menu => {

    if (menu.childElementCount == 4) {
        menu.style.width = '1342px';

    }
})