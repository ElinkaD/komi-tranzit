document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const toggleIcon = question.querySelector('.toggle-icon');

        question.addEventListener('click', () => {
            // Toggle the 'open' class
            item.classList.toggle('open');

            // Get the answer element
            const answer = item.querySelector('.faq-answer');

            // Set the maxHeight to a large value to create extra space
            if (item.classList.contains('open')) {
                answer.style.maxHeight = (answer.scrollHeight + 40) + 'px'; // Учитываем дополнительные отступы
                toggleIcon.src = "img/svg/-.svg"; // Path to the minus icon
            } else {
                answer.style.maxHeight = '0';
                toggleIcon.src = "img/svg/+.svg"; // Path to the plus icon
            }
        });
    });
});
