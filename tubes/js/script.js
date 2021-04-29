var myNav = document.getElementById('mynav');
var psAbout = document.getElementById('poster-about');
var psProduct = document.getElementById('poster-product');

window.onscroll = function () { 
    
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100 ) {
        myNav.classList.add("navbar-colored");
        myNav.classList.remove("navbar-transparent");
        document.getElementById('nav-brand').src='assets/img/logo-color.png';
    } 
    else {
        myNav.classList.add("navbar-transparent");
        myNav.classList.remove("navbar-colored");
        document.getElementById('nav-brand').src='assets/img/logo-white.png';
    }

    // about
    if (document.body.scrollTop <= 400 || document.documentElement.scrollTop <= 400 ) {
        psAbout.classList.remove("back-element");
    } 
    if (document.body.scrollTop >= 401 || document.documentElement.scrollTop >= 401 ) {
        psAbout.classList.add("back-element");
    } 

    // Product
    if (document.body.scrollTop <= 1500 || document.documentElement.scrollTop <= 1500 ) {
        psProduct.classList.remove("back-element");
    } 
    if (document.body.scrollTop >= 1501 || document.documentElement.scrollTop >= 1501 ) {
        psProduct.classList.add("back-element");
    } 
    

};

