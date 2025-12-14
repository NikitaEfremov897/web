document.addEventListener('DOMContentLoaded', function() {
  const title = document.querySelector('.page-title');
  const button = document.querySelector('.page-button');

  button.addEventListener('click', function() {
    title.textContent = 'Заголовок изменен!';
  });
});