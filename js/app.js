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
const menuPrincipal = document.querySelector('.menu-principal');

/*
menuPrincipal.addEventListener('mouseover', function(e) {
    
    // console.log(e.target);
    // menusSecundario.forEach(menu => {
    //     menu.classList.remove('nav-active')
    // })

    const aHover = e.target.parentElement.querySelector('.nav-second');
    // console.log(aHover);
    
    if (aHover !== null) {
        aHover.classList.add('nav-active')

        // aHover.addEventListener('mouseleave', function() {
        //     aHover.style.display = 'none'
        // })

    }

})
*/
menusSecundario.forEach(menu => {
   
    
    if (menu.childElementCount == 4) {
        menu.style.width = '1342px';
    }



    // menu.addEventListener('mouseleave', function() {
    //     this.style.display = 'none'
    // })
})


//// ACORDEON


// $('.guardar').hide();
let num=0;
$('.acordeon ul li a').on('click',function(e){
    e.preventDefault()
    // const todos = $('.guardar').hide()
    const info = $(this).parent().contents()[3];
    // console.log(info)

    if(num > 0){
        info.classList.remove('mostrar')
        info.classList.add('esconder')
        num--

    }else{
        info.classList.remove('esconder')
        info.classList.add('mostrar')
        num++
        
    }
    
    console.log(num)
    
    
    
})

console.log(num)




$(document).on('click',function(){
    
    const boton = document.querySelector('#submit');


    // boton.disabled = true;
    function espaciosVacios(texto){

        if(texto !== ''){
            return true;
        }else{
            return false;
        }

    }
    function confirmarPass(pass1, pass2){

        if(pass1 === pass2){
            boton.disabled = false;
        }

    }

    const nombre= document.querySelector('#nombre')
    const apellido= document.querySelector('#apellido')
    const correo= document.querySelector('#correo')
    const password= document.querySelector('#password')
    const confirmar= document.querySelector('#confirmar')
    const ac1= document.querySelector('#ac1')
    const ac2= document.querySelector('#ac2')

    

    function aprobado(){
        if(nombre !== '' &&
           apellido !== '' &&
           correo !== '' &&
           password !== '' &&
           confirmar !== ''){
                return true;
           }else{
               return false;
           }
    }
    function corroborar(){
        let error;
        if(nombre == ''){
            error = nombre.parentElement.querySelector('.error')
            error.style.color='red';
            error.innerHTM='Este campo es requerido'
        }
        else if(apellido){
            error = apellido.parentElement.querySelector('.error')
            error.style.color='red';
            error.innerHTM='Este campo es requerido'
        }
        else if(correo){
            error = correo.parentElement.querySelector('.error')
            error.style.color='red';
            error.innerHTM='Este campo es requerido'
        }
        else if(password){
            error = password.parentElement.querySelector('.error')
            error.style.color='red';
            error.innerHTM='Este campo es requerido'
        }
        else if(confirmar){
            error = confirmar.parentElement.querySelector('.error')
            error.style.color='red';
            error.innerHTM='Este campo es requerido'
        }
    }
    $('.form-registro').on("submit",function(){
        console.log('algo')
        const comprobar = aprobado();
        if(comprobar){
            boton.disabled = false;
        }else{
            console.log('no')
            corroborar();
        }
    })

})










