@extends('front.layouts.master')
@section('title')
Home
@endsection

@section('contact')
<div class="site__body">
    <!-- page -->
    <div class="page">
        <!-- page__body -->
        <div class="page__body">
            <!-- block-slider -->
            <div class="block block-slider block-slider--featured">
                <div class="container container--max--xl">
                    <div class="slider slider--with-dots">
                        <div class="owl-carousel">

                            @foreach (getSlidres() as $row )
                            <a href="{{ $row->url }}">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="{{ $row->image }}">
                                    <source media="(max-width: 767px)" srcset="{{ $row->image }}">
                                    <img src="{{ $row->image }}" alt="">
                                </picture>
                            </a>
                            @endforeach

                            {{--
                            <a href="{{route('shop_grid')}}">
                            <picture>
                                <source media="(min-width: 768px)" srcset="{{ asset('front/images/slides/slide2.jpg') }}">
                                <source media="(max-width: 767px)" srcset="{{ asset('front/images/slides/slide2.jpg') }}">
                                <img src="{{ asset('front/images/slides/slide2.jpg') }}" alt="">
                            </picture>
                            </a>


                            <a href="{{route('shop_grid')}}">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="{{ asset('front/images/slides/slide3.jpg') }}">
                                    <source media="(max-width: 767px)" srcset="{{ asset('front/images/slides/slide3.jpg') }}">
                                    <img src="{{ asset('front/images/slides/slide3.jpg') }}" alt="">
                                </picture>
                            </a> --}}


                        </div>
                    </div>
                </div>
            </div><!-- block-slider / end -->
            <!-- block-products-carousel -->








            <div class="block block-products-carousel">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header decor-header--align--center">Featured Products</h2>
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
            </div>



            <!-- block-products-carousel / end -->
            <!-- block-collections -->
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
                                    <div class="block-collections__button"><a href="{{route('shop_grid')}}" class="btn btn-primary">Shop Now</a></div>
                                </div>
                                <div class="block-collections__image"><a href="{{route('shop_grid')}}">
                                        <picture>
                                            <source media="(min-width: 992px)" srcset="{{ asset('front/images/collections/collection1-lg.jpg, images/collections/collection1-lg@2x.jpg 2x') }}">
                                            <source media="(max-width: 991px)" srcset="{{ asset('front/images/collections/collection1.jpg, images/collections/collection1@2x.jpg 2x') }}">
                                            <img src="{{ asset('front/images/collections/collection1-lg.jpg') }}" alt="">
                                        </picture>
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-7 pt-5 pt-md-0">
                            <div class="block-collections__item block-collections__item--end">
                                <div class="block-collections__image"><a href="{{route('shop_grid')}}">
                                        <picture>
                                            <source media="(min-width: 992px)" srcset="{{ asset('front/images/collections/collection2-lg.jpg, images/collections/collection2-lg@2x.jpg 2x') }}">
                                            <source media="(max-width: 991px)" srcset="{{ asset('front/images/collections/collection2.jpg, images/collections/collection2@2x.jpg 2x') }}">
                                            <img src="{{ asset('front/images/collections/collection2-lg.jpg') }}" alt="">
                                        </picture>
                                    </a></div>
                                <div class="block-collections__info block-collections__info--bottom-end">
                                    <div class="block-collections__name">Anero Monero</div>
                                    <div class="block-collections__description">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac
                                        placerat tellus. Ut a lectus magna. Mauris sed coqut odio.</div>
                                    <div class="block-collections__button"><a href="{{route('shop_grid')}}" class="btn btn-primary">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- block-collections / end -->
            <!-- block-shop-categories -->
            <div class="block block-shop-categories">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header decor-header--align--center">Popular Categories</h2>
                    </div>
                    <div class="categories-list">

                        @foreach (getSubCategory() as $row)
                        <div class="card category-card"><a href="#">
                                <div class="category-card__image"><img srcset="{{ $row->image }}" alt=""></div>
                                <div class="category-card__name">{{ $row->name }}</div>
                                <div class="category-card__products">{{ $row->sub_category->count() }} Products</div>
                            </a>
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div><!-- block-shop-categories / end -->
        <!-- block-posts-carousel -->
        <div class="block block-posts-carousel">
            <div class="container container--max--xl">
                <div class="block__title">
                    <h2 class="decor-header decor-header--align--center">Latest Blog Posts</h2>
                </div>
                <div class="block-posts-carousel__slider slider slider--with-arrows">
                    <div class="owl-carousel">
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post1.jpg, images/posts/post1@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post1.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">November 30, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">New Collection Of Office Furniture Anero Manero
                                        Will Go On Sale May 27</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post2.jpg, images/posts/post2@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post2.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">October 19, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Donec viverra, nulla a accumsan finibus commodo
                                        ligula</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post3.jpg, images/posts/post3@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post3.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">August 8, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Aliquam facilisis dapibus eros sit amet
                                        fermentum vestibulum congue</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post4.jpg, images/posts/post4@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post4.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">Jule 11, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Nullam at varius sapien sed sit amet
                                        condimentum elit</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post5.jpg, images/posts/post5@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post5.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">June 8, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Vestibulum leo sapien sollicitudin at magna eu
                                        interdum congue feugiat</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post6.jpg, images/posts/post6@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post6.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">May 27, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Maecenas consequat elementum orci sit amet
                                        dictum</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post7.jpg, images/posts/post7@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post7.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">April 23, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Nullam vehicula lorem nec augue semper ac
                                        vehicula enim tempus</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post8.jpg, images/posts/post8@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post8.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">March 12, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">In hac habitasse platea dictumst praesent
                                        vehicula vitae pulvinar maximus</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post9.jpg, images/posts/post9@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post9.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">February 28, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Curabitur quam augue vestibulum in mauris
                                        fermentum pellentesque libero</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-card post-card--layout--default">
                            <div class="post-card__image"><a href="{{route('post')}}"><img srcset="{{ asset('front/images/posts/post10.jpg, images/posts/post10@2x.jpg 2x') }}" src="{{ asset('front/images/posts/post10.jpg') }}" alt=""></a></div>
                            <div class="post-card__info">
                                <div class="post-card__date">January 7, 2018</div>
                                <div class="post-card__name"><a class="post-card__name-link" href="{{route('post')}}">Suspendisse dignissim luctus metus vitae
                                        aliquam vestibulum sem odio</a></div>
                                <div class="post-card__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</div><a href="{{route('post')}}" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
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
