var btnModalAlteraSenha = document.querySelector('.modal-alterao-senha')
var modal = document.querySelector('.modal-wrapper')
var closeModal = document.querySelector('.close-modal')
btnModalAlteraSenha.addEventListener('click', (e) => {
    modal.style.display='flex'
})
closeModal.addEventListener('click', (e) => {
    modal.style.display='none'
})

/*setTimeOut tempo para desaparecer mensagens de erro*/
setTimeout(() => {
    $('.x_title .alert').alert('close').removeClass("fadeInDown").addClass(" fadeOutDown");
}, 3000); //depois de 3 segundos