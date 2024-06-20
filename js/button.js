document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form form');
    const button = form.querySelector('button');
    const requiredFields = form.querySelectorAll('input[required], textarea[required]');
    const resultMessage = document.querySelector('.result-message');
    const resultImage = document.getElementById('result-image');
    const reloadButton = document.querySelector('.reload-button');

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

    requiredFields.forEach(field => {
        field.addEventListener('input', checkFormValidity);
    });

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        button.classList.add('loading');

        const formData = new FormData(form);

        fetch('forma.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            button.classList.remove('loading');

            if (data.status === 'success') {
                showResult('img/svg/success.svg');
            } else {
                showResult('img/svg/error.svg');
            }
        })
        .catch(error => {
            button.classList.remove('loading');
            showResult('img/svg/error.svg');
        });
    });

    reloadButton.addEventListener('click', function() {
        window.location.reload();
    });

    checkFormValidity();  // Initial check
});
