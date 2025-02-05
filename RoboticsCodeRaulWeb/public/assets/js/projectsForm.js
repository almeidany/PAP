// Referências aos elementos do DOM
const modal = document.getElementById('modal');
const addProjectBtn = document.getElementById('addProjectBtn');
const projectDate = document.getElementById('projectDate');

// Função para abrir o modal
function openModal() {
    modal.style.display = 'flex'; // Exibe o modal como pop-up centralizado
    setDateInPortugal(); // Atualiza a data ao abrir o modal
}

// Função para fechar o modal
function closeModal() {
    modal.style.display = 'none'; // Oculta o modal
}

// Função para obter a data atual no fuso horário de Portugal
function getDateInPortugal() {
    const now = new Date();
    const options = { timeZone: 'Europe/Lisbon', year: 'numeric', month: '2-digit', day: '2-digit' };
    return new Intl.DateTimeFormat('pt-PT', options).format(now);
}

// Função para definir a data no campo de data
function setDateInPortugal() {
    const dateInPortugal = getDateInPortugal();
    projectDate.value = dateInPortugal;
}

// Configura a atualização automática da data
function setupDateUpdate() {
    setDateInPortugal(); // Define a data inicial
    const now = new Date();
    const millisUntilMidnight = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 0, 0, 0) - now;

    // Atualiza a data automaticamente à meia-noite
    setTimeout(() => {
        setDateInPortugal();
        setInterval(setDateInPortugal, 24 * 60 * 60 * 1000); // Atualiza a cada 24 horas
    }, millisUntilMidnight);
}

// Inicializa a data ao carregar o script
setupDateUpdate();

// Adiciona evento ao botão de adicionar projeto para abrir o modal
if (addProjectBtn) {
    addProjectBtn.addEventListener('click', openModal);
}

// Adiciona o evento de submit no formulário para fechar o modal e simular envio
document.getElementById('projectForm').addEventListener('submit', (e) => {
    e.preventDefault(); // Evita o envio real do formulário
    closeModal();
    alert('Projeto adicionado!'); // Simulação de mensagem
});
