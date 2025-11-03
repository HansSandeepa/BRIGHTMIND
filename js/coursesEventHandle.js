//set event listner for paid courses to link to the payment page
document.querySelectorAll('.paid-content').forEach(function (course) {
    const id = course.dataset.courseId;
    if (!id) return;
    course.style.cursor = 'pointer';
    course.addEventListener('click', function () {
        window.location.href = './paid_courses.php?id=' + encodeURIComponent(id);
    });
});

//set event listner for free courses to link to the free courses page
document.querySelectorAll('.free-content').forEach(function (course) {
    const id = course.dataset.courseId;
    if (!id) return;
    course.style.cursor = 'pointer';
    course.addEventListener('click', function () {
        window.location.href = './free_courses.php?id=' + encodeURIComponent(id);
    });
});