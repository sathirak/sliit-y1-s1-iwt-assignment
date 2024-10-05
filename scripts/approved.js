document.addEventListener('DOMContentLoaded', function () { 
    const courseLevels = document.querySelectorAll('.course-level');

    courseLevels.forEach(function (levelElement) {
        const levelText = levelElement.textContent.trim();


        if (levelText === 'Beginner') {
            levelElement.style.backgroundColor = '#ffff50';
        } else if (levelText === 'Intermediate') {
            levelElement.style.backgroundColor = '#ff5353';
        } else if (levelText === 'Advanced') {
            levelElement.style.backgroundColor = '#9575CD';;
        }
    });
});