@extends('layouts.default')
@section('content')
    @php
        // Get the current URL path
        $currentPath = request()->path();
        $segments = explode('/', $currentPath);

        // Define the breadcrumb map based on URL segments
        $breadcrumbMap = [
            'publikasi' => 'Publikasi',
            'edukasi' => 'Edukasi',
        ];

        // Initialize the breadcrumbs array
        $breadcrumbs = [];
        $url = '';

        // Generate breadcrumbs based on segments
        foreach ($segments as $segment) {
            $url .= '/' . $segment;
            if (array_key_exists($segment, $breadcrumbMap)) {
                $breadcrumbs[] = ['url' => $url, 'name' => $breadcrumbMap[$segment]];
            }
        }

        // Add the last segment as the current page
        $breadcrumbs[] = ['url' => '', 'name' => ucfirst(end($segments))];
    @endphp

    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ Storage::url($generalSettings->brand_logo) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        @foreach ($breadcrumbs as $breadcrumb)
                            <li class="list-inline-item">
                                @if ($breadcrumb['url'])
                                    <a class="h2 text-primary font-secondary"
                                        href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                                @else
                                    <span class="text-white h3 font-secondary nasted">{{ $breadcrumb['name'] }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- blogs -->
    <section class="section">
        <div class="container">
            @if ($posts->isEmpty())
                <p>No posts found in this category.</p>
            @else
                <div class="row">
                    @foreach ($posts as $post)
                        <!-- blog post -->
                        <article class="col-lg-4 col-sm-6 mb-5">
                            <div
                                class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                                <img class="card-img-top rounded-0" src="{{ Storage::url($post->thumbnail) }}"
                                    alt="Post thumb">
                                <div class="card-body">
                                    <!-- post meta -->
                                    <ul class="list-inline mb-3">
                                        <!-- post date -->
                                        <li class="list-inline-item mr-3 ml-0">{{ $post->created_at->format('F j, Y') }}
                                        </li>
                                        <!-- author -->
                                        <li class="list-inline-item mr-3 ml-0">{{ $post->author->name }}</li>
                                    </ul>
                                    <a href="blog-single.html">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                    </a>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 50) }}</p>
                                    <a href="{{ route('publikasi.detail', ['category' => strToLower($breadcrumb['name']), 'slug' => $post->slug]) }}"
                                        class="btn btn-primary btn-sm">read more</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!-- /blogs -->
@stop
