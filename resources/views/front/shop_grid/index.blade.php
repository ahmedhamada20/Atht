@extends('front.layouts.master')
@section('title')
shop grid
@endsection

@section('contact')
<div class="site__body">
    <!-- page -->
    <div class="page">
        <!-- page__header -->
        <div class="page__header">
            <div class="container container--max--xl">
                <div class="row g-custom-30">
                    <div class="col">
                        <ol class="page__header-breadcrumbs breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                        </ol>
                        <h1 class="page__header-title decor-header decor-header--align--center">Bedroom Set
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row g-custom-30">
                        <div class="col">
                            <div class="products-view">
                                <div class="products-view__options view-options">
                                    <div class="view-options__layout"><a href="{{route('shop_grid')}}"
                                            class="view-options__layout-button view-options__layout-button--active"><svg
                                                width="14px" height="14px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#grid-14') }}"></use>
                                            </svg> </a><a href="{{route('shop_grid')}}"
                                            class="view-options__layout-button"><svg width="14px"
                                                height="14px">
                                                <use xlink:href="{{ asset('front/images/sprite.svg#list-14') }}"></use>
                                            </svg></a></div>
                                    <div class="view-options__legend">Showing 6 of 98 products</div>
                                    <div class="view-options__divider"></div>
                                    <div class="view-options__control"><label
                                            class="view-options__control-label" for="view-options-sort">Sort
                                            By:</label>
                                        <div class="view-options__control-content"><select
                                                class="form-select form-select-sm" name=""
                                                id="view-options-sort">
                                                <option value="">Default</option>
                                                <option value="">Name (A-Z)</option>
                                            </select></div>
                                    </div>
                                    <div class="view-options__control"><label
                                            class="view-options__control-label"
                                            for="view-options-show">Show:</label>
                                        <div class="view-options__control-content"><select
                                                class="form-select form-select-sm" name=""
                                                id="view-options-show">
                                                <option value="">16</option>
                                                <option value="">32</option>
                                                <option value="">48</option>
                                                <option value="">64</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div
                                    class="products-view__list products-list products-list--layout--full-grid-4">
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="{{ asset('front/images/sprite.svg#quickview-16') }}">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product1-1.jpg, images/products/product1-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product1-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a
                                                        href="#">Chandeliers</a></div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Aluminum Chandelier</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (15)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$249.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__badges-list">
                                                <div
                                                    class="product-card__badge product-card__badge--style--sale">
                                                    Sale</div>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product2-1.jpg, images/products/product2-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product2-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Lamps</a>
                                                </div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Bedside Lamp</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (7)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price"><span
                                                            class="product-card__price-new">$321.54</span>
                                                        <span class="product-card__price-old">$419.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product3-1.jpg, images/products/product3-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product3-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Cabinets</a>
                                                </div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Wooden Closet</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (3)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$1199.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product4-1.jpg, images/products/product4-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product4-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Wooden
                                                        Chairs</a></div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Monero Chair</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (0)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star" width="13px"
                                                                    height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$94.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product5-1.jpg, images/products/product5-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product5-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Shoe
                                                        Racks</a></div>
                                                <div class="product-card__name"><a href="{{route('products')}}">Shoe
                                                        Cabinet</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (1)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$399.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product6-1.jpg, images/products/product6-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product6-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a
                                                        href="#">Armchairs</a></div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Stylish Armchair</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (8)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$154.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__badges-list">
                                                <div
                                                    class="product-card__badge product-card__badge--style--new">
                                                    New</div>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product7-1.jpg, images/products/product7-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product7-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Fabric
                                                        Sofas</a></div>
                                                <div class="product-card__name"><a href="{{route('products')}}">White
                                                        Sofa</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (4)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$733.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product8-1.jpg, images/products/product8-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product8-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a
                                                        href="#">Armchairs</a></div>
                                                <div class="product-card__name"><a href="{{route('products')}}">Black
                                                        Leather Chair</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (0)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star" width="13px"
                                                                    height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$215.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product9-1.jpg, images/products/product9-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product9-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Decor</a>
                                                </div>
                                                <div class="product-card__name"><a href="{{route('products')}}">Magic
                                                        Lamp</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (0)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star" width="13px"
                                                                    height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$53.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product10-1.jpg, images/products/product10-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product10-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Beds</a>
                                                </div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Meridian Day</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (10)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$2,199.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product11-1.jpg, images/products/product11-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product11-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a
                                                        href="#">Bookshelves</a></div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">4-Section Bookcase</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (6)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$129.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product12-1.jpg, images/products/product12-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product12-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Stools</a>
                                                </div>
                                                <div class="product-card__name"><a href="{{route('products')}}">Round
                                                        Stool</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (8)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$15.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product13-1.jpg, images/products/product13-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product13-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a
                                                        href="#">Armchairs</a></div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Fabric Chair</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (12)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$247.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product14-1.jpg, images/products/product14-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product14-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Stools</a>
                                                </div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Wooden Stool</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (2)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$17.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product15-1.jpg, images/products/product15-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product15-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Decor</a>
                                                </div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Treasure Chest</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (14)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$65.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__actions">
                                                <div class="product-card__actions-list"><button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="images/sprite.svg#quickview-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#wishlist-16">
                                                            </use>
                                                        </svg></button> <button
                                                        class="btn btn-light btn-svg-icon btn-sm"
                                                        type="button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16">
                                                            </use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="product-card__image"><a href="{{route('products')}}"><img
                                                        srcset="{{ asset('front/images/products/product16-1.jpg, images/products/product16-1@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/products/product16-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="#">Wooden
                                                        Chair</a></div>
                                                <div class="product-card__name"><a
                                                        href="{{route('products')}}">Luxurious Chair</a></div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (0)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star" width="13px"
                                                                    height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal">
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
                                                <div class="product-card__description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Suspendisse dictum
                                                    libero eget metus suscipit placerat. Duis consequat
                                                    tellus laoreet tellus pharetra, eu tempor mi ornare.
                                                    Nulla at nibh urna. Morbi vulputate enim id sapien.
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$184.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Add To Cart</button> <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-view__pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    aria-label="Previous" tabindex="-1"><span
                                                        aria-hidden="true"><svg width="6px" height="9px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-left-6x9">
                                                            </use>
                                                        </svg> </span><span
                                                        class="sr-only">Previous</span></a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"
                                                    aria-label="Next"><span aria-hidden="true"><svg
                                                            width="6px" height="9px">
                                                            <use
                                                                xlink:href="images/sprite.svg#arrow-right-6x9">
                                                            </use>
                                                        </svg> </span><span class="sr-only">Next</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div>
@endsection

@section('js')
@endsection