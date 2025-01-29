window.sr = ScrollReveal({reset: true})


sr.reveal('.titulos-animation', {
    duration: 1400,
    origin: 'left',
    distance: '50px'
})
sr.reveal('.texto-topo-animation', {
    duration: 2150,
    origin: 'left',
    distance: '50px'
})

sr.reveal('.borda-animation', {
    duration: 1400,
    origin: 'bottom',
    distance: '50px',
    display: 'block'
})

sr.reveal('.img-beneficio', {
    duration: 1400,
    origin: 'left',
    distance: '50px',
    display: 'block'
})

sr.reveal('.img-desanimo', {
    duration: 1400,
    origin: 'right',
    distance: '50px',
    display: 'block'
})

sr.reveal('.pilares', {
    duration: 1400,
    origin: 'bottom',
    distance: '50px'
})

sr.reveal('.fundador', {
    rotate: {
        x: 0,
        y: 60,
        z: 0,
    },
    duration: 1000
})
//
sr.reveal('.dica-central', {
    duration: 1400,
    origin: 'bottom',
    distance: '25px'
})

sr.reveal('.setas-animation', {
    duration: 1400,
    rotate: {
        x: 0,
        y: 60,
        z: 0,
    }
})


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