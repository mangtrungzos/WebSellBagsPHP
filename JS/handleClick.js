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

function toggleSubMenu() {
    const subMenu = document.querySelector('.category-menu');
    const icon = document.querySelector('.category__icon');

    subMenu.classList.toggle('show');

    // Rotate the icon based on the presence of the 'show' class
    if (subMenu.classList.contains('show')) {
        icon.style.transform = 'rotate(180deg)';
    } else {
        icon.style.transform = 'rotate(0deg)';
    }
}

function toggleSubMenuDesign() {
    const subMenuDes = document.querySelector('.category-menu__design');
    const icons = document.querySelector('.category__icons');

    subMenuDes.classList.toggle('show');

    // Rotate the icon based on the presence of the 'show' class
    if (subMenuDes.classList.contains('show')) {
        icons.style.transform = 'rotate(180deg)';
    } else {
        icons.style.transform = 'rotate(0deg)';
    }
}
function toggleSubMenuColor() {
    const subMenuDes = document.querySelector('.category-menu__color');
    const icons = document.querySelector('.category__icon-color');

    subMenuDes.classList.toggle('show');

    // Rotate the icon based on the presence of the 'show' class
    if (subMenuDes.classList.contains('show')) {
        icons.style.transform = 'rotate(180deg)';
    } else {
        icons.style.transform = 'rotate(0deg)';
    }
}

function toggleRecomended() {
    const recomend = document.querySelector('.combine--openedShow');
    const icons = document.querySelector('.productlisting__icons');

    recomend.classList.toggle('show');

    // Rotate the icon based on the presence of the 'show' class
    if (recomend.classList.contains('show')) {
        icons.style.transform = 'rotate(180deg)';
    } else {
        icons.style.transform = 'rotate(0deg)';
    }
}