document.addEventListener('DOMContentLoaded', function() {
  const list = document.getElementById('item-list'); 
  const addButton = document.querySelector('.add-btn');
  let itemCount = 3; 

  list.addEventListener('click', function(event) {
    if (event.target && event.target.tagName === 'LI') {
      event.target.textContent = 'Включено!';
      event.target.classList.add('clicked');
    }
  });

  addButton.addEventListener('click', function() {
    itemCount++;
    const newItem = document.createElement('li');
    newItem.className = 'list__item';
    newItem.textContent = `Пункт ${itemCount}`;
    list.appendChild(newItem);
  });
});