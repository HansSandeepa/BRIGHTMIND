let year = new Date().getFullYear();
document.querySelectorAll(".year").forEach(function(element) {
    element.innerHTML = year;
});