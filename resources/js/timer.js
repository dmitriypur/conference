document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('countdown');
    const deadlineStr = container.dataset.deadline;
    const deadline = new Date(deadlineStr);

    const monthsEl = document.getElementById('months');
    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');

    const pad = (num) => String(num).padStart(2, '0');

    function updateCountdown() {
        const now = new Date();
        let diff = deadline - now;

        if (diff <= 0) {
            // Время вышло — всё обнуляем
            monthsEl.textContent = daysEl.textContent = hoursEl.textContent = minutesEl.textContent = '00';
            clearInterval(timer);
            return;
        }

        // расчёт
        const totalMinutes = Math.floor(diff / 1000 / 60);
        const totalHours = Math.floor(totalMinutes / 60);
        const totalDays = Math.floor(totalHours / 24);

        const months = Math.floor(totalDays / 30); // приблизительно
        const days = totalDays % 30;
        const hours = totalHours % 24;
        const minutes = totalMinutes % 60;

        monthsEl.textContent = pad(months);
        daysEl.textContent = pad(days);
        hoursEl.textContent = pad(hours);
        minutesEl.textContent = pad(minutes);
    }

    updateCountdown();
    const timer = setInterval(updateCountdown, 60 * 1000); // обновляем каждую минуту
});
