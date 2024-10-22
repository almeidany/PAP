const albums = {
    2021: {
        roboparty: [
            'img/2021/roboparty/photo1.jpg',
            'img/2021/roboparty/photo2.jpg',
            'img/2021/roboparty/photo3.jpg'
        ],
        festival: [
            'img/2021/festival/photo1.jpg',
            'img/2021/festival/photo2.jpg',
            'img/2021/festival/photo3.jpg'
        ],
        botolympics: [
            'img/2021/botolympics/photo1.jpg',
            'img/2021/botolympics/photo2.jpg',
            'img/2021/botolympics/photo3.jpg'
        ],
        olimpiadas: [
            'img/2021/olimpiadas/photo1.jpg',
            'img/2021/olimpiadas/photo2.jpg',
            'img/2021/olimpiadas/photo3.jpg'
        ],
        workshops: [
            'img/2021/workshops/photo1.jpg',
            'img/2021/workshops/photo2.jpg',
            'img/2021/workshops/photo3.jpg'
        ]
    },
    2022: {
        roboparty: [
            'img/2022/roboparty/photo1.jpg',
            'img/2022/roboparty/photo2.jpg',
            'img/2022/roboparty/photo3.jpg'
        ],
        festival: [
            'img/2022/festival/photo1.jpg',
            'img/2022/festival/photo2.jpg',
            'img/2022/festival/photo3.jpg'
        ],
        botolympics: [
            'img/2022/botolympics/photo1.jpg',
            'img/2022/botolympics/photo2.jpg',
            'img/2022/botolympics/photo3.jpg'
        ],
        olimpiadas: [
            'img/2022/olimpiadas/photo1.jpg',
            'img/2022/olimpiadas/photo2.jpg',
            'img/2022/olimpiadas/photo3.jpg'
        ],
        workshops: [
            'img/2022/workshops/photo1.jpg',
            'img/2022/workshops/photo2.jpg',
            'img/2022/workshops/photo3.jpg'
        ]
    },
    2023: {
        roboparty: [
            'img/2023/roboparty/photo1.jpg',
            'img/2023/roboparty/photo2.jpg',
            'img/2023/roboparty/photo3.jpg'
        ],
        festival: [
            'img/2023/festival/photo1.jpg',
            'img/2023/festival/photo2.jpg',
            'img/2023/festival/photo3.jpg'
        ],
        botolympics: [
            'img/2023/botolympics/photo1.jpg',
            'img/2023/botolympics/photo2.jpg',
            'img/2023/botolympics/photo3.jpg'
        ],
        olimpiadas: [
            'img/2023/olimpiadas/photo1.jpg',
            'img/2023/olimpiadas/photo2.jpg',
            'img/2023/olimpiadas/photo3.jpg'
        ],
        workshops: [
            'img/2023/workshops/photo1.jpg',
            'img/2023/workshops/photo2.jpg',
            'img/2023/workshops/photo3.jpg'
        ]
    },
    2024: {
        roboparty: [
            'img/2024/roboparty/photo1.jpg',
            'img/2024/roboparty/photo2.jpg',
            'img/2024/roboparty/photo3.jpg'
        ],
        festival: [
            'img/2024/festival/photo1.jpg',
            'img/2024/festival/photo2.jpg',
            'img/2024/festival/photo3.jpg'
        ],
        botolympics: [
            'img/2024/botolympics/photo1.jpg',
            'img/2024/botolympics/photo2.jpg',
            'img/2024/botolympics/photo3.jpg'
        ],
        olimpiadas: [
            'img/2024/olimpiadas/photo1.jpg',
            'img/2024/olimpiadas/photo2.jpg',
            'img/2024/olimpiadas/photo3.jpg'
        ],
        workshops: [
            'img/2024/workshops/photo1.jpg',
            'img/2024/workshops/photo2.jpg',
            'img/2024/workshops/photo3.jpg'
        ]
    }
};

const currentYear = new Date().getFullYear();
const years = [2021, 2022, 2023, 2024];

function loadYearButtons() {
    const yearButtons = document.getElementById('yearButtons');
    yearButtons.innerHTML = '';

    years.forEach(year => {
        const yearButton = document.createElement('div');
        yearButton.className = 'col-md-3 mb-4';
        yearButton.innerHTML = `<button class="btn btn-outline-light w-100 h-100" onclick="loadAlbums(${year})">${year}</button>`;
        yearButtons.appendChild(yearButton);
    });

    // Pre-load the most recent year
    loadAlbums(currentYear);
}

function loadAlbums(year) {
    const albumButtons = document.getElementById('albumButtons');
    albumButtons.innerHTML = '';

    Object.keys(albums[year]).forEach(album => {
        const albumButton = document.createElement('div');
        albumButton.className = 'col-md-4 mb-4';
        albumButton.innerHTML = `
            <button class="btn btn-outline-light w-100 h-100" onclick="openAlbum('${year}', '${album}')">
                <img src="img/generic_album_cover.jpg" alt="${album}" class="img-fluid mb-2">
                ${album.replace(/_/g, ' ')}
            </button>`;
        albumButtons.appendChild(albumButton);
    });
}

function openAlbum(year, albumName) {
    const albumPhotos = document.getElementById('albumPhotos');
    albumPhotos.innerHTML = '';

    albums[year][albumName].forEach((photo, index) => {
        const photoDiv = document.createElement('div');
        photoDiv.className = `carousel-item ${index === 0 ? 'active' : ''}`;
        photoDiv.innerHTML = `<img src="${photo}" class="d-block w-100" alt="Photo">`;
        albumPhotos.appendChild(photoDiv);
    });

    const albumModal = new bootstrap.Modal(document.getElementById('albumModal'));
    albumModal.show();
}

// Load year buttons on page load
document.addEventListener('DOMContentLoaded', loadYearButtons);