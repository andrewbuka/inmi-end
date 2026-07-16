<?php
    // template Name: Contacts;
?>

<?php get_header(); ?>

<?php
$inmi_contacts_route_url = 'https://yandex.by/maps/?rtext=~53.955102,27.711050&rtt=auto&ruri=~&text=220084%2C%20%D0%B3.%20%D0%9C%D0%B8%D0%BD%D1%81%D0%BA%2C%20%D1%83%D0%BB.%20%D0%90%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%B8%D0%BA%D0%B0%20%D0%9A%D1%83%D0%BF%D1%80%D0%B5%D0%B2%D0%B8%D1%87%D0%B0%2C%202';
$inmi_contacts_map_src = 'https://yandex.by/map-widget/v1/?ll=27.711050%2C53.955102&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjUwMTAyMhJQ0JHQtdC70LDRgNGD0YHRjCwg0JzRltC90YHQuiwg0LLRg9C70ZbRhtCwINCQ0LrQsNC00Y3QvNGW0LrQsCDQmtGD0YPQv9GA0Y3QstGW0YfQsCwgMiIKDRWn3UEVp1JXQg%2C%2C&z=16';
?>

<main class="contacts-page">
    <section class="contacts-page-hero">
        <div class="container">
            <div class="contacts-page-hero__grid">
                <div class="contacts-page-hero__content">
                    <nav class="inmi-info-breadcrumbs contacts-page-breadcrumbs" aria-label="Навигационная цепочка">
                        <a href="<?php echo esc_url( get_page_link( 8 ) ); ?>">Главная</a>
                        <span aria-hidden="true">/</span>
                        <span>Контакты</span>
                    </nav>
                    <p class="contacts-eyebrow">Связь с INMI</p>
                    <h1>Контакты Института микробиологии</h1>
                    <p class="contacts-page-lead">Поможем подобрать биопрепараты, рассчитать расход и согласовать удобный способ получения заказа для физических и юридических лиц.</p>
                    <div class="contacts-page-actions">
                        <a class="contacts-page-btn contacts-page-btn--primary" href="tel:+375447507890">Позвонить специалисту</a>
                        <a class="contacts-page-btn contacts-page-btn--ghost" href="<?php echo esc_url( $inmi_contacts_route_url ); ?>" target="_blank" rel="noopener">Построить маршрут</a>
                    </div>
                </div>
                <div class="contacts-page-hero__card" aria-label="Краткая информация">
                    <span>Работаем с заявками</span>
                    <strong>Пн–Пт: 09:00–17:00</strong>
                    <p>Отдел продаж ответит на вопросы по наличию, дозировкам, документам и условиям поставки.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts-page-main">
        <div class="container contacts-container contacts-page-container">
            <div class="contacts-panel contacts-page-panel">
                <div class="contacts-heading">
                    <p class="contacts-eyebrow">Как с нами связаться</p>
                    <h2 class="title contacts-title"><span>Отдел продаж INMI</span></h2>
                    <p class="contacts-lead">Выберите удобный канал связи — мы подскажем препарат под вашу задачу и поможем оформить заказ.</p>
                </div>

                <div class="contacts-list">
                    <div class="contact-card contact-card-primary">
                        <span class="contact-card-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="contact-card-content">
                            <span class="contact-card-label">Телефон</span>
                            <a href="tel:+375447507890"><strong>+375 (44) 750-78-90</strong></a>
                            <small>Консультации по продукции и заказам</small>
                        </span>
                    </div>
                    <div class="contact-card">
                        <span class="contact-card-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="contact-card-content">
                            <span class="contact-card-label">Email</span>
                            <a href="mailto:inmisale@mail.ru"><strong>inmisale@mail.ru</strong></a>
                            <small>Для заявок, счетов и документов</small>
                        </span>
                    </div>
                    <div class="contact-card">
                        <span class="contact-card-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="contact-card-content">
                            <span class="contact-card-label">Адрес</span>
                            <strong>220084, г. Минск, ул. Академика Купревича, 2</strong>
                            <small>ГНУ «Институт микробиологии Национальной академии наук Беларуси»</small>
                        </span>
                    </div>
                </div>

                <div class="contacts-schedule">
                    <span class="contact-card-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    <div>
                        <span class="contact-card-label">График</span>
                        <ul class="contacts-schedule-list">
                            <li><span>Понедельник — пятница</span><strong>09:00–17:00</strong></li>
                            <li><span>Суббота — воскресенье</span><strong>выходной</strong></li>
                        </ul>
                        <p>Перед визитом рекомендуем предварительно согласовать время по телефону.</p>
                    </div>
                </div>
            </div>

            <div class="contacts-map contacts-page-map">
                <div class="contacts-map-top">
                    <div>
                        <span class="contact-card-label">Карта и маршрут</span>
                        <p>Постройте маршрут до Института микробиологии НАН Беларуси</p>
                    </div>
                    <a class="contacts-map-link" href="<?php echo esc_url( $inmi_contacts_route_url ); ?>" target="_blank" rel="noopener">Настроить маршрут</a>
                </div>
                <div class="contacts-map-frame">
                    <iframe src="<?php echo esc_url( $inmi_contacts_map_src ); ?>" loading="lazy" allowfullscreen="true" referrerpolicy="no-referrer-when-downgrade" title="Карта проезда к Институту микробиологии НАН Беларуси"></iframe>
                    <a class="contacts-map-badge" href="<?php echo esc_url( $inmi_contacts_route_url ); ?>" target="_blank" rel="noopener"><i class="fa fa-location-arrow" aria-hidden="true"></i> Открыть маршрут в Яндекс Картах</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
