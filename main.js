document.addEventListener('DOMContentLoaded', (event) => {
    const menuIcon = document.getElementById('menuIcon');
    const sideMenu = document.getElementById('sideMenu');

    menuIcon.addEventListener('mouseover', () => {
        sideMenu.style.left = '0';
    });

    sideMenu.addEventListener('mouseleave', () => {
        sideMenu.style.left = '-250px';
    });
});
