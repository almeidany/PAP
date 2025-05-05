document.addEventListener('DOMContentLoaded', function () {
    // Selecionar os campos do formulário
    const firstNameInput = document.querySelector('input[name="first_name"]');
    const lastNameInput = document.querySelector('input[name="last_name"]');
    const schoolNumberInput = document.querySelector('input[name="schoolnumber"]');
    const phoneNumberInput = document.querySelector('input[name="phonenumber"]');
    const form = document.querySelector('form');

    // Validar campos de nome (primeiro e último)
    function validateNameInput(input) {
        // Remover caracteres inválidos (só permite letras, espaços e Ç)
        // Removi o hífen da regex conforme solicitado
        input.value = input.value.replace(/[^a-zA-ZÀ-ÿ\u00C0-\u017F\sçÇ]/g, '');

        // Verificar se tem pelo menos 2 caracteres
        if (input.value.trim().length < 2) {
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    // Validar número de processo (5 ou 6 dígitos)
    function validateSchoolNumber(input) {
        // Remover tudo que não for dígito
        input.value = input.value.replace(/\D/g, '');

        // Limitar a 6 dígitos
        if (input.value.length > 6) {
            input.value = input.value.substring(0, 6);
        }

        // Verificar se tem 5 ou 6 dígitos
        if (input.value.length < 5 || input.value.length > 6) {
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    // Validar número de telefone (exatamente 9 dígitos)
    function validatePhoneNumber(input) {
        // Remover tudo que não for dígito
        input.value = input.value.replace(/\D/g, '');

        // Limitar a 9 dígitos
        if (input.value.length > 9) {
            input.value = input.value.substring(0, 9);
        }

        // Verificar se tem exatamente 9 dígitos
        if (input.value.length !== 9) {
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    // Adicionar event listeners para validação em tempo real
    firstNameInput.addEventListener('input', () => validateNameInput(firstNameInput));
    lastNameInput.addEventListener('input', () => validateNameInput(lastNameInput));
    schoolNumberInput.addEventListener('input', () => validateSchoolNumber(schoolNumberInput));
    phoneNumberInput.addEventListener('input', () => validatePhoneNumber(phoneNumberInput));

    // Validar o formulário antes de submeter
    form.addEventListener('submit', function (event) {
        let isValid = true;

        if (!validateNameInput(firstNameInput)) isValid = false;
        if (!validateNameInput(lastNameInput)) isValid = false;
        if (!validateSchoolNumber(schoolNumberInput)) isValid = false;
        if (!validatePhoneNumber(phoneNumberInput)) isValid = false;

        if (!isValid) {
            event.preventDefault();
        }
    });
});