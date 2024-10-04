document.addEventListener('DOMContentLoaded', function () {
    const courseCards = document.querySelectorAll('.course-card');

    courseCards.forEach(function (card) {
        const level = card.querySelector('.card-text strong:contains("Level")').nextSibling.textContent.trim();

        if (level === 'Beginner') {
            card.style.backgroundColor = 'yellow';
        } else if (level === 'Intermediate') {
            card.style.backgroundColor = 'red';
        } else if (level === 'Advanced') {
            card.style.backgroundColor = 'purple';
        }
    });
});