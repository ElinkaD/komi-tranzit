document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form form');
    const button = form.querySelector('button');
    const requiredFields = form.querySelectorAll('input[required], textarea[required]');
    const resultMessage = document.querySelector('.result-message');
    const resultImage = document.getElementById('result-image');
    const reloadButton = document.querySelector('.reload-button');

    // Функция проверки валидности всех обязательных полей формы
    function checkFormValidity() {
        let allValid = true;
        requiredFields.forEach(field => {
            if (!field.validity.valid || !field.value.trim()) {
                allValid = false;
            }
        });

        if (allValid) {
            button.disabled = false;
            button.classList.add('active');
        } else {
            button.disabled = true;
            button.classList.remove('active');
        }
    }

    function showResult(imageUrl) {
        form.style.display = 'none';
        resultMessage.style.display = 'flex';
        resultImage.src = imageUrl;
        resultImage.style.display = 'block';
        reloadButton.style.display = 'block';
    }
    
    // Добавление обработчиков событий для обязательных полей, чтобы проверять валидность при изменении данных
    requiredFields.forEach(field => {
        field.addEventListener('input', checkFormValidity);
    });

    // Обработчик отправки формы
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Предотвращение перезагрузки страницы после отправки формы 

        button.classList.add('loading');

        const formData = new FormData(form); // Создание объекта FormData для отправки данных формы

        // Отправка данных формы на сервер
        fetch('forma.php', {
            method: 'POST',
            body: formData
        })
        showResult('img/svg/success.svg');;
    });


    reloadButton.addEventListener('click', function() {
        console.log('Клик по кнопке сработал');
        const targetUrl = 'index.php?page=contacts_page';
        window.location.href = targetUrl;
    });

    checkFormValidity(); 
});
