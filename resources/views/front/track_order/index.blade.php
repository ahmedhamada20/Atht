@extends('front.layouts.master')
@section('title')
track-order
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Track Order
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row g-custom-30 justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="card flex-grow-1 mb-0">
                                <div class="card__content">
                                    <p class="mb-4">Vestibulum sem odio, ullamcorper a imperdiet tincidunt
                                        sed magna felis, consequat a erat ut, rutrum finibus odio. Donec
                                        viverra, nulla a accumsan finibus, ligula orci venenatis velit
                                        tempor ligula.</p>
                                    <form>
                                        <div class="mb-3"><label for="track-order-id"
                                                class="form-label">Order ID</label> <input
                                                id="track-order-id" type="text" class="form-control"
                                                placeholder="Order ID"></div>
                                        <div class="mb-3"><label for="track-email" class="form-label">Email
                                                address</label> <input id="track-email" type="email"
                                                class="form-control" placeholder="Email address"></div>
                                        <div class="mt-4"><button type="submit"
                                                class="btn btn-primary">Track</button></div>
                                    </form>
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