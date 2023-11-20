function overlayOff() {
    const overlay = document.getElementById('overlayOn')
    overlay.style.display = 'none'
}

const searchCLick = document.getElementById('searchIcon');
searchCLick.addEventListener('click', () => {
    const searchbar = document.querySelector('.searchOverlay');
    const searchoverlay = document.getElementById('overlayOn');

    searchbar.style.display = 'block';
    searchoverlay.style.display = 'block'
    
});