@extends('front.layouts.master')
@section('title')
{{ $data->name }}
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Product
                            Details</h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <!-- block -->
            <div class="block">
                <div class="product container container--max--xl">
                    <div class="card product__info">
                        <div class="product__gallery">
                            <div class="product-gallery">
                                <div class="product-gallery__featured">
                                    <div class="owl-carousel" id="">
                                        
                                        @foreach ($data->photos as $photo)
                                        @if( $photo->Filename)
                                            
                                        <a href="{{ asset('admin/pictures/product/'.$data->id . '/' . $photo->Filename) }}" data-width="1000" data-height="1000" target="_blank">
                                            <img srcset="{{ asset('admin/pictures/product/'.$data->id . '/' . $photo->Filename) }}" src="{{ asset('admin/pictures/product/'.$data->id . '/' . $photo->Filename) }}" alt="">
                                        </a>
                                            
                                        @endif
                                       
                                        @endforeach
                                    
                                            
                                            
                                            
                                            </div>
                                </div>
                                <div class="product-gallery__carousel">
                                    <div class="owl-carousel" id="product-carousel">
                                        @foreach ($data->photos as $photo)
                                        @if($photo->Filename)
                                            
                                        <a href="#" class="product-gallery__carousel-item {{ $loop->first ? ' active' : null }}">
                                            <img class="product-gallery__carousel-image" 
                                            srcset="{{ asset('admin/pictures/product/'.$data->id . '/' . $photo->Filename) }}" 
                                            src="{{ asset('admin/pictures/product/'.$data->id . '/' . $photo->Filename) }}" alt="">
                                        
                                        </a>
                                            
                                        @endif
                                       
                                        @endforeach
                                      
                                        
                                      
                                        
                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__details">
                            <div class="product__categories-sku">
                                <div class="product__categories"><a href="#">Bedroom</a>, <a href="#">Chandeliers</a></div>
                                <div class="product__sku">SKU: 83690/32</div>
                            </div>
                            <div class="product__name">
                                <h2 class="decor-header">{{ $data->name }}</h2>
                            </div>
                            <div class="product__rating">
                                <div class="product__rating-stars">
                                    <div class="rating">
                                        <div class="rating__body">
                                            @for ($i=0 ; $i<5 ; $i++) 
                                            @if($data->rating > $i)
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                        </use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                        </use>
                                                    </g>
                                                </svg>
                                                @else
                                                <svg class="rating__star" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                        </use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                        </use>
                                                    </g>
                                                </svg>

                                                @endif
                                                @endfor
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="product__rating-links"><a href="#">Reviews
                                        ({{ $data->rating }})</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="#">Write A
                                        Review</a></div>
                            </div>
                            <div class="product__description">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh
                                lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.
                            </div>
                            <div class="product__price"><span class="product__price-new">${{ $data->price }}</span>
                                <span class="product__price-old">${{ $data->price_sub }}</span></div>
                            <form class="product__options">
                                <div class="mb-3 product__option"><label class="form-label product__option-label">Color</label>
                                    <div class="radio-color">
                                        <div class="radio-color__list"><label class="radio-color__item radio-color__item--white" style="color: #fff;"><input type="radio" name="color">
                                                <span></span></label> <label class="radio-color__item" style="color: #ffd599;"><input type="radio" name="color">
                                                <span></span></label> <label class="radio-color__item" style="color: #ff6b6b;"><input type="radio" name="color">
                                                <span></span></label> <label class="radio-color__item radio-color__item--disabled" style="color: #5398ff;"><input type="radio" name="color" disabled="disabled"> <span></span></label></div>
                                    </div>
                                </div>
                                <div class="mb-3"><label class="form-label product__option-label">Material</label>
                                    <div class="radio-select">
                                        <div class="radio-select__list"><label><input type="radio" name="material"> <span>Metal</span></label>
                                            <label><input type="radio" name="material">
                                                <span>Wood</span></label> <label><input type="radio" name="material" disabled="disabled">
                                                <span>Plastic</span></label></div>
                                    </div>
                                </div>
                                <div class="mb-3"><label class="form-label product__option-label">Quantity</label>
                                    <div class="product__actions">
                                        <div class="product__actions-item">
                                            <div class="form-control-number product__quantity"><input class="form-control form-control-lg form-control-number__input" type="number" min="1" value="1">
                                                <div class="form-control-number__add"></div>
                                                <div class="form-control-number__sub"></div>
                                            </div>
                                        </div>
                                        <div class="product__actions-item"><button class="btn btn-primary btn-lg">Add to cart</button></div>
                                        <div class="product__actions-item"><button type="button" class="btn btn-secondary btn-svg-icon btn-lg product__wishlist"><svg class="product-card__action-icon" width="16px" height="16px">
                                                    <use xlink:href="{{ asset('fornt/images/sprite.svg#wishlist-16') }}"></use>
                                                </svg></button></div>
                                        <div class="product__actions-item"><button type="button" class="btn btn-secondary btn-svg-icon btn-lg product__compare"><svg class="product-card__action-icon" width="16px" height="16px">
                                                    <use xlink:href="{{ asset('fornt/images/sprite.svg#compare-16') }}"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </form>
                            <div class="product__tags">Tags: <a href="#">Bedroom</a>, <a href="#">Chandelier</a>, <a href="#">Lamp</a></div>
                            <div class="product__share-links share-links">
                                <ul class="share-links__list">
                                    <li class="share-links__item share-links__item--type--like"><a href="#">Like</a></li>
                                    <li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a></li>
                                    <li class="share-links__item share-links__item--type--pin"><a href="#">Pin It</a></li>
                                    <li class="share-links__item share-links__item--type--counter"><a href="#">4K</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card product__tabs tabs tabs--product">
                        <div class="tabs__list"><a href="#tab-description" class="tabs__tab tabs__tab--active">Description</a> <a href="#tab-specification" class="tabs__tab">Specification</a> <a href="#tab-reviews" class="tabs__tab">Reviews</a></div>
                        <div class="tabs__tab-content tabs__tab-content--active" id="tab-description">
                            <div class="product__tab-description">
                                <div class="typography">
                                    {!! $data->notes !!}
                                </div>
                            </div>
                        </div>
                        <div class="tabs__tab-content" id="tab-specification">
                            <div class="product__tab-specification">
                                <div class="spec">
                                    <h2 class="spec__header decor-header">Specification</h2>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">General</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">Material</div>
                                            <div class="spec__value">Aluminium, Plastic</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Color</div>
                                            <div class="spec__value">Metallic gray</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Type</div>
                                            <div class="spec__value">Pendant lamp</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Mount</div>
                                            <div class="spec__value">2 screws</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Number of sockets</div>
                                            <div class="spec__value">1</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Socket</div>
                                            <div class="spec__value">E14</div>
                                        </div>
                                    </div>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">Dimensions</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">Length</div>
                                            <div class="spec__value">99 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Width</div>
                                            <div class="spec__value">207 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Height</div>
                                            <div class="spec__value">208 mm</div>
                                        </div>
                                    </div>
                                    <div class="spec__disclaimer">Information on technical characteristics,
                                        the delivery set, the country of manufacture and the appearance of
                                        the goods is for reference only and is based on the latest
                                        information available at the time of publication.</div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__tab-content" id="tab-reviews">
                            <div class="product__tab-reviews">
                                <div class="reviews-view">
                                    <div class="reviews-view__list">
                                        <h2 class="reviews-view__header decor-header">Customer Reviews</h2>
                                        <div class="reviews-list">
                                            <ol class="reviews-list__content">
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar"><img srcset="{{ asset('front/images/avatars/avatar1.jpg, images/avatars/avatar1@2x.jpg 2x') }}" src="{{ asset('front/images/avatars/avatar1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="review__content">
                                                            <div class="review__author">Samantha Smith</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                            <div class="review__text">Phasellus id mattis
                                                                nulla. Mauris velit nisi, imperdiet vitae
                                                                sodales in, maximus ut lectus. Vivamus
                                                                commodo scelerisque lacus, at porttitor dui
                                                                iaculis id. Curabitur imperdiet ultrices
                                                                fermentum.</div>
                                                            <div class="review__date">27 May, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar"><img srcset="{{ asset('front/images/avatars/avatar2.jpg, images/avatars/avatar2@2x.jpg 2x') }}" src="{{ asset('front/images/avatars/avatar2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="review__content">
                                                            <div class="review__author">Adam Taylor</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                            <div class="review__text">Aenean non lorem nisl.
                                                                Duis tempor sollicitudin orci, eget
                                                                tincidunt ex semper sit amet. Nullam neque
                                                                justo, sodales congue feugiat ac, facilisis
                                                                a augue. Donec tempor sapien et fringilla
                                                                facilisis. Nam maximus consectetur diam.
                                                                Nulla ut ex mollis, volutpat tellus vitae,
                                                                accumsan ligula.</div>
                                                            <div class="review__date">12 April, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar"><img srcset="{{ asset('front/images/avatars/avatar3.jpg, images/avatars/avatar3@2x.jpg 2x') }}" src="{{ asset('front/images/avatars/avatar3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="review__content">
                                                            <div class="review__author">Helena Garcia</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg> <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                                </use>
                                                                            </g>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                            <div class="review__text">Duis ac lectus
                                                                scelerisque quam blandit egestas.
                                                                Pellentesque hendrerit eros laoreet suscipit
                                                                ultrices.</div>
                                                            <div class="review__date">2 January, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="reviews-list__pagination">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous" tabindex="-1"><span aria-hidden="true"><svg width="6px" height="9px">
                                                                        <use xlink:href="images/sprite.svg#arrow-left-6x9">
                                                                        </use>
                                                                    </svg> </span><span class="sr-only">Previous</span></a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><svg width="6px" height="9px">
                                                                        <use xlink:href="images/sprite.svg#arrow-right-6x9">
                                                                        </use>
                                                                    </svg> </span><span class="sr-only">Next</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="reviews-view__form">
                                        <h2 class="reviews-view__header decor-header">Write A Review</h2>
                                        <div class="row g-custom-30">
                                            <div class="col-12 col-lg-9 col-xl-8">
                                                <div class="mb-3 row g-3">
                                                    <div class="col-md-4"><label for="review-stars" class="form-label">Review Stars</label> <select id="review-stars" class="form-select">
                                                            <option>5 Stars Rating</option>
                                                            <option>4 Stars Rating</option>
                                                            <option>3 Stars Rating</option>
                                                            <option>2 Stars Rating</option>
                                                            <option>1 Stars Rating</option>
                                                        </select></div>
                                                    <div class="col-md-4"><label for="review-author" class="form-label">Your Name</label> <input type="text" class="form-control" id="review-author" placeholder="Your Name">
                                                    </div>
                                                    <div class="col-md-4"><label for="review-email" class="form-label">Email Address</label> <input type="text" class="form-control" id="review-email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="mb-3"><label for="review-text" class="form-label">Your Review</label> <textarea class="form-control" id="review-text" rows="6"></textarea></div>
                                                <div class="mt-4"><button type="submit" class="btn btn-primary btn-lg">Post Your
                                                        Review</button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- block / end -->
            <!-- block-products-carousel -->
            <div class="block block-products-carousel">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header decor-header--align--center">Related Products</h2>
                    </div>
                    <div class="block-products-carousel__slider slider slider--with-arrows">
                        <div class="owl-carousel">

                             @foreach (getProducts() as $row)
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions">
                                    
                                </div>
                                <div class="product-card__image"><a href="{{route('Details_products',$row->id)}}"><img srcset="{{ $row->image }}" src="{{ $row->image }}" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="#">{{ $row->sub_category->name }}</a></div>
                                    <div class="product-card__name"><a href="{{route('Details_products',$row->id)}}">Aluminum
                                            {{ $row->name }}</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-title">Reviews (15)</div>
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">

                                                    @for ($i=0 ; $i<5 ; $i++) @if($row->rating > $i)
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        @else
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{ asset('front/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>

                                                        @endif
                                                        @endfor


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse dictum libero eget metus
                                        suscipit placerat. Duis consequat tellus laoreet tellus pharetra, eu
                                        tempor mi ornare. Nulla at nibh urna. Morbi vulputate enim id
                                        sapien.</div>
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price">${{ $row->price }}</div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button> <button class="btn btn-light btn-svg-icon product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#wishlist-16') }}"></use>
                                                </svg></button> <button class="btn btn-light btn-svg-icon product-card__compare" type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('front/images/sprite.svg#compare-16') }}"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                         
                           
                        </div>
                    </div>
                </div>
            </div><!-- block-products-carousel / end -->
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div>
@endsection

@section('js')
@endsection
