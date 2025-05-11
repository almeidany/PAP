document.addEventListener('DOMContentLoaded', function () {
    // Selecionar os campos do formulário
    const firstNameInput = document.querySelector('input[name="first_name"]');
    const lastNameInput = document.querySelector('input[name="last_name"]');
    const schoolNumberInput = document.querySelector('input[name="schoolnumber"]');
    const phoneNumberInput = document.querySelector('input[name="phonenumber"]');
    const emailInput = document.querySelector('input[name="email"]');
    const form = document.querySelector('form');

    // Validar campos de nome (primeiro e último)
    function validateNameInput(input) {
        input.value = input.value.replace(/[^a-zA-ZÀ-ÿ\u00C0-\u017F\s]/g, '');
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
        input.value = input.value.replace(/\D/g, '');
        if (input.value.length > 6) {
            input.value = input.value.substring(0, 6);
        }
        if (input.value.length < 5 || input.value.length > 6) {
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    function validatePhoneNumber(input) {
        // Remove caracteres não numéricos
        input.value = input.value.replace(/\D/g, '');

        // Limitar a 9 dígitos
        if (input.value.length > 9) {
            input.value = input.value.slice(0, 9);
        }

        // Verifica se tem exatamente 9 dígitos
        const isValid = input.value.length === 9;

        // Adiciona ou remove classe de erro visual
        input.classList.toggle('is-invalid', !isValid);

        return isValid;
    }


    // Validar email (limite de 75 caracteres)
    function validateEmail(input) {
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
        input.value = input.value.replace(/[^a-zA-Z]/g, '');
        if (input.value.length > 3) {
            input.value = input.value.substring(0, 3);
        }
        if (input.value.length > 3) {
            input.classList.add('is-invalid');
            return false;
        } else {
            input.classList.remove('is-invalid');
            return true;
        }
    }

    // Validar turma (letras, números e º, máximo 10 caracteres, deve conter pelo menos 1 número e 1 letra)
    function validateClassInput(input) {
        input.value = input.value.replace(/[^a-zA-Z0-9º]/g, '');
        if (input.value.length > 10) {
            input.value = input.value.substring(0, 10);
        }
        const hasLetter = /[a-zA-Z]/.test(input.value);
        const hasNumber = /\d/.test(input.value);
        if (!hasLetter || !hasNumber) {
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