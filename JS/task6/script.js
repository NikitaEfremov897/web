document.addEventListener('DOMContentLoaded', function() {
  const list = document.querySelector('.item-list');
  const button = document.querySelector('.remove-btn');

  button.addEventListener('click', function() {
    const lastItem = list.lastElementChild;
    if (lastItem) {
      list.removeChild(lastItem);
    }
  });
});