<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Инновационное IT-обучение</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%234F46E5%22/><path d=%22M30 30L50 50L30 70M70 50H55%22 stroke=%22white%22 stroke-width=%228%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22 fill=%22none%22/></svg>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <div class="logo__icon"></div>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#method" class="nav__link">Методология</a></li>
                    <li><a href="./#about" class="nav__link">О школе</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>
            
            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline btn--desktop">Связаться</a>
                <button class="burger" id="burger" aria-label="Открыть меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    
        <div class="mobile-menu" id="mobile-menu">
            <nav class="mobile-nav">
                <a href="./#hero" class="mobile-nav__link">Главная</a>
                <a href="./#courses" class="mobile-nav__link">Курсы</a>
                <a href="./#method" class="mobile-nav__link">Методология</a>
                <a href="./#about" class="mobile-nav__link">О школе</a>
                <a href="./#faq" class="mobile-nav__link">FAQ</a>
                <a href="./#contact" class="btn btn--primary">Начать сейчас</a>
            </nav>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="hero__badge">Privacy & Security</span>
            <h1 class="section-title">Обработка <span class="text-gradient">персональных данных</span></h1>

            <div class="legal-content">
                <div class="policy-intro policy-section">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных определяет порядок и условия, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), для обеспечения безопасности ваших данных.
                    </p>
                    <p>
                        1.1. Мы считаем защиту прав на неприкосновенность частной жизни и личную тайну приоритетом нашей деятельности в Европе и Великобритании.
                    </p>
                </div>

                <div class="policy-section">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Веб-сайт</strong>
                            Инфраструктура <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li>
                            <strong>Пользователь</strong>
                            Любой посетитель платформы.
                        </li>
                        <li>
                            <strong>Данные</strong>
                            Любая информация о Пользователе.
                        </li>
                        <li>
                            <strong>Обработка</strong>
                            Сбор, хранение и защита данных.
                        </li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <i data-lucide="shield-check"></i>
                            <div>
                                <strong>Личные данные</strong>
                                <span>ФИО, Email, номер телефона.</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <i data-lucide="database"></i>
                            <div>
                                <strong>Технические данные</strong>
                                <span>Cookies, IP, данные браузера.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Обеспечение доступа к AI-платформе обучения.</li>
                        <li>Установление обратной связи и экспертной поддержки.</li>
                        <li>Исполнение методологий обучения на базе инноваций.</li>
                        <li>Анализ интересов пользователей в странах ЕС.</li>
                    </ul>
                </div>

                <div class="policy-section contact-footer-policy">
                    <h2>5. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы касательно конфиденциальности:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Технологии нового поколения для тех, кто строит карьеру будущего. Переосмыслите подход к развитию вместе с нами.
                </p>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#courses">Направления</a></li>
                    <li><a href="./#method">Обучение</a></li>
                    <li><a href="./#contact">Контакты</a></li>
                </ul>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone" class="icon-sm"></i>
                        <a href="tel:+442077271897">+44 20 7727 1897</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="icon-sm"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="icon-sm"></i>
                        <span>18 Notting Hill Gate, London, UK</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $fullDomain ?>. Все права защищены. Предложение активно только в странах ЕС.</p>
        </div>
    </footer>
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>