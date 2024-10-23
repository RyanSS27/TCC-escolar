var senha = document.querySelector('input#isenha')
var confirme = document.querySelector('input#iconfirme')
var botao = document.querySelector('button.botao')
function liberar_envio() {
    
    if (senha.value == confirme.value && confirme.value != 0) {
        confirme.style.borderColor = "greenyellow"
        botao.type = 'submit'
    } else {
        confirme.style.border = "2px solid red"
        botao.type = 'button'
    }
}

function barra_usuario_burro() {
    if (senha.value != confirme.value || confirme.value == '') {
        botao.type = 'button'
        window.alert('Verifique os campos e tente novamente')
    } 
}