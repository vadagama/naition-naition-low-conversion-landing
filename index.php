<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая помощь: практический курс для каждого</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="api/visit.php" defer></script>
    <script src="js/main.js" defer></script>
</head>
<body>
    <header class="hero">
        <div class="container hero-content">
            <span class="hero-badge">Офлайн · Москва · 15 августа 2026</span>
            <h1>Первая помощь: практический курс для каждого</h1>
            <p class="hero-text">
                Научитесь действовать уверенно в экстренной ситуации: остановить кровотечение,
                провести СЛР, помочь при травмах и ожогах до приезда медиков.
            </p>
            <div class="meta-grid">
                <div class="meta-card">
                    <strong>Дата</strong>
                    15 августа 2026, суббота
                </div>
                <div class="meta-card">
                    <strong>Время</strong>
                    10:00 – 18:00, перерыв на обед
                </div>
                <div class="meta-card">
                    <strong>Место</strong>
                    Москва, ул. Примерная, 10 · только офлайн
                </div>
            </div>
            <div class="hero-actions">
                <button type="button" class="btn btn-register" data-scroll-to="pricing">Записаться на курс</button>
                <a class="btn btn-secondary" href="#program">Смотреть программу</a>
            </div>
            <p class="hero-note">
                8 часов практики на манекенах · сертификат · малые группы до 14 человек.
                Курс только офлайн в Москве.
            </p>
        </div>
    </header>

    <div class="sticky-cta" id="sticky-cta" hidden>
        <div class="container sticky-cta-inner">
            <span class="sticky-cta-text">Первая помощь · от 4 900 ₽ · Москва</span>
            <button type="button" class="btn btn-register" data-scroll-to="pricing">Записаться</button>
        </div>
    </div>

    <main>
        <section class="section">
            <div class="container">
                <h2 class="section-title">О курсе</h2>
                <p class="section-lead">
                    Это не лекция «для галочки», а полноценный практический день, где каждый блок
                    заканчивается отработкой навыков под контролем инструктора.
                </p>
                <div class="features-grid">
                    <article class="feature-card">
                        <h3>8 часов практики</h3>
                        <p>Больше половины времени — тренировки на манекенах, имитация травм и работа в парах.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Формат offline</h3>
                        <p>Живая обратная связь и вопросы по вашим реальным ситуациям. Только Москва.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Сертификат</h3>
                        <p>Именной сертификат и чек-лист действий для дома, работы и поездок.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Малые группы</h3>
                        <p>До 14 человек — каждый успевает отработать ключевые навыки несколько раз.</p>
                    </article>
                </div>
                <div class="trust-teaser">
                    <p>
                        3 инструктора со стажем скорой и РКК · сертификат · малые группы.
                        <a href="#instructors">Кто ведёт курс →</a>
                    </p>
                </div>
                <div class="cta-band">
                    <div class="cta-band-copy">
                        <strong>Готовы записаться?</strong>
                        <span>Места ограничены · от 4 900 ₽</span>
                    </div>
                    <button type="button" class="btn btn-register" data-scroll-to="pricing">Выбрать тариф</button>
                </div>
            </div>
        </section>

        <section class="section" id="program">
            <div class="container">
                <h2 class="section-title">Программа курса</h2>
                <p class="section-lead program-intro">
                    От оценки ситуации до сложных сценариев с несколькими пострадавшими.
                    Каждый модуль: теория, демонстрация инструктора и практика.
                </p>
                <div class="program-list">
                    <article class="program-module">
                        <h3>10:00 – 11:00 · Оценка обстановки и безопасность</h3>
                        <p class="program-summary">
                            Как не попасть под угрозу самому: осмотр места, число пострадавших,
                            проверка сознания и дыхания, вызов скорой.
                        </p>
                        <details>
                            <summary>Подробнее</summary>
                            <p>
                                Разберём последовательность при любом происшествии: остановиться,
                                оглядеть место, понять угрозы. Как подойти к человеку, не повредив
                                шею или позвоночник, и попросить свидетелей вызвать скорую.
                                Типичные ошибки — паника и лишние перемещения — отрабатываем на манекене.
                            </p>
                        </details>
                    </article>
                    <article class="program-module">
                        <h3>11:00 – 12:30 · Сердечно-легочная реанимация</h3>
                        <p class="program-summary">
                            Центральный блок: алгоритм СЛР для взрослых, смена спасателя и работа с AED.
                        </p>
                        <details>
                            <summary>Подробнее</summary>
                            <p>
                                Когда нужна реанимация, куда и как надавливать, частота и глубина,
                                когда достаточно только компрессий. Смена спасателя, работа в паре,
                                тренировочный AED: включение, электроды, анализ ритма.
                                Каждый проходит полный цикл несколько раз.
                            </p>
                        </details>
                    </article>
                    <article class="program-module">
                        <h3>12:30 – 13:30 · Обед и разбор кейсов</h3>
                        <p class="program-summary">
                            Пауза и разбор реальных историй: что сработало, где ошиблись очевидцы.
                        </p>
                        <details>
                            <summary>Подробнее</summary>
                            <p>
                                Живой диалог по страхам (кровь, ответственность) и вопросам после утра.
                                Ошибки на тренировке — нормальная часть обучения в безопасной среде.
                            </p>
                        </details>
                    </article>
                    <article class="program-module">
                        <h3>13:30 – 15:00 · Кровотечения и шок</h3>
                        <p class="program-summary">
                            Давящая повязка, турникет, признаки шока и системные действия под давлением.
                        </p>
                        <details>
                            <summary>Подробнее</summary>
                            <p>
                                Капиллярное, венозное и артериальное кровотечение; подручные средства
                                и турникет. Признаки шока, положение тела, тепло, контроль дыхания.
                                Практика на имитаторах ран.
                            </p>
                        </details>
                    </article>
                    <article class="program-module">
                        <h3>15:00 – 16:30 · Переломы, вывихи, ожоги</h3>
                        <p class="program-summary">
                            Иммобилизация подручными средствами и помощь при ожогах без типичных ошибок.
                        </p>
                        <details>
                            <summary>Подробнее</summary>
                            <p>
                                Признаки перелома и вывиха, когда нельзя трогать пострадавшего.
                                Ожоги: охлаждение, повязка, ошибки вроде масла на рану.
                                Иммобилизация на напарнике под контролем группы.
                            </p>
                        </details>
                    </article>
                    <article class="program-module">
                        <h3>16:30 – 18:00 · Итоговая практика и сертификация</h3>
                        <p class="program-summary">
                            Цельные сценарии с несколькими пострадавшими, разбор и вручение сертификатов.
                        </p>
                        <details>
                            <summary>Подробнее</summary>
                            <p>
                                Приоритеты под шумом и ограничением времени: кому СЛР, кого согреть.
                                Индивидуальная обратная связь и сертификат — вы уходите с навыком «с чего начать».
                            </p>
                        </details>
                    </article>
                </div>
                <div class="cta-band">
                    <div class="cta-band-copy">
                        <strong>Выбрать тариф и записаться</strong>
                        <span>от 4 900 ₽ · офлайн в Москве</span>
                    </div>
                    <button type="button" class="btn btn-register" data-scroll-to="pricing">К тарифам</button>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">Виды травм и состояний</h2>
                <p class="section-lead">
                    Самые частые состояния, с которыми сталкиваются очевидцы в городе, дома и на работе.
                </p>
                <div class="injury-grid">
                    <article class="injury-card">
                        <h3>Кровотечения</h3>
                        <p>Давящая повязка, турникет, контроль после остановки крови.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Переломы и вывихи</h3>
                        <p>Иммобилизация, транспортная шина, ошибки при перемещении.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Ожоги</h3>
                        <p>Охлаждение, стерильная повязка, что нельзя делать с раной.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Обмороки и шок</h3>
                        <p>Положение тела, дыхание, согревание, что нельзя давать.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Остановка дыхания</h3>
                        <p>СЛР, работа в паре, AED до приезда скорой.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Травмы головы и позвоночника</h3>
                        <p>Когда нельзя менять положение, фиксация головы.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section legal-section">
            <div class="container">
                <h2 class="section-title">Юридические аспекты</h2>
                <p class="section-lead">
                    Страх ответственности часто мешает помочь. Коротко — что защищает закон.
                </p>
                <div class="legal-grid">
                    <div class="legal-block">
                        <h3>Добросовестный помощник</h3>
                        <p>
                            Помощь в разумных пределах без грубой неосторожности защищена законом
                            от необоснованных претензий.
                        </p>
                    </div>
                    <div class="legal-block">
                        <h3>Границы ответственности</h3>
                        <p>
                            Какие действия разумны, когда ждать медиков и как фиксировать обстоятельства.
                        </p>
                    </div>
                    <div class="legal-block">
                        <h3>Вызов служб</h3>
                        <p>
                            Что сказать диспетчеру и медикам по прибытии — разбираем на курсе.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="emotional-photo">
            <img src="images/cpr-training.jpg" alt="Практика сердечно-легочной реанимации на манекене">
        </section>

        <section class="section" id="instructors">
            <div class="container">
                <h2 class="section-title">Инструкторы</h2>
                <p class="section-lead">
                    Специалисты с опытом экстренной медицины и обучения. Более 1 200 слушателей прошли базовый курс.
                </p>
                <div class="instructors-grid">
                    <article class="instructor-card">
                        <div class="instructor-photo">АК</div>
                        <h3>Алексей Кравцов</h3>
                        <p class="instructor-title">Врач скорой медицинской помощи, стаж 14 лет</p>
                        <ul class="credentials">
                            <li>Более 8 000 выездов бригады скорой помощи</li>
                            <li>Сертификат European Resuscitation Council BLS</li>
                            <li>Автор программы «Первая помощь дома и на работе»</li>
                        </ul>
                    </article>
                    <article class="instructor-card">
                        <div class="instructor-photo">МС</div>
                        <h3>Марина Соколова</h3>
                        <p class="instructor-title">Инструктор РКК, фельдшер, стаж 11 лет</p>
                        <ul class="credentials">
                            <li>Обучила более 1 200 слушателей базовой первой помощи</li>
                            <li>Член региональной команды инструкторов РКК</li>
                            <li>Специализация: помощь детям и подросткам</li>
                        </ul>
                    </article>
                    <article class="instructor-card">
                        <div class="instructor-photo">ДН</div>
                        <h3>Дмитрий Новиков</h3>
                        <p class="instructor-title">Парамедик, наставник учебного центра</p>
                        <ul class="credentials">
                            <li>Сертификат ERC First Aid Provider</li>
                            <li>Опыт работы в корпоративных программах безопасности</li>
                            <li>Ведёт практические блоки по кровотечениям и травмам</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="section pricing-section" id="pricing">
            <div class="container">
                <h2 class="section-title">Тарифы</h2>
                <p class="section-lead">
                    Во все тарифы входят материалы, сертификат и доступ к памятке после курса.
                </p>
                <div class="pricing-grid">
                    <article class="pricing-card">
                        <h3>Базовый</h3>
                        <div class="price">4 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Участие в полном однодневном курсе</li>
                            <li>Сертификат и памятка</li>
                            <li>Кофе-брейки</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="Базовый">Записаться</button>
                    </article>
                    <article class="pricing-card featured">
                        <span class="pricing-badge">Лучший выбор</span>
                        <h3>Расширенный</h3>
                        <div class="price">7 900 ₽</div>
                        <p class="pricing-value">Максимум практики и набор перевязочных материалов с собой.</p>
                        <ul class="pricing-list">
                            <li>Всё из базового тарифа</li>
                            <li>Набор перевязочных материалов</li>
                            <li>Дополнительный практический блок</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="Расширенный">Записаться</button>
                    </article>
                    <article class="pricing-card">
                        <h3>Корпоративный</h3>
                        <div class="price">12 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Индивидуальный разбор рисков профессии</li>
                            <li>Консультация для HR или руководителя</li>
                            <li>Отчёт о прохождении для работодателя</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="Корпоративный">Записаться</button>
                    </article>
                </div>
            </div>
        </section>

        <section class="section registration-section" id="registration">
            <div class="container">
                <div class="registration-panel">
                    <h2 class="section-title">Записаться на курс</h2>
                    <p class="section-lead">
                        Оставьте заявку — ответим в течение дня, подтвердим место и ответим на вопросы.
                        15 августа 2026 · Москва, ул. Примерная, 10.
                    </p>
                    <p class="tariff-chip" id="tariff-chip" hidden></p>
                    <form class="form-grid" id="registration-form" action="api/submit.php" method="post">
                        <input type="hidden" name="bot_session_id" id="bot_session_id" value="">
                        <label>
                            Имя
                            <input type="text" name="name" required autocomplete="name" placeholder="Как к вам обращаться">
                        </label>
                        <label>
                            Телефон
                            <input type="tel" name="phone" required autocomplete="tel" placeholder="+7 900 000-00-00">
                        </label>
                        <label>
                            E-mail
                            <input type="email" name="email" required autocomplete="email" placeholder="для подтверждения заявки">
                        </label>
                        <label>
                            Цель прохождения курса
                            <span class="field-hint">Хватит одной фразы — например, для семьи или работы</span>
                            <textarea name="purpose" required rows="3" placeholder="например: для семьи / работы"></textarea>
                        </label>
                        <button type="submit" class="btn">Отправить заявку</button>
                        <p class="form-reassure">Ответим в течение дня · офлайн-курс в Москве · 15 августа 2026</p>
                    </form>
                    <p class="form-message" id="form-message" aria-live="polite"></p>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            © 2026 Учебный центр «Спаси-Себя». Курс первой помощи, Москва.
        </div>
    </footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=110921945', 'ym');

    ym(110921945, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/110921945" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
