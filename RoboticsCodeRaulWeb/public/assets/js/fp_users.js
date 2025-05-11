document.addEventListener('DOMContentLoaded', function () {
    // Selecionar os campos do formulário
    const firstNameInput = document.querySelector('#first_name');
    const lastNameInput = document.querySelector('#last_name');
    const schoolNumberInput = document.querySelector('#schoolnumber');
    const phoneNumberInput = document.querySelector('#phonenumber');
    const emailInput = document.querySelector('#email');
    const tshirtSizeInput = document.querySelector('#tshirt_size');
    const classInput = document.querySelector('#class');
    const form = document.querySelector('form');

    // Validar campos de nome (primeiro e último)
    function validateNameInput(input) {
        // Remover caracteres inválidos (só permite letras e espaços)
        input.value = input.value.replace(/[^a-zA-ZÀ-ÿ\u00C0-\u017F\s]/g, '');

        // Verificar se tem pelo menos 2 caracteres e no máximo 35
        if (input.value.trim().length < 2 || input.value.trim().length > 35) {
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

        // Verificar se tem exatamente 9 dígitos
        if (input.value.length !== 9) {
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    // Validar email (limite de 75 caracteres)
    function validateEmail(input) {
        // Verificar se excede o limite de 75 caracteres
        if (input.value.length > 75) {
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    // Validar tamanho da T-shirt (somente letras, máximo 3 caracteres)
    function validateTshirtSize(input) {
        // Permitir apenas letras
        input.value = input.value.replace(/[^a-zA-Z]/g, '');

        // Verificar se excede o limite de 3 caracteres
        if (input.value.length > 3) {
            input.value = input.value.substring(0, 3); // Limitar a 3 caracteres
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    // Validar turma (letras, números e º, máximo 10 caracteres)
    function validateClassInput(input) {
        // Permitir apenas letras, números e º
        input.value = input.value.replace(/[^a-zA-Z0-9º]/g, '');

        // Verificar se excede o limite de 10 caracteres
        if (input.value.length > 10) {
            input.value = input.value.substring(0, 10); // Limitar a 10 caracteres
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
    emailInput.addEventListener('input', () => validateEmail(emailInput));
    tshirtSizeInput.addEventListener('input', () => validateTshirtSize(tshirtSizeInput));
    classInput.addEventListener('input', () => validateClassInput(classInput));

    // Validar o formulário antes de submeter
    form.addEventListener('submit', function (event) {
        let isValid = true;

        if (!validateNameInput(firstNameInput)) isValid = false;
        if (!validateNameInput(lastNameInput)) isValid = false;
        if (!validateSchoolNumber(schoolNumberInput)) isValid = false;
        if (!validatePhoneNumber(phoneNumberInput)) isValid = false;
        if (!validateEmail(emailInput)) isValid = false;
        if (!validateTshirtSize(tshirtSizeInput)) isValid = false;
        if (!validateClassInput(classInput)) isValid = false;

        if (!isValid) {
            event.preventDefault();
        }
    });
});