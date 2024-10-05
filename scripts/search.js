function debounce(func, delay) {
  let timeout;
  return function () {
    const context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(() => func.apply(context, args), delay);
  };
}

function searchCourses() {
  const searchInput = document.getElementById('search-input').value;
  const userList = document.getElementById('user-list');
  const spinner = document.getElementById('loading-spinner');

  spinner.style.display = 'block';

  fetch(`?search=${encodeURIComponent(searchInput)}`)
    .then((response) => response.text())
    .then((html) => {
      userList.innerHTML = new DOMParser()
        .parseFromString(html, 'text/html')
        .querySelector('#user-list').innerHTML;
      spinner.style.display = 'none';
    })
    .catch((error) => {
      console.error('Error fetching search results:', error);
      spinner.style.display = 'none';
    });
}

document
  .getElementById('search-input')
  .addEventListener('input', debounce(searchCourses, 300));

document.addEventListener('click', function (e) {
  if (e.target && e.target.classList.contains('delete')) {
    const confirmDelete = confirm(
      'Are you sure you want to delete this course?',
    );
    if (!confirmDelete) {
      e.preventDefault();
    }
  }
});
