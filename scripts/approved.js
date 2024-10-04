document.addEventListener('DOMContentLoaded', function () { 
    const courseLevels = document.querySelectorAll('.course-level');

    courseLevels.forEach(function (levelElement) {
        const levelText = levelElement.textContent.trim();


        if (levelText === 'Beginner') {
            levelElement.style.backgroundColor = 'yellow';
        } else if (levelText === 'Intermediate') {
            levelElement.style.backgroundColor = 'red'
        } else if (levelText === 'Advanced') {
            levelElement.style.backgroundColor = 'purple';;
        }
    });
});