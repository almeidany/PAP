document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('subbtn').addEventListener('click', function (event) {
        event.preventDefault(); // Impede o envio do formulário imediatamente

        const emailField = document.getElementById('email');
        const requiredFields = document.querySelectorAll('input[required], textarea[required], select[required]');
        let allFieldsFilled = true;

        // Verifica se todos os campos obrigatórios estão preenchidos
        requiredFields.forEach(function (field) {
            if (!field.value) {
                allFieldsFilled = false;
            }
        });

        // Verifica se o email contém um '@'
        const emailValid = emailField.value.includes('@');

        if (allFieldsFilled && emailValid) {
            const confirmation = confirm('Tem certeza dos dados inseridos?');
            if (confirmation) {
                document.querySelector('form').submit(); // Envia o formulário se o usuário confirmar
                window.location.href = 'index.html'; // Redireciona para index.html após a submissão
            }
        } else {
            alert('Por favor, preencha todos os campos obrigatórios e insira um email válido.');
        }
    });
});