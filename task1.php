<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <title>Webbooster Test Task 1</title>
</head>
<body>
    <div class="card__list">
        <div class="card__item">
            <img src="./img/chair.jpg" alt="" class="card__img">
            <div class="card__desc">Парикмахерское кресло гидравлическое</div>
            <div class="card__price">9900 р</div>
            <button class="card__button">Купить</button>
        </div>
        <div class="card__item">
            <img src="./img/chair.jpg" alt="" class="card__img">
            <div class="card__desc">Парикмахерское кресло гидравлическое</div>
            <div class="card__price">9900 р</div>
            <button class="card__button">Купить</button>
        </div>
        <div class="card__item">
            <img src="./img/chair.jpg" alt="" class="card__img">
            <div class="card__desc">Парикмахерское кресло гидравлическое</div>
            <div class="card__price">9900 р</div>
            <button class="card__button">Купить</button>
        </div>
        <div class="card__item">
            <img src="./img/chair.jpg" alt="" class="card__img">
            <div class="card__desc">Парикмахерское кресло гидравлическое</div>
            <div class="card__price">9900 р</div>
            <button class="card__button">Купить</button>
        </div>
    </div>
    <form action="" class="modal__form">
        <div class="modal__content">
            <button class="modal__close-button">
                <img src="./img/close.png" alt="">
            </button>
            <div class="modal__content-row">
                <label>Имя</label>
                <input type="text" id='name' value='' />
            </div>
            <div class="modal__content-row">
                <label>Телефон</label>
                <input type="text" id='phone' value='' />
            </div>
            <div class="modal__content-row">
                <label>Почта</label>
                <input type="text" id='email' value='' />
            </div>
            <div class="modal__content-row">
                <label>Название товара</label>
                <input type="text" id='merchandise' value='' />
            </div>
        </div>
        <button class="modal__submit-button">
            Отправить
        </button>
        <div id="erconts"></div>
    </form>
    <script src="./js/script.js"></script>
</body>
</html>