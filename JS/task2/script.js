document.addEventListener('DOMContentLoaded', function() {
  const box = document.querySelector('.box');
  const button = document.querySelector('.toggle-btn');

  button.addEventListener('click', function() {
    box.classList.toggle('highlight');
  });
});