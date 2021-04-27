
/*setTimeOut tempo para desaparecer mensagens de erro*/
setTimeout(() => {
    $('.x_title .alert').alert('close').removeClass("fadeInDown").addClass(" fadeOutDown");
}, 3000); //depois de 3 segundos

/* Validar modal mudar senha */
var password = document.querySelector('#password')
var confirmPassword = document.querySelector('#password-same')
var messageConfirmPassword = document.querySelector('.validation-same-password')
var closeModal = document.querySelector('.close-modal')
var form = document.querySelector('.modal-full-body')

confirmPassword.addEventListener('blur', (e) => {
    if (confirmPassword.value == password.value ){
        messageConfirmPassword.innerHTML = ''
    }else{
        messageConfirmPassword.innerHTML = 'Senhas não coencidem'
    }

    form.addEventListener('submit', (e) => {
        if (confirmPassword.value != password.value || confirmPassword.legnth > 5 ){
            e.preventDefault();
        }
    })
})

/* Popular província */
$(function () {
    $('#province').on('change', function (e) {
        var province_id = e.target.value;
        $('#municipe').empty();
        //Ajax
        $.get('/ajax-subcat?province_id=' + province_id, function (data) {
            $('#municipe').append(
                '<option selected disabled>Selecionar município</option>')
            $.each(data, function (index, subcatObj) {
                console.log(index)
                $('#municipe').append('<option value="' + subcatObj.id +
                    '">' + subcatObj.name + '</option>')
            });
        });
    });
});

var btnModalAlteraPhoto = document.querySelector('.modal-alteracao-fotografia')
var modalPhoto = document.querySelector('#worker-new-photo')
var closeModalPhoto = document.querySelector('#worker-new-photo .close-modal')
btnModalAlteraPhoto.addEventListener('click', (e) => {
    modalPhoto.style.display='flex'
})
closeModalPhoto.addEventListener('click', (e) => {
    modalPhoto.style.display='none'
})
var btnModalAlteraSenha = document.querySelector('.modal-alteracao-senha')
var modal = document.querySelector('#user-new-password')
var closeModal = document.querySelector('#user-new-password .close-modal')
btnModalAlteraSenha.addEventListener('click', (e) => {
    modal.style.display='flex'
})
closeModal.addEventListener('click', (e) => {
    modal.style.display='none'
})



