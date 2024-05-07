document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.querySelector('.burger-menu');
    const navUl = document.querySelector('nav ul');

    burgerMenu.addEventListener('click', function() {
        navUl.style.display = (navUl.style.display === 'flex') ? 'none' : 'flex';
    });
});
