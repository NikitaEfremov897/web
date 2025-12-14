document.addEventListener('DOMContentLoaded', function() {
  const imageUrls = [
    'https://placehold.co/300x300.png?text=Image+1',
    'https://placehold.co/300x300.png?text=Image+2',
    'https://placehold.co/300x300.png?text=Image+3',
    'https://placehold.co/300x300.png?text=Image+4'
  ];

  let currentImageIndex = 0;

  const img = document.querySelector('.image-switcher');
  const button = document.querySelector('.switch-btn');

  button.addEventListener('click', function() {
    currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
    img.src = imageUrls[currentImageIndex];
  });
});