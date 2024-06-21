document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');  // Поиск всех элементов с классом .faq-item

    faqItems.forEach(item => { // Для каждого элемента ищем его вопрос
        const question = item.querySelector('.faq-question');
        const toggleIcon = question.querySelector('.toggle-icon');

        question.addEventListener('click', () => {
            // Переключение класса 'open' у текущего .faq-item
            item.classList.toggle('open');

            // Ищем ответ
            const answer = item.querySelector('.faq-answer');

            // Установка максимальной высоты для создания анимации открытия
            if (item.classList.contains('open')) {
                answer.style.maxHeight = (answer.scrollHeight + 40) + 'px'; // Учитываем дополнительные отступы
                toggleIcon.src = "img/svg/-.svg"; 
            } else {
                answer.style.maxHeight = '0';
                toggleIcon.src = "img/svg/+.svg"; 
            }
        });
    });
});
