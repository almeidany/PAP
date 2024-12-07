function updateDate() {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('datainsc').value = today;
}

function getTimeUntilMidnight() {
    const now = new Date();
    const midnight = new Date(now);
    midnight.setHours(24, 0, 0, 0); // Próxima meia-noite
    return midnight - now;
}

document.addEventListener('DOMContentLoaded', (event) => {
    updateDate();

    // Atualiza a data à meia-noite
    setTimeout(() => {
        updateDate();
        setInterval(updateDate, 24 * 60 * 60 * 1000); // Atualiza a data diariamente
    }, getTimeUntilMidnight());
});
