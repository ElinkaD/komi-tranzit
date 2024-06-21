<style>
/* header */
.menu-main a {
    color: #140C9C;
}
.menu-main a:hover,
.menu-main a:after,
.menu-main a:hover:after {
    color: #D8315B;
}
.navbar-logo h4{
    color: #140C9C;
}
.page{
    margin: 100px 0 200px 0;
}

.contacts_block {
    width: 90vw;
    padding: 20px;
    padding: 0;

    margin: 0 auto;
}

.container {
    display: flex;
    justify-content: flex-end;
    align-items: flex-start;
    gap: 54px;
}

.office-info, .contact-info {
    display: flex;
    flex-direction: column;

    gap: 30px;
}

.contacts_block h3, .page h3{
    font-size: 32px;
    font-weight: 400;
}

.address p, .contact-info a, .contact-info p{
    font-size: 20px;
    color: #002033;
}

</style>

<section class="hero">
    <div class="hero-text">
        <a href="index.php?page=main_page"><h4>Главная</h4></a>
        <h1>Контакты</h1>
    </div>
</section>

<section class="contacts_block">
    <div class="container">
        <div class="office-info">
            <h3>Наш офис</h3>
            <address class="address">
                <p>169710,<br/>
                    Республика Коми, г. Усинск,<br/>
                    ул. Загородная, д.&nbsp;3</p>
            </address>
        </div>

        <div class="contact-info">
            <h3>Связаться с нами</h3>
            <p> 8 (821) <nobr>442-99-52</nobr><br/>
                <a href="mailto:KomiTranzit@mail.ru">KomiTranzit@mail.ru</a>
            </p>
        </div>
    </div>
</section>

<div class="page">
    <section class ="map">
        <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/10944/usinsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Усинск</a><a href="https://yandex.ru/maps/10944/usinsk/house/zagorodnaya_ulitsa_3/YU4YcwFlTE0HQFhsfXxzdnViZA==/inside/?ll=57.565580%2C66.027910&tab=inside&utm_medium=mapframe&utm_source=maps&z=16.86" style="color:#eee;font-size:12px;position:absolute;top:14px;">Загородная улица, 3 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=57.565580%2C66.027910&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgo0MjAzNTgwOTMzEl3QoNC-0YHRgdC40Y8sINCg0LXRgdC_0YPQsdC70LjQutCwINCa0L7QvNC4LCDQo9GB0LjQvdGB0LosINCX0LDQs9C-0YDQvtC00L3QsNGPINGD0LvQuNGG0LAsIDMiCg0oQ2ZCFUoOhEI%2C&tab=inside&z=16.86" width="1280px" height="400" frameborder="1" allowfullscreen="true" style="position:relative; border-radius: 15px;"></iframe></div>
    </section>

    <?php 
    require 'forma.php';
    echo '<link rel="stylesheet" href="css/forma.css">'; 
    ?>
</div>




