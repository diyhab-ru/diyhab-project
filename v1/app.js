document.addEventListener('DOMContentLoaded', () => {
    const orbitItems = document.querySelectorAll('.orbit-item');
    const radius = 320; // Половина ширины/высоты .hero-orbit
    const totalItems = orbitItems.length;

    orbitItems.forEach((item, index) => {
        const angle = (index / totalItems) * 2 * Math.PI;
        const x = Math.cos(angle) * radius;
        const y = Math.sin(angle) * radius;

        item.style.transform = `translate(${x}px, ${y}px)`;
    });

    // Генерация звезд
    const starsContainer = document.getElementById('stars');
    const starCount = 150;

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';
        
        const size = Math.random() * 2 + 1;
        const x = Math.random() * 100;
        const y = Math.random() * 100;
        const duration = Math.random() * 3 + 2;
        const delay = Math.random() * 5;

        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        star.style.left = `${x}%`;
        star.style.top = `${y}%`;
        star.style.setProperty('--duration', `${duration}s`);
        star.style.animationDelay = `${delay}s`;

        starsContainer.appendChild(star);
    }

    // Падающие звезды
    const createShootingStar = () => {
        const star = document.createElement('div');
        star.className = 'shooting-star';
        
        const x = Math.random() * window.innerWidth;
        const y = Math.random() * (window.innerHeight / 2);
        const angle = Math.random() * 45 + 135; // Направление вниз-вправо
        const duration = Math.random() * 1 + 0.5;

        star.style.left = `${x}px`;
        star.style.top = `${y}px`;
        star.style.setProperty('--angle', `${angle}deg`);
        star.style.animation = `shoot ${duration}s linear forwards`;

        document.querySelector('.hero').appendChild(star);

        setTimeout(() => {
            star.remove();
        }, duration * 1000);
    };

    // Запуск падающих звезд каждые 3-7 секунд
    const scheduleShootingStar = () => {
        const delay = Math.random() * 4000 + 3000;
        setTimeout(() => {
            createShootingStar();
            scheduleShootingStar();
        }, delay);
    };

    scheduleShootingStar();
});
