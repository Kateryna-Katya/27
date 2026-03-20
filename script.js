/**
 * Project: <?= $domainTitle ?>
 * Version: 1.0.0 (Pure Vanilla JS)
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // 2. Хедер: эффект при скролле
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // 3. Мобильное меню (Бургер)
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 4. Hero: Эффект печатной машинки
    const initHeroTypewriter = () => {
        const text = `const school = "<?= $domainTitle ?>";\n\nfunction startCareer() {\n  return "Success";\n}\n\n// Инициализация будущего...`;
        const container = document.getElementById('typewriter');
        if (!container) return;
        
        let i = 0;
        function type() {
            if (i < text.length) {
                container.innerHTML += text.charAt(i) === '\n' ? '<br>' : text.charAt(i);
                i++;
                setTimeout(type, 40);
            }
        }
        setTimeout(type, 1200);
    };

    // 5. Hero: Параллакс карточки кода
    document.addEventListener('mousemove', (e) => {
        const card = document.querySelector('.code-card');
        if (card && window.innerWidth > 992) {
            const x = (e.clientX / window.innerWidth - 0.5) * 20;
            const y = (e.clientY / window.innerHeight - 0.5) * 20;
            card.style.transform = `perspective(1000px) rotateY(${x - 15}deg) rotateX(${-y + 5}deg)`;
        }
    });

    // 6. Courses: Свечение карточек за курсором
    const cards = document.querySelectorAll('.course-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
            card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
        });
    });

    // 7. Methodology: Прогресс-бар при скролле
    const initTimeline = () => {
        const timeline = document.getElementById('timeline');
        const progressBar = document.getElementById('progress-bar');
        const items = document.querySelectorAll('.timeline__item');
        if (!timeline) return;

        const updateTimeline = () => {
            const rect = timeline.getBoundingClientRect();
            const winH = window.innerHeight;
            const progress = Math.min(Math.max((winH - rect.top) / (rect.height + winH / 1.5), 0), 1);
            
            if (progressBar) progressBar.style.width = `${progress * 100}%`;
            
            items.forEach((item, idx) => {
                if (progress >= (idx + 0.5) / items.length) item.classList.add('active');
            });
        };
        window.addEventListener('scroll', updateTimeline);
        updateTimeline();
    };

    // 8. FAQ: Аккордеон
    const faqItems = document.querySelectorAll('.faq__item');
    faqItems.forEach(item => {
        item.querySelector('.faq__trigger').addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(el => el.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });

    // 9. Контакты: Валидация и Математическая капча
    const initForm = () => {
        const form = document.getElementById('contact-form');
        if (!form) return;

        const phone = document.getElementById('phone');
        const captchaLabel = document.getElementById('captcha-question');
        const n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 10);
        const correct = n1 + n2;
        
        if (captchaLabel) captchaLabel.innerText = `${n1} + ${n2} =`;

        phone.addEventListener('input', (e) => e.target.value = e.target.value.replace(/[^\d]/g, ''));

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAns = parseInt(document.getElementById('captcha-answer').value);
            
            if (userAns !== correct) {
                alert('Ошибка в капче!');
                return;
            }

            const btn = form.querySelector('button');
            btn.disabled = true;
            btn.innerText = 'Отправка...';

            setTimeout(() => {
                form.innerHTML = `<div class="form__message success">Ваша заявка принята! Мы перезвоним вам на номер ${phone.value} в ближайшее время.</div>`;
            }, 1500);
        });
    };

    // 10. Cookies: Всплывающее окно
    const initCookies = () => {
        const popup = document.getElementById('cookie-popup');
        if (popup && !localStorage.getItem('cookies_accepted')) {
            setTimeout(() => popup.classList.add('active'), 2000);
            document.getElementById('cookie-accept').addEventListener('click', () => {
                localStorage.setItem('cookies_accepted', 'true');
                popup.classList.remove('active');
            });
        }
    };

    // Запуск всех модулей
    initHeroTypewriter();
    initTimeline();
    initForm();
    initCookies();
});