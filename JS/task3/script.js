document.addEventListener('DOMContentLoaded', function() {
  const list = document.getElementById('item-list');
  const input = document.getElementById('item-input');
  const button = document.getElementById('add-btn');

  button.addEventListener('click', function() {
    const text = input.value.trim();
    if (text === '') return; 
    const li = document.createElement('li');
    li.textContent = text;
    list.appendChild(li);
    input.value = '';
    input.focus();    
  });

  input.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      button.click();
    }
  });
});