@extends('front.layouts.master')
@section('title')
Posts
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Article Page
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="container container--max--xl">
                <div class="row g-custom-30">
                    <div class="col-12 col-lg-9">
                        <div class="block">
                            <article class="card post">
                                <header class="post__header">
                                    <div class="post__category"><a href="#">Latest News</a></div>
                                    <h2 class="post__title">
                                       {{ $data->name }}
                                    </h2>
                                    
                                </header>
                                <div class="post__featured"><img
                                        srcset="{{ $data->image }}"
                                        src="{{ $data->image }}"alt=""></div>
                                <div class="post__content">
                                    <div class="typography">
                                        {!! $data->notes !!}
                                    </div>
                                </div>
                                {{-- <footer class="post__footer">
                                    <div class="post__footer-content">
                                        <div class="post__tags-share">
                                            <div class="post__tags">Tags: <a href="#">New Collection</a>, <a
                                                    href="#">Furniture</a>, <a href="#">Office</a></div>
                                            <div class="post__share-links share-links">
                                                <ul class="share-links__list">
                                                    <li
                                                        class="share-links__item share-links__item--type--like">
                                                        <a href="#">Like</a></li>
                                                    <li
                                                        class="share-links__item share-links__item--type--tweet">
                                                        <a href="#">Tweet</a></li>
                                                    <li
                                                        class="share-links__item share-links__item--type--pin">
                                                        <a href="#">Pin It</a></li>
                                                    <li
                                                        class="share-links__item share-links__item--type--counter">
                                                        <a href="#">4K</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post__author">
                                            <div class="post__author-avatar"><img
                                                    srcset="{{ asset('front/images/avatars/avatar1.jpg, images/avatars/avatar1@2x.jpg 2x') }}"
                                                    src="{{ asset('front/images/avatars/avatar1.jpg') }}" alt=""></div>
                                            <div class="post__author-info">
                                                <div class="post__author-name"><a href="#">Jessica Moore</a>
                                                </div>
                                                <div class="post__author-description">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Curabitur suscipit
                                                    suscipit mi, non tempor nulla finibus eget. Lorem ipsum
                                                    dolor sit amet, consectetur adipiscing elit.</div>
                                                <ul class="post__author-socials">
                                                    <li><a href="https://themeforest.net/user/kos9/portfolio"
                                                            target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://themeforest.net/user/kos9/portfolio"
                                                            target="_blank"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://themeforest.net/user/kos9/portfolio"
                                                            target="_blank"><i
                                                                class="fab fa-youtube"></i></a></li>
                                                    <li><a href="https://themeforest.net/user/kos9/portfolio"
                                                            target="_blank"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </footer> --}}
                            </article>
                            <section class="card">
                                <div class="card__header">
                                    <h3 class="decor-header">Related Posts</h3>
                                </div>
                                <div class="card__content mb-2">
                                    <div class="posts-list posts-list--related-posts">
                                        @foreach (getBlogs() as $row)
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--compact">
                                                <div class="post-card__image"><a href="{{route('Details_post',$row->id)}}"><img
                                                            srcset="{{ $row->image }}"
                                                            src="{{ $row->image }}" alt=""></a></div>
                                                <div class="post-card__info">
                                                    <div class="post-card__date">{{ $row->created_at->format('Y-M-d') }}</div>
                                                    <div class="post-card__name"><a
                                                            class="post-card__name-link"
                                                            href="{{route('Details_post',$row->id)}}">
                                                            {{ $row->name }}
                                                        </a></div>
                                                    <div class="post-card__description">
                                                        
                                                    </div><a href="{{route('Details_post',$row->id)}}"
                                                        class="btn btn-primary btn-xs post-card__read-more">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                      
                                      
                                    </div>
                                </div>
                            </section>
                            {{-- <section class="card">
                                <div class="card__header">
                                    <h3 class="decor-header">Comments (4)</h3>
                                </div>
                                <div class="card__content">
                                    <div class="comments-list">
                                        <ol class="comments-list__items">
                                            <li class="comments-list__item">
                                                <div class="comments-list__comment comment">
                                                    <div class="comment__avatar"><img
                                                            srcset="{{ asset('front/images/avatars/avatar1.jpg, images/avatars/avatar1@2x.jpg 2x') }}"
                                                            src="{{ asset('front/images/avatars/avatar1.jpg') }}" alt=""></div>
                                                    <div class="comment__content">
                                                        <div class="comment__meta">
                                                            <div class="comment__reply"><a href="#"
                                                                    class="btn btn-secondary btn-xs">Reply</a>
                                                            </div>
                                                            <div class="comment__author"><a href="#">Jessica
                                                                    Moore</a></div>
                                                            <div class="comment__date">November 30, 2018
                                                            </div>
                                                        </div>
                                                        <div class="comment__text">Aliquam ullamcorper
                                                            elementum sagittis. Etiam lacus lacus, mollis in
                                                            mattis in, vehicula eu nulla. Nulla nec tellus
                                                            pellentesque.</div>
                                                    </div>
                                                </div>
                                                <ol class="comments-list__items comments-list__items--sub">
                                                    <li class="comments-list__item">
                                                        <div class="comments-list__comment comment">
                                                            <div class="comment__avatar"><img
                                                                    srcset="{{ asset('front/images/avatars/avatar2.jpg, images/avatars/avatar2@2x.jpg 2x') }}"
                                                                    src="{{ asset('front/images/avatars/avatar2.jpg') }}" alt="">
                                                            </div>
                                                            <div class="comment__content">
                                                                <div class="comment__meta">
                                                                    <div class="comment__reply"><a href="#"
                                                                            class="btn btn-secondary btn-xs">Reply</a>
                                                                    </div>
                                                                    <div class="comment__author"><a
                                                                            href="#">Adam Taylor</a></div>
                                                                    <div class="comment__date">December 4,
                                                                        2018</div>
                                                                </div>
                                                                <div class="comment__text">Ut vitae finibus
                                                                    nisl, suscipit porttitor urna. Integer
                                                                    efficitur efficitur velit non pulvinar.
                                                                    Aliquam blandit volutpat arcu vel
                                                                    tristique. Integer commodo ligula id
                                                                    augue tincidunt faucibus.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comments-list__item">
                                                        <div class="comments-list__comment comment">
                                                            <div class="comment__avatar"><img
                                                                    srcset="{{ asset('front/images/avatars/avatar3.jpg, images/avatars/avatar3@2x.jpg 2x') }}"
                                                                    src="{{ asset('front/images/avatars/avatar3.jpg') }}" alt="">
                                                            </div>
                                                            <div class="comment__content">
                                                                <div class="comment__meta">
                                                                    <div class="comment__reply"><a href="#"
                                                                            class="btn btn-secondary btn-xs">Reply</a>
                                                                    </div>
                                                                    <div class="comment__author"><a
                                                                            href="#">Helena Garcia</a></div>
                                                                    <div class="comment__date">December 12,
                                                                        2018</div>
                                                                </div>
                                                                <div class="comment__text">Suspendisse
                                                                    dignissim luctus metus vitae aliquam.
                                                                    Vestibulum sem odio, ullamcorper a
                                                                    imperdiet a, tincidunt sed lacus. Sed
                                                                    magna felis, consequat a erat ut, rutrum
                                                                    finibus odio.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="comments-list__item">
                                                <div class="comments-list__comment comment">
                                                    <div class="comment__avatar"><img
                                                            srcset="{{ asset('front/images/avatars/avatar4.jpg, images/avatars/avatar4@2x.jpg 2x') }}"
                                                            src="{{ asset('front/images/avatars/avatar4.jpg') }}" alt=""></div>
                                                    <div class="comment__content">
                                                        <div class="comment__meta">
                                                            <div class="comment__reply"><a href="#"
                                                                    class="btn btn-secondary btn-xs">Reply</a>
                                                            </div>
                                                            <div class="comment__author"><a href="#">Ryan
                                                                    Ford</a></div>
                                                            <div class="comment__date">December 5, 2018
                                                            </div>
                                                        </div>
                                                        <div class="comment__text">Nullam at varius sapien.
                                                            Sed sit amet condimentum elit.</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="comments-list__pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled"><a class="page-link"
                                                            href="#" aria-label="Previous"
                                                            tabindex="-1"><span aria-hidden="true"><svg
                                                                    width="6px" height="9px">
                                                                    <use
                                                                        xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}">
                                                                    </use>
                                                                </svg> </span><span
                                                                class="sr-only">Previous</span></a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"
                                                            aria-label="Next"><span aria-hidden="true"><svg
                                                                    width="6px" height="9px">
                                                                    <use
                                                                        xlink:href="{{ asset('front/images/sprite.svg#arrow-right-6x9') }}">
                                                                    </use>
                                                                </svg> </span><span
                                                                class="sr-only">Next</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="card">
                                <div class="card__header">
                                    <h3 class="decor-header">Write A Comment</h3>
                                </div>
                                <div class="card__content">
                                    <form>
                                        <div class="mb-3 row g-3">
                                            <div class="col-md-4"><label for="comment-first-name"
                                                    class="form-label">First Name</label> <input type="text"
                                                    class="form-control" id="comment-first-name"
                                                    placeholder="First Name"></div>
                                            <div class="col-md-4"><label for="comment-last-name"
                                                    class="form-label">Last Name</label> <input type="text"
                                                    class="form-control" id="comment-last-name"
                                                    placeholder="Last Name"></div>
                                            <div class="col-md-4"><label for="comment-email"
                                                    class="form-label">Email Address</label> <input
                                                    type="email" class="form-control" id="comment-email"
                                                    placeholder="Email Address"></div>
                                        </div>
                                        <div class="mb-3"><label for="comment-content"
                                                class="form-label">Comment</label> <textarea
                                                class="form-control" id="comment-content"
                                                rows="6"></textarea></div>
                                        <div class="mt-4"><button type="submit"
                                                class="btn btn-primary btn-lg">Post Your Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </section> --}}
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="block">
                            <aside class="sidebar">
                                <!-- widget-social -->
                                <div class="widget">
                                    <div class="widget-social">
                                        <ul class="widget-social__list">
                                            <li class="widget-social__item"><a
                                                    class="widget-social__link widget-social__link--facebook"
                                                    href="https://themeforest.net/user/kos9/portfolio"
                                                    target="_blank"><i
                                                        class="widget-social__icon fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="widget-social__item"><a
                                                    class="widget-social__link widget-social__link--twitter"
                                                    href="https://themeforest.net/user/kos9/portfolio"
                                                    target="_blank"><i
                                                        class="widget-social__icon fab fa-twitter"></i></a>
                                            </li>
                                            <li class="widget-social__item"><a
                                                    class="widget-social__link widget-social__link--youtube"
                                                    href="https://themeforest.net/user/kos9/portfolio"
                                                    target="_blank"><i
                                                        class="widget-social__icon fab fa-youtube"></i></a>
                                            </li>
                                            <li class="widget-social__item"><a
                                                    class="widget-social__link widget-social__link--instagram"
                                                    href="https://themeforest.net/user/kos9/portfolio"
                                                    target="_blank"><i
                                                        class="widget-social__icon fab fa-instagram"></i></a>
                                            </li>
                                            <li class="widget-social__item"><a
                                                    class="widget-social__link widget-social__link--rss"
                                                    href="https://themeforest.net/user/kos9/portfolio"
                                                    target="_blank"><i
                                                        class="widget-social__icon fas fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- widget-social / end -->
                                <!-- widget-about-blog -->
                                <div class="widget widget--card">
                                    <div class="widget__title">
                                        <h4 class="decor-header">About Blog</h4>
                                    </div>
                                    <div class="widget__body">
                                        <div class="widget-about-blog">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Sed tincidunt, erat in malesuada
                                            aliquam, est erat faucibus purus, eget viverra nulla sem.</div>
                                    </div>
                                </div><!-- widget-about-blog / end -->
                                <!-- widget-categories -->
                                <div class="widget widget--card">
                                    <div class="widget__title">
                                        <h4 class="decor-header">Categories</h4>
                                    </div>
                                    <div class="widget__body">
                                        <div class="widget-categories" data-collapse
                                            data-collapse-open-class="widget-categories__item--open">
                                            <ul class="widget-categories__list">
                                                <li class="widget-categories__item" data-collapse-item><a
                                                        href="#" class="widget-categories__link">Latest
                                                        News</a></li>
                                                <li class="widget-categories__item" data-collapse-item><a
                                                        href="#" class="widget-categories__link">Special
                                                        Offers</a></li>
                                                <li class="widget-categories__item" data-collapse-item><a
                                                        href="#" class="widget-categories__link">New
                                                        Arrivals</a></li>
                                                <li class="widget-categories__item" data-collapse-item><a
                                                        href="#" class="widget-categories__link">Reviews</a>
                                                </li>
                                                <li class="widget-categories__item" data-collapse-item><a
                                                        href="#" class="widget-categories__link">Home
                                                        Decor</a></li>
                                                <li class="widget-categories__item" data-collapse-item><a
                                                        href="#" class="widget-categories__link">Outdoor
                                                        Furniture</a></li>
                                                <li class="widget-categories__item" data-collapse-item><a
                                                        href="#" class="widget-categories__link">Office
                                                        Furniture</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- widget-categories / end -->
                                <!-- widget-posts -->
                                <div class="widget widget-posts widget--card">
                                    <div class="widget__title">
                                        <h4 class="decor-header">Popular News</h4>
                                    </div>
                                    <div class="widget__body">
                                        <ul class="widget-posts__list">
                                            <li class="widget-posts__item"><a class="widget-posts__image"
                                                    href="{{route('post')}}"><img
                                                        srcset="{{ asset('front/images/posts/post1-thumbnail.jpg, images/posts/post1-thumbnail@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/posts/post1-thumbnail.jpg') }}" alt=""></a>
                                                <div class="widget-posts__info">
                                                    <div class="widget-posts__title"><a href="#">New
                                                            Collection Of Office Furniture Anero Manero Will
                                                            Go On Sale May 27</a></div>
                                                    <div class="widget-posts__date">November 30, 2018</div>
                                                </div>
                                            </li>
                                            <li class="widget-posts__item"><a class="widget-posts__image"
                                                    href="{{route('post')}}"><img
                                                        srcset="{{ asset('front/images/posts/post2-thumbnail.jpg, images/posts/post2-thumbnail@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/posts/post2-thumbnail.jpg') }}" alt=""></a>
                                                <div class="widget-posts__info">
                                                    <div class="widget-posts__title"><a href="#">Donec
                                                            viverra, nulla a accumsan finibus commodo
                                                            ligula</a></div>
                                                    <div class="widget-posts__date">October 19, 2018</div>
                                                </div>
                                            </li>
                                            <li class="widget-posts__item"><a class="widget-posts__image"
                                                    href="{{route('post')}}"><img
                                                        srcset="{{ asset('front/images/posts/post3-thumbnail.jpg, images/posts/post3-thumbnail@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/posts/post3-thumbnail.jpg') }}" alt=""></a>
                                                <div class="widget-posts__info">
                                                    <div class="widget-posts__title"><a href="#">Aliquam
                                                            facilisis dapibus eros sit amet fermentum
                                                            vestibulum congue</a></div>
                                                    <div class="widget-posts__date">August 8, 2018</div>
                                                </div>
                                            </li>
                                            <li class="widget-posts__item"><a class="widget-posts__image"
                                                    href="{{route('post')}}"><img
                                                        srcset="{{ asset('front/images/posts/post4-thumbnail.jpg, images/posts/post4-thumbnail@2x.jpg 2x') }}"
                                                        src="{{ asset('front/images/posts/post4-thumbnail.jpg') }}" alt=""></a>
                                                <div class="widget-posts__info">
                                                    <div class="widget-posts__title"><a href="#">Nullam at
                                                            varius sapien sed sit amet condimentum elit</a>
                                                    </div>
                                                    <div class="widget-posts__date">Jule 11, 2018</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- widget-posts / end -->
                                <!-- widget-newsletter -->
                                <div class="widget widget--card">
                                    <div class="widget__title">
                                        <h4 class="decor-header">Our Newsletter</h4>
                                    </div>
                                    <div class="widget__body">
                                        <div class="widget-newsletter">
                                            <p style="font-size: 15px;">Curabitur porttitor ultrices turpis
                                                ac luctus. Aliquam imperdiet eros ante, in facilisis justo
                                                semper sit amet.</p>
                                            <form action="#"><input type="email" class="form-control mb-3"
                                                    placeholder="Email Address"> <button type="submit"
                                                    class="btn btn-primary w-100">Subscribe</button></form>
                                        </div>
                                    </div>
                                </div><!-- widget-newsletter / end -->
                            
                                <!-- widget-banner -->
                                <div class="widget"><a href="#" class="widget-sidebar-banner">
                                        <picture>
                                            <source media="(min-width: 960px)"
                                                srcset="images/banners/sidebar-banner.jpg, images/banners/sidebar-banner@2x.jpg 2x">
                                            <source media="(min-width: 361px) and (max-width: 959px)"
                                                srcset="images/banners/sidebar-banner-wide.jpg, images/banners/sidebar-banner-wide@2x.jpg 2x">
                                            <source media="(max-width: 360px)"
                                                srcset="images/banners/sidebar-banner.jpg, images/banners/sidebar-banner@2x.jpg 2x">
                                            <img src="images/banners/sidebar-banner.jpg" alt=""></picture>
                                    </a></div><!-- widget-banner / end -->
                                <!-- widget-tags -->
                                <div class="widget widget--card">
                                    <div class="widget__title">
                                        <h4 class="decor-header">Tags Cloud</h4>
                                    </div>
                                    <div class="widget__body">
                                        <div class="widget-tags"><a href="#">Chairs</a> <a href="#">Special
                                                Offer</a> <a href="#">Bedroom</a> <a href="#">Cabinet</a> <a
                                                href="#">Sofa</a> <a href="#">Stool</a> <a href="#">Bed</a>
                                            <a href="#">Decor</a> <a href="#">Lamp</a> <a
                                                href="#">Mattresses</a> <a href="#">Office</a> <a
                                                href="#">Accent Furniture</a></div>
                                    </div>
                                </div><!-- widget-tags / end -->
                            </aside>
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
