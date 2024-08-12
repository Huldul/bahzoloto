<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?_v=20240809190043"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css?_v=20240809190043"/>
    <link rel="stylesheet" href="css/style.css?_v=20240809190043">
    <title>{{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keywords" content="{{setting('site.keywords')}}">
</head>

    <body>
        <header class="header">
    <div class="container">
        <div class="header__container">
            <div class="logo">
                <a href="">
                    <img src="img/logo-header.svg" alt="">
                </a>
            </div>
            <div class="header__additional">
                <div class="header__whatsapp">
                    <a href="{{setting('site.wa')}}">
                        @if($locale == 'kz')
                        WhatsApp-қа жазыңыз
                        @else
                        Написать в WhatsApp
                        @endif
                    </a>
                </div>
                <div class="header__lang">
                    <div class="header__lang-item">
                        <a href="/">RU</a>
                    </div>
                    <div class="header__lang-item">
                        <a href="/kz">KZ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <main>
            <section class="feedback-section">
                <div class="container">
                    <div class="feedback-section__container">
                        @if($locale == 'kz')
                        <form action="/submit" method="POST" class="feedback-form">
                            @csrf
                            <div class="feedback-form__container">
                                <div class="feedback-form__title-wrapper">
                                    <h1 class="feedback-form__title">Форманы толтырыңыз</h1>
                                    <p class="feedback-form__subtitle">Алушының деректері</p>
                                </div>

                                <div class="feedback-form__inputs-col">
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            ЖСН <span>*</span>
                                        </div>
                                        <input type="text" placeholder="ЖСН" name="iin" required class="feedback-form__input js-iin">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Т.А.Ә. / Ұйым <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Т.А.Ә. / Ұйым" name="name" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Ұялы телефон <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Ұялы телефон" name="number" required class="feedback-form__input js-phone">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            WhatsApp нөмірі <span>*</span>
                                        </div>
                                        <input type="text" placeholder="WhatsApp нөмірі" name="wa" required class="feedback-form__input js-phone">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Аймақ <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Аймақ" name="region" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Қала <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Қала" name="city" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Мекенжай <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Мекенжай" name="adress" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__button-wrapper">
                                        <button type="submit" class="feedback-form__button">Жіберу</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <form action="/submit" method="POST" class="feedback-form">
                            @csrf
                            <div class="feedback-form__container">
                                <div class="feedback-form__title-wrapper">
                                    <h1 class="feedback-form__title">Заполните форму</h1>
                                    <p class="feedback-form__subtitle">Данные получателя</p>
                                </div>

                                <div class="feedback-form__inputs-col">
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            ИИН <span>*</span>
                                        </div>
                                        <input type="text" placeholder="ИИН" name="iin" required class="feedback-form__input js-iin">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            ФИО / Организация <span>*</span>
                                        </div>
                                        <input type="text" placeholder="ФИО / Организация" name="name" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Мобильный телефон <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Мобильный телефон" name="number" required class="feedback-form__input js-phone">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Номер WhatsApp <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Номер WhatsApp" name="wa" required class="feedback-form__input js-phone">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Область <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Область" name="region" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Город <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Город" name="city" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__input-wrapper required">
                                        <div class="feedback-form__pseudo-placeholder">
                                            Адрес <span>*</span>
                                        </div>
                                        <input type="text" placeholder="Адрес" name="adress" required class="feedback-form__input">
                                    </div>
                                    <div class="feedback-form__button-wrapper">
                                        <button type="submit" class="feedback-form__button">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
    <div class="footer__top-container">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <div class="logo">
                        <a href="">
                            <img src="img/logo-footer.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="footer__contacts">
                    <div class="footer__contacts-col">
                        <div class="footer__title">@if($locale == 'kz')
                            Байланыс
                            @else
                            Контакты
                            @endif</div>
                        <div class="footer__contacts-tel">
                            <a href="tel:{{setting('site.number')}}" class="footer__contacts-item">{{setting('site.number')}}</a>
                            <a href="tel:{{setting('site.number2')}}" class="footer__contacts-item">{{setting('site.number2')}}</a>
                        </div>

                        <a href="#" class="footer__contacts-item">
                            @if($locale == 'kz')
                                Құпиялылық саясаты
                            @else
                                Политика <br> конфиденциальности
                            @endif
                        </a>

                    </div>
                    <div class="footer__contacts-col">
                        <div class="footer__title">@if($locale == 'kz')
                            Байланыс
                            @else
                            Контакты
                            @endif</div>
                       <div class="footer__contacts-item">{!!setting('site.adress')!!}</div>
                    </div>
                </div>
                <div class="footer__media">
                    <div class="footer__title">
                        @if($locale == 'kz')
                            Әлеуметтік желілер
                        @else
                            Социальные сети
                        @endif
                    </div>

                    <div class="footer__media-wrapper">
                        <div class="footer__link">
                            <a href="{{setting('site.facebook')}}">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="#242424" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="17" stroke="#BF995A" stroke-width="0.708333"/>
                                    <path d="M21.7832 10.2115L19.784 10.2083C17.5381 10.2083 16.0867 11.7 16.0867 14.0087V15.761H14.0767C13.903 15.761 13.7624 15.902 13.7624 16.076V18.6148C13.7624 18.7888 13.9032 18.9297 14.0767 18.9297H16.0867V25.3359C16.0867 25.5099 16.2274 25.6508 16.401 25.6508H19.0235C19.1972 25.6508 19.3379 25.5097 19.3379 25.3359V18.9297H21.688C21.8617 18.9297 22.0024 18.7888 22.0024 18.6148L22.0034 16.076C22.0034 15.9925 21.9702 15.9125 21.9113 15.8533C21.8524 15.7942 21.7722 15.761 21.6889 15.761H19.3379V14.2756C19.3379 13.5616 19.5077 13.1992 20.4361 13.1992L21.7828 13.1987C21.9564 13.1987 22.097 13.0577 22.097 12.8838V10.5264C22.097 10.3527 21.9565 10.2118 21.7832 10.2115Z" fill="#BF995A"/>
                                </svg>
                            </a>
                        </div>
                        <div class="footer__link">
                            <a href="{{setting('site.wa_link')}}">
                                <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" fill="#242424" id="svg_1" r="17" stroke="#BF995A"/>
                                    <path d="m9.19,26.24l1.65,-3.8c-2.61,-3.71 -2.06,-8.78 1.29,-11.83c3.36,-3.06 8.46,-3.14 11.91,-0.2c3.45,2.94 4.17,7.99 1.68,11.78c-2.49,3.8 -7.41,5.14 -11.48,3.15l-5.05,0.9" fill="none" id="svg_2" stroke="#BF995A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="matrix(1, 0, 0, 1, 0, 0)"/>
                                    <path d="m15.67,15c0,0.28 0.22,0.5 0.5,0.5c0.28,0 0.5,-0.22 0.5,-0.5l0,-1c0,-0.28 -0.22,-0.5 -0.5,-0.5c-0.28,0 -0.5,0.22 -0.5,0.5l0,1c0,2.76 2.24,5 5,5l1,0c0.28,0 0.5,-0.22 0.5,-0.5c0,-0.28 -0.22,-0.5 -0.5,-0.5l-1,0c-0.28,0 -0.5,0.22 -0.5,0.5c0,0.28 0.22,0.5 0.5,0.5" fill="none" id="svg_3" stroke="#BF995A" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="matrix(1, 0, 0, 1, 0, 0)"/>
                                </svg>
                            </a>
                        </div>
                        <div class="footer__link">
                            <a href="{{setting('site.telegram')}}">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="#242424" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="17" stroke="#BF995A" stroke-width="0.708333"/>
                                    <path d="M20 17L16 21L22 27L26 11L8 18L12 20L14 26L17 22" stroke="#BF995A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                        <div class="footer__link">
                            <a href="{{setting('site.instagram')}}">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="#242424" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="17" stroke="#BF995A" stroke-width="0.708333"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8125 9.5H21.1875C24.1211 9.5 26.5 11.8789 26.5 14.8125V21.1875C26.5 24.1211 24.1211 26.5 21.1875 26.5H14.8125C11.8789 26.5 9.5 24.1211 9.5 21.1875V14.8125C9.5 11.8789 11.8789 9.5 14.8125 9.5ZM21.1875 24.9062C23.2381 24.9062 24.9062 23.2381 24.9062 21.1875V14.8125C24.9062 12.7619 23.2381 11.0938 21.1875 11.0938H14.8125C12.7619 11.0938 11.0938 12.7619 11.0938 14.8125V21.1875C11.0938 23.2381 12.7619 24.9062 14.8125 24.9062H21.1875ZM13.75 18C13.75 15.6529 15.6529 13.75 18 13.75C20.3471 13.75 22.25 15.6529 22.25 18C22.25 20.3471 20.3471 22.25 18 22.25C15.6529 22.25 13.75 20.3471 13.75 18ZM15.3438 18C15.3438 19.4641 16.5359 20.6562 18 20.6562C19.4641 20.6562 20.6562 19.4641 20.6562 18C20.6562 16.5348 19.4641 15.3438 18 15.3438C16.5359 15.3438 15.3438 16.5348 15.3438 18ZM22.6042 14.4583C23.191 14.4583 23.6667 13.9826 23.6667 13.3958C23.6667 12.809 23.191 12.3333 22.6042 12.3333C22.0174 12.3333 21.5417 12.809 21.5417 13.3958C21.5417 13.9826 22.0174 14.4583 22.6042 14.4583Z" fill="#BF995A"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom-container">
        <div class="container">
            <div class="footer__bottom">
                <div class="footer__copyright">{{setting('site.copiright')}}</div>
                <a href="https://astanacreative.kz/" class="footer__dev-link">
                    @if($locale == 'kz')
                        Astanacreative-те сайттарды әзірлеу
                    @else
                        Разработка сайтов в Astanacreative
                    @endif
                </a>

            </div>
        </div>
    </div>
</footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js?_v=20240809190043"></script>
<script src="js/imask.js?_v=20240809190043"></script>
<script src="js/iincheck.min.js?_v=20240809190043"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js?_v=20240809190043"></script>
<script src="js/script.js?_v=20240809190043"></script>

    </body>

</html>
