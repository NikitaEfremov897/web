document.addEventListener('DOMContentLoaded', function() {
  const textElement = document.querySelector('.color-text');
  const selectElement = document.querySelector('.color-select');

  selectElement.addEventListener('change', function() {
    const selectedColor = selectElement.value;
    if (selectedColor) {
      textElement.style.color = selectedColor;
    } else {
      textElement.style.color = ''; 
    }
  });
});