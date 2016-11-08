<!--HEADER START-->
<?php include "include/header.php"?>
<!--HEADER AND-->
<div class="main">
    <div class="call-to-action vertical-align">
        <div class="call-to-action-text">
            <h1>Wow Catering</h1>
            <span>Ресторан выездного обслуживания</span>
            <br>
            <a href="#test" class="btn _order-modal-open">ЗАКАЗАТЬ</a>
        </div>
    </div>
    <div class="about-us">
        <div class="container">
            <h4>Wow Catering</h4>
            <p>Wow Catering Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br>
                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. </p>
        </div>
    </div>
    <div class="services-wrap">
        <div class="container">
            <div class="row">
                <div class="service">
                    <img src="img/service-img.jpg" alt="">
                    <div class="service-text vertical-align">
                        <a href="#" class="vertical-align">
                            <span>Свадьбы</span>
                        </a>
                    </div>
                </div>
                <div class="service">
                    <img src="img/service-img-2.jpg" alt="">
                    <div class="service-text vertical-align">
                        <a href="#" class="vertical-align">
                            <span>Банкет</span>
                        </a>
                    </div>
                </div>
                <div class="service">
                    <img src="img/service-img-3.jpg" alt="">
                    <div class="service-text vertical-align">
                        <a href="#" class="vertical-align">
                            <span>Выездное ресторанное обслуживание</span>
                        </a>
                    </div>
                </div>
                <div class="service">
                    <img src="img/service-img-4.jpg" alt="">
                    <div class="service-text vertical-align">
                        <a href="#" class="vertical-align">
                            <span>Фуршет</span>
                        </a>
                    </div>
                </div>
                <div class="service">
                    <img src="img/service-img-5.jpg" alt="">
                    <div class="service-text vertical-align">
                        <a href="#" class="vertical-align">
                            <span>Барбекю</span>
                        </a>
                    </div>
                </div>
                <div class="service">
                    <img src="img/service-img-6.jpg" alt="">
                    <div class="service-text vertical-align">
                        <a href="#" class="vertical-align">
                            <span>Кофе-бррейки</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="order">
    <form>
        <div class="exit">
            <a href="" class="close"></a>
        </div>
        <p><span>Ф</span>ОРМА ЗАКАЗА</p>
        <h1>WOW Catering</h1>
        <div class="box left">
            <input type="text" name="fio" placeholder="Имя" required>
            <input type="tel" name="tel" placeholder="Телефон" required>
            <input type="email" name="mail" placeholder="E-mail" required>
        </div>
        <div class="box right">
                <select name="menu" size="1">
                    <option value="" disabled selected style='display:none;'>Выбрать услугу</option>
                    <option value="first">Первая позиция</option>
                    <option value="second">Вторая позиция</option>
                    <option value="third">Третья позиция</option>
                    <option value="fourth">Четвертая позиция</option>
                </select>
            <input class="comment" type="" name="comment" placeholder="Коментарий" required>
        </div>
        <a class="btn">Заказать</a>
    </form>
</div>
<!--FOOTER START-->
<?php include "include/footer.php"?>
<!--FOOTER END-->



