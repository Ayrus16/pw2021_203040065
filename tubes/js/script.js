var myNav = document.getElementById('mynav');
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

    // Product
    if (document.body.scrollTop <= 200 || document.documentElement.scrollTop <= 200 ) {
        psProduct.classList.remove("back-element");
    } 
    if (document.body.scrollTop >= 201 || document.documentElement.scrollTop >= 201 ) {
        psProduct.classList.add("back-element");
    } 
    

};

