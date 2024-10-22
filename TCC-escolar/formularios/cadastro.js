var senha = document.querySelector('input#isenha')
var confirme = document.querySelector('input#iconfirme')
function liberar_envio() {
    
    if (senha.value == confirme.value && confirme.value != 0) {
        confirme.style.borderColor = "greenyellow"
        var botao = document.querySelector('button.botao')
        botao.type = 'submit'
    } else {
        confirme.style.borderColor = "red"
        botao.type = 'button'
    }
}

function alerta_erro() {
    if (senha.value != confirme.value || confirme.value == '') {
        window.alert('Verifique os campos e tente novamente')
    } 
}