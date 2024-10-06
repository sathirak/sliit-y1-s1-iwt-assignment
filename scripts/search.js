function searchCourses() {
  const searchInput = document.getElementById('search-input').value;
  const userList = document.getElementById('search-list');
  const spinner = document.getElementById('loading-spinner');

  spinner.style.display = 'block';

  fetch(`?search=${encodeURIComponent(searchInput)}`)
    .then((response) => response.text())
    .then((html) => {
      userList.innerHTML = new DOMParser()
        .parseFromString(html, 'text/html')
        .querySelector('#search-list').innerHTML;
      spinner.style.display = 'none';
    })
    .catch((error) => {
      console.error('Error fetching search results:', error);
      spinner.style.display = 'none';
    });
}

document
  .getElementById('search-input')
  .addEventListener('input', searchCourses());
