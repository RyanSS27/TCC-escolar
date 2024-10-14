
var cap_interesse
function ver_mais(cap) {
    cap_interesse = cap
}

var bloco = document.querySelector('div.bloco-topo')
bloco.addEventListener(onload, verifica())

function verifica() {
    bloco.style.backgroundColor = 'blue'
    bloco.innerHTML = `${cap_interesse}`
    cap_interesse != null? abre_fecha(cap_interesse).cap_interesse = null: false 
}


function abre_fecha(cap, n) {
    var part_inferior = document.getElementsByClassName('capitulos')[cap].querySelector('div.inferior-cap')
    var parte_superior = document.getElementsByClassName('capitulos')[cap].querySelector('div.superior-cap')
    var seta = parte_superior.querySelector('img.arrow-down')


    if (part_inferior.style.display == 'block') {
        part_inferior.style.display = 'none'
        seta.style.transform = 'rotate(0deg)'
        seta.style.transition = '0.5s'
    } else {
        part_inferior.style.display = 'block'
        seta.style.transform = 'rotate(180deg)'
        seta.style.transition = '0.5s'
    }
}


//PASSAGEM DE PÁGINA 









// function teste() {
//     var cap_tamanho = document.getElementsByClassName('capitulos')[0]
//     var valor = Number(cap_tamanho.style.height)
//     var div_ajustada = document.querySelector('div.div-broxa-coloridinha-do-gay-daniel')
//     div_ajustada.style.minHeight = `${valor}px`
// }

