<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(["resources/scss/app.scss"])
    <title>Document</title>
</head>
<body>
    <div class="product-form">
        <div class="product-form__container">
            <h1 class="product-form__title">Введіть дані про продукт</h1>
            <form class="product-form__form" action="/products" method="POST">
                @csrf
                <div>
                    <label for="name">Назва: </label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="image">Посилання на картинку: </label>
                    <input type="text" name="image">
                </div>
                <div>
                    <label for="price">Ціна: </label>
                    <input type="number" step="0.01" name="price">
                </div>
                <div>
                    <label for="discount">Знижка: </label>
                    <input type="number" step="0.01" name="discount">
                </div>
                <button class="product-form__submit">Створити продукт</button>
            </form>
        </div>
    </div>
</body>
</html>