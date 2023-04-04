@extends('front.layouts.master')
@section('title')
compare
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
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                        </ol>
                        <h1 class="page__header-title decor-header decor-header--align--center">Comparison
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="block">
                <div class="container container--max--xl">
                    <div class="comparison">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Product</th>
                                    <td><a class="comparison__product-link" href="{{route('products')}}">
                                            <div class="comparison__product-image"><img
                                                    srcset="{{ asset('front/images/products/product1-1.jpg, images/products/product1-1@2x.jpg 2x') }}"
                                                    src="{{ asset('front/images/products/product1-1.jpg') }}" alt=""></div>
                                            <div class="comparison__product-name">Aluminum Chandelier</div>
                                            <div class="comparison__product-rating">
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
                                                        </svg> <svg class="rating__star" width="13px"
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
                                                        </svg> <svg class="rating__star" width="13px"
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
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </a></td>
                                    <td><a class="comparison__product-link" href="{{route('products')}}">
                                            <div class="comparison__product-image"><img
                                                    srcset="{{ asset('front/images/products/product2-1.jpg, images/products/product2-1@2x.jpg 2x') }}"
                                                    src="{{ asset('front/images/products/product2-1.jpg') }}" alt=""></div>
                                            <div class="comparison__product-name">Bedside Lamp</div>
                                            <div class="comparison__product-rating">
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
                                                        </svg> <svg class="rating__star" width="13px"
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
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </a></td>
                                    <td><a class="comparison__product-link" href="{{route('products')}}">
                                            <div class="comparison__product-image"><img
                                                    srcset="{{ asset('front/images/products/product3-1.jpg, images/products/product3-1@2x.jpg 2x') }}"
                                                    src="{{ asset('front/images/products/product3-1.jpg') }}" alt=""></div>
                                            <div class="comparison__product-name">Wooden Closet</div>
                                            <div class="comparison__product-rating">
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
                                                        </svg> <svg class="rating__star" width="13px"
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
                                                        </svg> <svg class="rating__star" width="13px"
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
                                                        </svg> <svg class="rating__star" width="13px"
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
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </a></td>
                                </tr>
                                <tr>
                                    <th>Availability</th>
                                    <td><span class="stock-badge stock-badge--in-stock">In Stock</span></td>
                                    <td><span class="stock-badge stock-badge--in-stock">In Stock</span></td>
                                    <td><span class="stock-badge stock-badge--in-stock">In Stock</span></td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>$249.00</td>
                                    <td>$321.54</td>
                                    <td>$1199.00</td>
                                </tr>
                                <tr>
                                    <th>Add To Cart</th>
                                    <td><button class="btn btn-primary">Add To Cart</button></td>
                                    <td><button class="btn btn-primary">Add To Cart</button></td>
                                    <td><button class="btn btn-primary">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <th>SKU</th>
                                    <td>83690/32</td>
                                    <td>83590/15</td>
                                    <td>1590/78</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>15 Kg</td>
                                    <td>7 Kg</td>
                                    <td>11 Kg</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>Red</td>
                                    <td>Brown</td>
                                    <td>Gray</td>
                                </tr>
                                <tr>
                                    <th>Material</th>
                                    <td>Wood</td>
                                    <td>Plastic</td>
                                    <td>Metal</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td><button class="btn btn-secondary btn-sm">Remove</button></td>
                                    <td><button class="btn btn-secondary btn-sm">Remove</button></td>
                                    <td><button class="btn btn-secondary btn-sm">Remove</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div>
@endsection

@section('js')
@endsection