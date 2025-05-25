document.addEventListener('DOMContentLoaded', function () {
    const editor = document.getElementById('editor');
    const hiddenInput = document.getElementById('news');

    // Função para executar comandos
    function execCommand(command, value = null) {
        document.execCommand(command, false, value);
        editor.focus();
    }

    // Eventos dos botões
    document.querySelectorAll('[data-command]').forEach(btn => {
        btn.addEventListener('click', function () {
            if (this.tagName === 'SELECT') return;
            execCommand(this.dataset.command);
        });
    });

    // Eventos para selects
    document.querySelector('.font-family').addEventListener('change', function () {
        execCommand('fontName', this.value);
    });

    // Atualizar campo hidden no submit
    document.querySelector('form').addEventListener('submit', function () {
        hiddenInput.value = editor.innerHTML;
    });
});