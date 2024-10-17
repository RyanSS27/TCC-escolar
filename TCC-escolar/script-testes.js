/*var body = document.getElementsByTagName('body')
body.addEventListener('scroll', rolou())

let ultimaPosicao = 0

rolou() {
    if (scrollY > ultimaPosicao) {
        var cabecalho = window.querySelector('header')
        cabecalho.style.position = 'fixed'
        ultimaPosicao = scrollY
    } else {
        var cabecalho = window.querySelector('header')
        cabecalho.style.position = ''
        ultimaPosicao = scrollY
    }
}*/


//PASSAGEM DE PÁGINAS 

var paginas = document.getElementsByClassName('pagina')
var contPag = paginas.length
var select = document.querySelector('select.select-paginas')
var testes = document.getElementsByTagName('h1')[1]

//Adiciona as páginas ao select
for (cont = 1; cont<=contPag; cont++) {
    var opt = document.createElement('option')
    opt.setAttribute('value', `${cont-1}`)
    opt.innerHTML = `${cont}/${contPag}`
    select.appendChild(opt)
}
cont = ""


//Some com as outras páginas
var lendo = 0
for (c = 0; c<=contPag; c++) {
    paginas[c] != paginas[lendo]? paginas[c].style.display = "none" : paginas[c].style.display = 'block'
}

//Função que faz o navegar de páginas funcionar
function trocaPag(avancarOUvoltar) {
    if (avancarOUvoltar == 1 && lendo != 0) {
        lendo = lendo - 1
        trocaSelect()
    } else if (avancarOUvoltar == 2 && lendo + 1 < contPag) {
        lendo = lendo + 1
        trocaSelect()
    } else if (avancarOUvoltar == 0) {
        lendo = Number(select.value)
    }
    for (c = 0; c<contPag; c++) {
        paginas[c] != paginas[lendo]? paginas[c].style.display = "none" : paginas[c].style.display = 'block'
    }
}


function trocaSelect() {
    select.innerHTML = ''
    var opt = document.createElement('option')
    opt.setAttribute('value', `${lendo}`)
    opt.innerHTML = `${lendo+1}/${contPag}`
    select.appendChild(opt)
    for (cont = 1; cont<=contPag; cont++) {
        if (cont - 1 != lendo) {
            var opt = document.createElement('option')
            opt.setAttribute('value', `${cont-1}`)
            opt.innerHTML = `${cont}/${contPag}`
            select.appendChild(opt)
        }
    }
}














