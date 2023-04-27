@extends('layout')

@section('content')


<section class="products">
    <div class="products__container">
        <h2 class="products__title">Наші товари</h2>
        <div class="products-list">
            @foreach ($products as $product)
                <article class="product">
                    <img class="product__image" src={{$product['image']}} alt="" />
                    <p class="product__title">{{$product['name']}}</p>
                    <p class="product__label">
                        @if ($product['discount'] != null)
                            {{$product['discount'] . '% знижки'}}
                        @endif
                        <span class="product__price product__price-nohover">{{$product['price']}} грн.</span>
                    </p>
                    <p class="product__price">{{$product['price']}} грн. </p>
                    <div class="product__overlay">
                        <button class="product__add">Добавити в корзину</button>
                        <a href="/products/{{$product['id']}}" class="product__info">Детальніше</a>
                    </div>
                    <button class="product__add product__add-nohover">Добавити в корзину</button>
                    <a href="/products/{{$product['id']}}" class="product__info product__info-nohover">Детальніше</a>
                </article>
            @endforeach
        </div>
        <button class="products__load-more">Завантажити ще</button>
    </div>
</section>

@endsection
