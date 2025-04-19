//set event listner for paid courses to link to the payment page
document.querySelectorAll('.paid_content').forEach(
    function (course) {
        course.addEventListener('click', function () {
            window.location.href = './paid_courses.html';
        });
    });

//set event listner for paid courses to link to the payment page
document.querySelectorAll('.free-content').forEach(
    function (course) {
        course.addEventListener('click', function () {
            window.location.href = '/free_courses.html';
        });
    }
);