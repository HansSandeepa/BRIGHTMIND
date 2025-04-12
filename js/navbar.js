const sidebar = document.querySelector('.sidebar'),
    overlay = document.getElementById('overlay'),
    closeBtn = document.getElementById('closeBtn'),
    openBtn = document.getElementById('navbarBtn');

openBtn.addEventListener('click', function () {
    sidebar.classList.add('active');
    overlay.classList.add('active');
});

closeBtn.addEventListener('click', function () {
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
});

overlay.addEventListener('click', function(){
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
});