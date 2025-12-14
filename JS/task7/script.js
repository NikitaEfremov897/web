document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.form');
  const textInput = document.querySelector('#text');
  const emailInput = document.querySelector('#email');
  const messageEl = document.querySelector('.message');

  function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
  }

  form.addEventListener('submit', function(event) {
    event.preventDefault();

    messageEl.textContent = '';
    messageEl.className = 'message';
    messageEl.setAttribute('role', 'status');
    messageEl.setAttribute('aria-live', 'polite');

    const text = textInput.value.trim();
    const email = emailInput.value.trim();

    let errorMessage = '';

    if (!text) {
      errorMessage = 'Поле "Текст" обязательно для заполнения.';
    } else if (!email) {
      errorMessage = 'Поле "Email" обязательно для заполнения.';
    } else if (!isValidEmail(email)) {
      errorMessage = 'Пожалуйста, введите корректный email.';
    }

    if (errorMessage) {
      messageEl.textContent = errorMessage;
      messageEl.classList.add('message--error');
      return;
    }

    messageEl.textContent = 'Форма успешно отправлена (в консоль)!';
    messageEl.classList.add('message--success');

    const formData = new FormData(form);
    console.log('Данные формы:');
    for (const [key, value] of formData.entries()) {
      console.log(key, ':', value);
    }
  });
});