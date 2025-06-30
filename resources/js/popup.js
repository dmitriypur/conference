document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modal-content');
    const modalClose = document.getElementById('modal-close');

    document.querySelectorAll('.open-modal-btn').forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.dataset.modalTarget;
            const template = document.getElementById(targetId);

            if (template) {
                modalContent.innerHTML = ''; // Очищаем перед вставкой
                modalContent.appendChild(template.content.cloneNode(true));
                modal.classList.remove('hidden');
            }
        });
    });

    // Закрытие по кнопке
    modalClose.addEventListener('click', () => {
        modal.classList.add('hidden');
        modalContent.innerHTML = '';
    });

    // Закрытие по клику вне окна
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            modalContent.innerHTML = '';
        }
    });
});
