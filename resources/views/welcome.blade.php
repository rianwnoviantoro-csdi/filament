@extends('layouts.default')
@section('content')

    <!-- hero slider -->
    <section class="hero-section overlay bg-cover"
        data-background="{{ resolve(App\Settings\GeneralSettings::class)->banner }}">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInLeft" data-delay-in=".1">Slide 1</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight"
                                data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft"
                                data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInDown" data-delay-in=".1">Slide 2</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInUp" data-delay-in=".1">Slide 3</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown"
                                data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- banner-feature -->
    <section class="bg-gray overflow-md-hidden">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-end">
                    <img class="img-fluid w-100"
                        src="https://images.pexels.com/photos/9064442/pexels-photo-9064442.jpeg?auto=compress&cs=tinysrgb&w=640&h=427&dpr=1"
                        alt="banner-feature">
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row feature-blocks bg-gray justify-content-between">
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Pengaduan</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad</p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Info Pembayaran</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad</p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Pasang baru</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /banner-feature -->

    <!-- courses -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Edukasi</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="{{ route('publikasi.index', ['category' => 'edukasi']) }}"
                                class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                @foreach ($edukasi as $item)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ Storage::url($item->thumbnail) }}"
                                alt="{{ $item->slug }}">
                            <div class="card-body">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i
                                            class="ti-calendar mr-1 text-color"></i>{{ $item->created_at->format('F j, Y') }}
                                    </li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="course-single.html">{{ $item->category->name }}</a></li>
                                </ul>
                                <a href="course-single.html">
                                    <h4 class="card-title">{{ $item->title }}</h4>
                                </a>
                                <p class="card-text mb-4">{{ \Illuminate\Support\Str::limit($item->content, 100) }}</p>
                                <a href="{{ route('publikasi.detail', ['category' => $item->category->slug, 'slug' => $item->slug]) }}"
                                    class="btn btn-primary btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="courses.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell
                        all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->

    <!-- cta -->
    <section class="section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h6 class="text-white font-secondary mb-0">Click to Join the Advance Workshop</h6>
                    <h2 class="section-title text-white">Training In Advannce Networking</h2>
                    <a href="contact.html" class="btn btn-light">join now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /cta -->

    <!-- success story -->
    <section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">
                    <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                        <i class="ti-control-play"></i>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Success Stories</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /success story -->

    <!-- events -->
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="events.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($agenda as $item)
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-img position-relative">
                                <img class="card-img-top rounded-0" src="{{ Storage::url($item->thumbnail) }}"
                                    alt="{{ $item->slug }}">
                                <div class="card-date">
                                    <span>{{ $item->created_at->format('j') }}</span><br>{{ $item->created_at->format('F') }}
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- location -->
                                <a
                                    href="{{ route('publikasi.detail', ['category' => $item->category->slug, 'slug' => $item->slug]) }}">
                                    <h4 class="card-title">{{ $item->title }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="course.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /events -->

    <!-- blog -->
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Latest News</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($news as $item)
                    <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div
                            class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ Storage::url($item->thumbnail) }}"
                                alt="{{ $item->slug }}">
                            <div class="card-body">
                                <!-- post meta -->
                                <ul class="list-inline mb-3">
                                    <!-- post date -->
                                    <li class="list-inline-item mr-3 ml-0">{{ $item->created_at->format('F j, Y') }}</li>
                                    <!-- author -->
                                    <li class="list-inline-item mr-3 ml-0">{{ $item->author->name }}</li>
                                </ul>
                                <a
                                    href="{{ route('publikasi.detail', ['category' => $item->category->slug, 'slug' => $item->slug]) }}">
                                    <h4 class="card-title">{{ $item->title }}</h4>
                                </a>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($item->content, 100) }}</p>
                                <a href="{{ route('publikasi.detail', ['category' => $item->category->slug, 'slug' => $item->slug]) }}"
                                    class="btn btn-primary btn-sm">read more</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /blog -->

@stop
