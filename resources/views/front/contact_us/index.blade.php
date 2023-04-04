@extends('front.layouts.master')
@section('title')
contact-us
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Contact Us
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <!-- block -->
            <div class="block">
                <div class="container container--max--xl">
                    <div class="card mb-0">
                        <div class="contact-us">
                            <div class="contact-us__map"><iframe
                                    src="https://maps.google.com/maps?q=Holbrook-Palmer%20Park&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                    frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"></iframe></div>
                            <div class="contact-us__container">
                                <div class="row g-custom-30">
                                    <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                        <h3 class="contact-us__header decor-header">Our Address</h3>
                                        <div class="contact-us__address">
                                            <p>715 Fake Ave, Apt. 34, New York, NY 10021 USA<br>Email:
                                                meblya@example.com<br>Phone Number: +1 754 000-00-00</p>
                                            <p><strong>Opening Hours</strong><br>Monday to Friday:
                                                8am-8pm<br>Saturday: 8am-6pm<br>Sunday: 10am-4pm</p>
                                            <p><strong>Comment</strong><br>Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Curabitur suscipit suscipit mi,
                                                non tempor nulla finibus eget. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h3 class="contact-us__header decor-header">Leave us a Message</h3>
                                        <form>
                                            <div class="mb-3 row g-3">
                                                <div class="col-md-6"><label for="form-name"
                                                        class="form-label">Your Name</label> <input
                                                        type="text" id="form-name" class="form-control"
                                                        placeholder="Your Name"></div>
                                                <div class="col-md-6"><label for="form-email"
                                                        class="form-label">Email</label> <input type="email"
                                                        id="form-email" class="form-control"
                                                        placeholder="Email Address"></div>
                                            </div>
                                            <div class="mb-3"><label for="form-subject"
                                                    class="form-label">Subject</label> <input type="text"
                                                    id="form-subject" class="form-control"
                                                    placeholder="Subject"></div>
                                            <div class="mb-3"><label for="form-message"
                                                    class="form-label">Message</label> <textarea
                                                    id="form-message" class="form-control"
                                                    rows="4"></textarea></div>
                                            <div class="mt-4"><button type="submit"
                                                    class="btn btn-primary">Send Message</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- block / end -->
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div>

@endsection

@section('js')
@endsection