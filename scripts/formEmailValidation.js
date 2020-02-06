let sideMenu = document.getElementById('sideMenu');
const catalogue = document.getElementById('catalogue');
function openSideMenu(){
    console.log(sideMenu);
    if(sideMenu.classList.contains('menu-mobile-opened') === true){
        sideMenu.classList.remove('menu-mobile-opened');
        catalogue.style.display = "none";
    }else{
        sideMenu.classList.add('menu-mobile-opened');
        catalogue.style.display = "none";
    }
}