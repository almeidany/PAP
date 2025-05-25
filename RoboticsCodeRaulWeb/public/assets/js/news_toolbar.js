document.addEventListener('DOMContentLoaded', function () {
    // ... (restante do seu código)
    const toggleBtn = document.getElementById('toggle-toolbar');
    const toolbarControls = document.getElementById('toolbar-controls');
    let toolbarVisible = true;
    toggleBtn.addEventListener('click', function () {
        toolbarVisible = !toolbarVisible;
        toolbarControls.style.display = toolbarVisible ? 'flex' : 'none';
    });
});