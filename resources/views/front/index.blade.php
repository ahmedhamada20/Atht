@extends('front.layouts.master')
@section('title')
Home
@endsection

@section('contact')
<div class="site__body"><!-- page -->
    <div class="page"><!-- page__body -->
        <div class="page__body"><!-- block-slider -->
            <div class="block block-slider block-slider--featured">
                <div class="container container--max--xl">
                    <div class="slider slider--with-dots">
                        <div class="owl-carousel"><a href="{{route('shop_grid')}}">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="{{ asset('front/images/slides/slide1.jpg') }}">
                                    <source media="(max-width: 767px)"
                                        srcset="{{ asset('front/images/slides/slide1.jpg') }}">
                                    <img src="{{ asset('front/images/slides/slide1.jpg') }}" alt="">
                                </picture>
                            </a><a href="{{route('shop_grid')}}">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="{{ asset('front/images/slides/slide2.jpg') }}">
                                    <source media="(max-width: 767px)"
                                        srcset="{{ asset('front/images/slides/slide2.jpg') }}">
                                    <img src="{{ asset('front/images/slides/slide2.jpg') }}" alt="">
                                </picture>
                            </a><a href="{{route('shop_grid')}}">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="{{ asset('front/images/slides/slide3.jpg') }}">
                                    <source media="(max-width: 767px)"
                                        srcset="{{ asset('front/images/slides/slide3.jpg') }}">
                                    <img src="{{ asset('front/images/slides/slide3.jpg') }}" alt="">
                                </picture>
                            </a></div>
                    </div>
                </div>
            </div><!-- block-slider / end --><!-- block-products-carousel -->
            <div class="block block-products-carousel">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header decor-header--align--center">Featured Products</h2>
                    </div>
                    <div class="block-products-carousel__slider slider slider--with-arrows">
                        <div class="owl-carousel">
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#quickview-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product1-1.jpg, images/products/product1-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product1-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Chandeliers</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Aluminum
                                            Chandelier</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (15)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$249.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--style--sale">Sale
                                    </div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#quickview-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product2-1.jpg, images/products/product2-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product2-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Lamps</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Bedside Lamp</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (7)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price"><span
                                                class="product-card__price-new">$321.54</span> <span
                                                class="product-card__price-old">$419.00</span></div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#quickview-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product3-1.jpg, images/products/product3-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product3-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Cabinets</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Wooden Closet</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (3)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$1199.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#quickview-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product4-1.jpg, images/products/product4-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product4-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Wooden Chairs</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Monero Chair</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (0)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg class="rating__star"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$94.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product5-1.jpg, images/products/product5-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product5-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Shoe Racks</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Shoe Cabinet</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (1)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$399.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#quickview-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="i{{ asset('front/mages/products/product6-1.jpg, images/products/product6-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product6-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Armchairs</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Stylish
                                            Armchair</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (8)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$154.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--style--new">New
                                    </div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#quickview-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product7-1.jpg, images/products/product7-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product7-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Fabric Sofas</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">White Sofa</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (4)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$733.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product8-1.jpg, images/products/product8-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product8-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Armchairs</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Black Leather
                                            Chair</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (0)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg class="rating__star"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$215.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product9-1.jpg, images/products/product9-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product9-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Decor</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Magic Lamp</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (0)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg class="rating__star"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$53.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product10-1.jpg, images/products/product10-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product10-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Beds</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Meridian Day</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (10)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$2,199.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product11-1.jpg, images/products/product11-1@2x.jpg 2') }}x"
                                            src="{{ asset('front/images/products/product11-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Bookshelves</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">4-Section
                                            Bookcase</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (6)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$129.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product12-1.jpg, images/products/product12-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product12-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Stools</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Round Stool</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (8)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$15.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product13-1.jpg, images/products/product13-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product13-1.jpg') }}" 
                                            alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Armchairs</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Fabric Chair</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (12)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$247.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product14-1.jpg, images/products/product14-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product14-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Stools</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Wooden Stool</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (2)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$17.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product15-1.jpg, images/products/product15-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product15-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Decor</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Treasure
                                            Chest</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (14)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$65.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    <div class="product-card__actions-list"><button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg></button> <button
                                            class="btn btn-light btn-svg-icon btn-sm" type="button"><svg
                                                width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg></button></div>
                                </div>
                                <div class="product-card__image"><a href="{{route('products')}}"><img
                                            srcset="{{ asset('front/images/products/product16-1.jpg, images/products/product16-1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/products/product16-1.jpg') }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">Wooden Chair</a></div>
                                    <div class="product-card__name"><a href="{{route('products')}}">Luxurious
                                            Chair</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (0)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg class="rating__star"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg> <svg class="rating__star" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">$184.00</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg></button> <button
                                                class="btn btn-light btn-svg-icon product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- block-products-carousel / end --><!-- block-collections -->
            <div class="block block-collections">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header decor-header--align--center">Latest Collections</h2>
                    </div>
                    <div class="row g-custom-30">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="block-collections__item block-collections__item--start">
                                <div class="block-collections__info block-collections__info--top-start">
                                    <div class="block-collections__name">Sunny Wind</div>
                                    <div class="block-collections__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing magna. Mauris sed coqut odio.</div>
                                    <div class="block-collections__button"><a href="{{route('shop_grid')}}"
                                            class="btn btn-primary">Shop Now</a></div>
                                </div>
                                <div class="block-collections__image"><a href="{{route('shop_grid')}}">
                                        <picture>
                                            <source media="(min-width: 992px)"
                                                srcset="{{ asset('front/images/collections/collection1-lg.jpg, images/collections/collection1-lg@2x.jpg 2x') }}">
                                            <source media="(max-width: 991px)"
                                                srcset="{{ asset('front/images/collections/collection1.jpg, images/collections/collection1@2x.jpg 2x') }}">
                                            <img src="{{ asset('front/images/collections/collection1-lg.jpg') }}" alt="">
                                        </picture>
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-7 pt-5 pt-md-0">
                            <div class="block-collections__item block-collections__item--end">
                                <div class="block-collections__image"><a href="{{route('shop_grid')}}">
                                        <picture>
                                            <source media="(min-width: 992px)"
                                                srcset="{{ asset('front/images/collections/collection2-lg.jpg, images/collections/collection2-lg@2x.jpg 2x') }}">
                                            <source media="(max-width: 991px)"
                                                srcset="{{ asset('front/images/collections/collection2.jpg, images/collections/collection2@2x.jpg 2x') }}">
                                            <img src="{{ asset('front/images/collections/collection2-lg.jpg') }}" alt="">
                                        </picture>
                                    </a></div>
                                <div class="block-collections__info block-collections__info--bottom-end">
                                    <div class="block-collections__name">Anero Monero</div>
                                    <div class="block-collections__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac
                                        placerat tellus. Ut a lectus magna. Mauris sed coqut odio.</div>
                                    <div class="block-collections__button"><a href="{{route('shop_grid')}}"
                                            class="btn btn-primary">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- block-collections / end --><!-- block-shop-categories -->
            <div class="block block-shop-categories">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header decor-header--align--center">Popular Categories</h2>
                    </div>
                    <div class="categories-list">
                        <div class="card category-card"><a href="#">
                                <div class="category-card__image"><img
                                        srcset="{{ asset('front/images/categories/category1.jpg, images/categories/category1@2x.jpg 2x') }}"
                                        src="{{ asset('front/images/categories/category1.jpg') }}" alt=""></div>
                                <div class="category-card__name">Chandeliers</div>
                                <div class="category-card__products">15 Products</div>
                            </a>
                        </div>


                                <div class="category-card__image"><img
                                        srcset="{{ asset('front/images/categories/category12.jpg, images/categories/category12@2x.jpg 2x') }}"
                                        src="{{ asset('front/images/categories/category12.jpg') }}" alt=""></div>
                                <div class="category-card__name">Office Chairs</div>
                                <div class="category-card__products">28 Products</div>
                            </a></div>
                    </div>
                </div>
            </div><!-- block-shop-categories / end --><!-- block-posts-carousel -->
            <div class="block block-posts-carousel">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header decor-header--align--center">Latest Blog Posts</h2>
                    </div>
                    <div class="block-posts-carousel__slider slider slider--with-arrows">
                        <div class="owl-carousel">
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post1.jpg, images/posts/post1@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post1.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">November 30, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">New Collection Of Office Furniture Anero Manero
                                            Will Go On Sale May 27</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post2.jpg, images/posts/post2@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post2.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">October 19, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Donec viverra, nulla a accumsan finibus commodo
                                            ligula</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post3.jpg, images/posts/post3@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post3.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">August 8, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Aliquam facilisis dapibus eros sit amet
                                            fermentum vestibulum congue</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post4.jpg, images/posts/post4@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post4.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">Jule 11, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Nullam at varius sapien sed sit amet
                                            condimentum elit</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post5.jpg, images/posts/post5@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post5.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">June 8, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Vestibulum leo sapien sollicitudin at magna eu
                                            interdum congue feugiat</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post6.jpg, images/posts/post6@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post6.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">May 27, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Maecenas consequat elementum orci sit amet
                                            dictum</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post7.jpg, images/posts/post7@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post7.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">April 23, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Nullam vehicula lorem nec augue semper ac
                                            vehicula enim tempus</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post8.jpg, images/posts/post8@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post8.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">March 12, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">In hac habitasse platea dictumst praesent
                                            vehicula vitae pulvinar maximus</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post9.jpg, images/posts/post9@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post9.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">February 28, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Curabitur quam augue vestibulum in mauris
                                            fermentum pellentesque libero</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                            <div class="post-card post-card--layout--default">
                                <div class="post-card__image"><a href="{{route('post')}}"><img
                                            srcset="{{ asset('front/images/posts/post10.jpg, images/posts/post10@2x.jpg 2x') }}"
                                            src="{{ asset('front/images/posts/post10.jpg') }}" alt=""></a></div>
                                <div class="post-card__info">
                                    <div class="post-card__date">January 7, 2018</div>
                                    <div class="post-card__name"><a class="post-card__name-link"
                                            href="{{route('post')}}">Suspendisse dignissim luctus metus vitae
                                            aliquam vestibulum sem odio</a></div>
                                    <div class="post-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</div><a href="{{route('post')}}"
                                        class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- block-posts-carousel / end -->
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div>
@endsection

@section('js')
@endsection