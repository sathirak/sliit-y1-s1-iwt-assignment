let lessonCount = 0;

function addLesson() {
  lessonCount++;
  const lessonHtml = `
        <div class="lesson" id="lesson-${lessonCount}">
            <h3>Lesson ${lessonCount}</h3>
            <button type="button" class="removeLesson" onclick="removeLesson(${lessonCount})">Remove</button>
            
            <label for="lesson_title_${lessonCount}">Lesson Title:</label><br> 
            <input type="text" id="lesson_title_${lessonCount}" name="lessons[${lessonCount}][title]" required><br>
           
            <label for="lesson_description_${lessonCount}">Lesson Description:</label><br>
            <textarea id="lesson_description_${lessonCount}" name="lessons[${lessonCount}][description]" rows="3" required></textarea><br>
     
            <label for="lesson_video_url_${lessonCount}">Video URL:</label><br>
            <input type="url" id="lesson_video_url_${lessonCount}" name="lessons[${lessonCount}][video_url]" required><br>
        </div>
    `;
  document
    .getElementById('lessonsContainer')
    .insertAdjacentHTML('beforeend', lessonHtml);
}

function removeLesson(id) {
  const lesson = document.getElementById(`lesson-${id}`);
  if (lesson) {
    lesson.remove();
  }
  updateLessonNumbers();
}

function updateLessonNumbers() {
  const lessons = document.querySelectorAll('.lesson');
  lessons.forEach((lesson, index) => {
    const newIndex = index + 1;
    lesson.id = `lesson-${newIndex}`;
    lesson.querySelector('h3').textContent = `Lesson ${newIndex}`;
    lesson
      .querySelector('.removeLesson')
      .setAttribute('onclick', `removeLesson(${newIndex})`);

    const inputs = lesson.querySelectorAll('input, textarea');
    inputs.forEach((input) => {
      const nameAttr = input.getAttribute('name');
      if (nameAttr) {
        input.setAttribute(
          'name',
          nameAttr.replace(/\[\d+\]/, `[${newIndex}]`),
        );
      }
      const idAttr = input.getAttribute('id');
      if (idAttr) {
        input.setAttribute('id', idAttr.replace(/_\d+$/, `_${newIndex}`));
      }
    });
  });
}

document.getElementById('addLessonBtn').addEventListener('click', addLesson);

addLesson();
