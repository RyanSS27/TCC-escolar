const urlBase = `${window.location.protocol}//${window.location.hostname}${window.location.port ? ':' + window.location.port : ''}/`
function logout(){
    if (confirm("Deseja realmente deslogar?")) {
    window.location.href = `${urlBase}tcc-escolar/tcc-escolar/formularios/deslogar.php`; // Redireciona para a página de logout
    }
}

function menuMobile() {
    var navMobile = document.querySelector('div.nav-mobile')
    var iconMenu = document.querySelector('img.icon-menu')

    if (navMobile.style.display == "none") {
        navMobile.style.display = "block"
        iconMenu.src = "icons/fechar.png"
    } else {
        navMobile.style.display = "none"
        iconMenu.src = "icons/menu-hamburguer.png"
    }
}