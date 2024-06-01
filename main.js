document.addEventListener('DOMContentLoaded', (event) => {
    const menuIcon = document.getElementById('menuIcon');
    const sideMenu = document.getElementById('sideMenu');

    menuIcon.addEventListener('mouseover', () => {
        sideMenu.style.left = '0';
        menuIcon.style.opacity = '0'; // Define a opacidade do ícone como 0
    });

    sideMenu.addEventListener('mouseleave', () => {
        sideMenu.style.left = '-250px';
        menuIcon.style.opacity = '1'; // Define a opacidade do ícone como 1
    });
});
