window.document.getElementById('frmCad').addEventListener('submit', function (event) {
    event.preventDefault();

    const form = {
        'action': 'insertUser',
        'nome': window.document.getElementById('inputNome').value,
        'email': window.document.getElementById('inputEmail').value,
        'senha': window.document.getElementById('inputSenha').value
    };

    console.log(form);
    $.ajax({
            method: 'POST',
            async: true,
            url: '../routers/usuario.php',
            data: form
        })
        .done(e => {
            $('#frmCad').trigger('reset');
            $('#inputNome').focus();
            window.alert('Informações salvas');
        })
        .fail(e => {
            console.log(e.responseText);
        });
});