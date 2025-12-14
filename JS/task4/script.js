document.addEventListener('DOMContentLoaded', function() {
  let count = 0;

  const counterValueEl = document.querySelector('.counter-value');
  const button = document.querySelector('.counter-button');

  button.addEventListener('click', function() {
    count += 1;
    counterValueEl.textContent = count;
  });
});