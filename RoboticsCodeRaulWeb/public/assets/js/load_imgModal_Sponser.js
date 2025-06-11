document.addEventListener('DOMContentLoaded', function () {
    const imageElements = document.querySelectorAll('.sponsers-image');
    const modalImage = document.getElementById('modalSponsersImage');

    imageElements.forEach(img => {
        img.addEventListener('click', () => {
            const imageUrl = img.getAttribute('data-image');
            modalImage.src = imageUrl;
        });
    });
});