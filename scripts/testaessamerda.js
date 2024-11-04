function logout(){
    if (confirm("Deseja realmente deslogar?")) {
        window.location.href = "http://localhost:81/tcc-escolar/tcc-escolar/formularios/deslogar.php"; // Redireciona para a página de logout
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