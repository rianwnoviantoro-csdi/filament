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
                                    <span class="text-white h3 font-secondary nasted">Blog detail</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- blog details -->
    <section class="section-sm bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <img src="{{ Storage::url($post[0]->thumbnail) }}" alt="{{ $post[0]->slug }}" class="img-fluid w-100">
                </div>
                <div class="col-12">
                    <ul class="list-inline">
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span
                                class="font-weight-bold mr-2">Post:</span>{{ $post[0]->author->name }}</li>
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">
                            {{ $post[0]->created_at->format('F j, Y') }}</li>
                    </ul>
                </div>
                <!-- border -->
                <div class="col-12 mt-4">
                    <div class="border-bottom border-primary"></div>
                </div>
                <!-- blog contect -->
                <div class="col-12 mb-5">
                    {!! $post[0]->content !!}
                </div>
            </div>
        </div>
    </section>
    <!-- /blog details -->
@stop
