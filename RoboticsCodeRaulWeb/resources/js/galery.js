document.addEventListener('DOMContentLoaded', function() {
    const yearButtons = document.getElementById('yearButtons');
    const mainContent = document.getElementById('mainContent');
    const carouselInner = document.getElementById('carouselInner');

    // Anos disponíveis
    const years = [2021, 2022, 2023, 2024];
    const recentYear = Math.max(...years);

    // Subtítulos e imagens específicas para cada ano
    const data = {
        2021: {
            'Botlompyics': ['img/2021/botlompyics1.jpg', 'img/2021/botlompyics2.jpg'],
            'Festival Nacional da Robótica': ['img/2021/festival1.jpg', 'img/2021/festival2.jpg'],
            'Olimpiadas da Robótica': ['img/2021/olimpiadas1.jpg', 'img/2021/olimpiadas2.jpg'],
            'Roboparty': ['img/2021/roboparty1.jpg', 'img/2021/roboparty2.jpg'],
            'Atividades': ['img/2021/atividades1.jpg', 'img/2021/atividades2.jpg'],
            'Workshops': ['img/2021/workshops1.jpg', 'img/2021/workshops2.jpg']
        },
        2022: {
            'Botlompyics': ['img/2022/botlompyics1.jpg', 'img/2022/botlompyics2.jpg'],
            'Festival Nacional da Robótica': ['img/2022/festival1.jpg', 'img/2022/festival2.jpg'],
            'Olimpiadas da Robótica': ['img/2022/olimpiadas1.jpg', 'img/2022/olimpiadas2.jpg'],
            'Roboparty': ['img/2022/roboparty1.jpg', 'img/2022/roboparty2.jpg'],
            'Atividades': ['img/2022/atividades1.jpg', 'img/2022/atividades2.jpg'],
            'Workshops': ['img/2022/workshops1.jpg', 'img/2022/workshops2.jpg']
        },
        2023: {
            'Botlompyics': ['img/2023/botlompyics1.jpg', 'img/2023/botlompyics2.jpg'],
            'Festival Nacional da Robótica': ['img/2023/festival1.jpg', 'img/2023/festival2.jpg'],
            'Olimpiadas da Robótica': ['img/2023/olimpiadas1.jpg', 'img/2023/olimpiadas2.jpg'],
            'Roboparty': ['img/2023/roboparty1.jpg', 'img/2023/roboparty2.jpg'],
            'Atividades': ['img/2023/atividades1.jpg', 'img/2023/atividades2.jpg'],
            'Workshops': ['img/2023/workshops1.jpg', 'img/2023/workshops2.jpg']
        },
        2024: {
            'Botlompyics': ['img/TESTE1GA.png', 'img/TESTE2GA.png'],
            'Festival Nacional da Robótica': ['img/2024/festival1.jpg', 'img/2024/festival2.jpg'],
            'Olimpiadas da Robótica': ['img/2024/olimpiadas1.jpg', 'img/2024/olimpiadas2.jpg'],
            'Roboparty': ['img/2024/roboparty1.jpg', 'img/2024/roboparty2.jpg'],
            'Atividades': ['img/2024/atividades1.jpg', 'img/2024/atividades2.jpg'],
            'Workshops': ['img/2024/workshops1.jpg', 'img/2024/workshops2.jpg']
        }
    };

    // Função para carregar subtítulos e imagens
    function loadContent(year) {
        mainContent.innerHTML = '';
        const yearData = data[year];
        for (const subtitle in yearData) {
            const subtitleElement = document.createElement('div');
            subtitleElement.className = 'subtitle';

            const imageElement = document.createElement('img');
            imageElement.src = yearData[subtitle][0]; // Usar a primeira imagem como capa
            imageElement.alt = subtitle;
            imageElement.addEventListener('click', () => {
                openAlbumModal(year, subtitle);
            });

            const subtitleText = document.createElement('h5');
            subtitleText.textContent = subtitle;

            subtitleElement.appendChild(imageElement);
            subtitleElement.appendChild(subtitleText);
            mainContent.appendChild(subtitleElement);
        }

        // Atualizar botão ativo
        document.querySelectorAll('#yearButtons .btn').forEach(btn => {
            btn.classList.remove('active');
        });
        document.querySelector(`#yearButtons .btn[data-year="${year}"]`).classList.add('active');
    }

    // Função para abrir o modal do álbum
    function openAlbumModal(year, subtitle) {
        carouselInner.innerHTML = '';
        const albumImages = data[year][subtitle];
        albumImages.forEach((image, index) => {
            const carouselItem = document.createElement('div');
            carouselItem.className = 'carousel-item' + (index === 0 ? ' active' : '');

            const imgElement = document.createElement('img');
            imgElement.src = image;
            imgElement.className = 'd-block w-100';
            imgElement.alt = subtitle;

            carouselItem.appendChild(imgElement);
            carouselInner.appendChild(carouselItem);
        });

        const modal = new bootstrap.Modal(document.getElementById('albumModal'));
        document.getElementById('albumModalLabel').textContent = subtitle;
        modal.show();
    }

    // Injetar botões de ano
    years.forEach(year => {
        const button = document.createElement('button');
        button.className = 'btn btn-primary m-1';
        button.textContent = year;
        button.setAttribute('data-year', year);
        button.addEventListener('click', () => {
            loadContent(year);
        });
        yearButtons.appendChild(button);
    });

    // Carregar automaticamente o ano mais recente
    loadContent(recentYear);
});