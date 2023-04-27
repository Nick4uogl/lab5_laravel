
@extends('layout')

@section('content')

<div class="product-page">
    <div class="product-page__container">
        <div class="product-page__left">
        <img src={{$product['image']}} alt="{{$product['name']}}" />
        <p class="product-page__product-name">{{$product['name']}}</p>
        </div>
        <div class="product-page__right">
        <h2 class="product-page__title">Характеристика та опис</h2>
        <div class="product-page__table">
            <div class="product-page__characteristics product-page__column">
            <div class="column-item">Висота, мм</div>
            <div class="column-item">Ширина, мм</div>
            <div class="column-item">Глибина, мм</div>
            <div class="column-item">Довжина, мм</div>
            <div class="column-item">Колір</div>
            <div class="column-item">Матеріал</div>
            <div class="column-item">Тип</div>
            <div class="column-item">Час виробництва</div>
            </div>
            <div class="product-page__values product-page__column">
            <div class="column-item">500</div>
            <div class="column-item">1500</div>
            <div class="column-item">200</div>
            <div class="column-item">2500</div>
            <div class="column-item">Без кольору</div>
            <div class="column-item">Дуб</div>
            <div class="column-item">Двоспальне</div>
            <div class="column-item">5 діб</div>
            </div>
        </div>
        <p class="product-page__price">12 000 грн.</p>
        <button class="add-to-cart">Додати в корзину</button>
        </div>
    </div>
</div>
