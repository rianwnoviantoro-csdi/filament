@extends('layouts.default')
@section('content')
    @php
        // Get the current URL path
        $currentPath = request()->path();
        $segments = explode('/', $currentPath);

        // Define the breadcrumb map based on URL segments
        $breadcrumbMap = [
            'info' => 'Info',
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
    <section class="page-title-section overlay"
        data-background="{{ Storage::url(resolve(App\Settings\generalSettings::class)->banner) }}">
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
                                    <span
                                        class="text-white h3 font-secondary nasted">{{ str_replace('-', ' ', $breadcrumb['name']) }}</span>
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
                    @if ($category === 'visi-misi' && $generalSettings->vision_and_mission_banner)
                        <img src="{{ Storage::url($generalSettings->vision_and_mission_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'sejarah' && $generalSettings->history_banner)
                        <img src="{{ Storage::url($generalSettings->history_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'pengantar' && $generalSettings->introduction_banner)
                        <img src="{{ Storage::url($generalSettings->introduction_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'struktur-organisasi' && $generalSettings->organizational_structure_banner)
                        <img src="{{ Storage::url($generalSettings->organizational_structure_banner) }}"
                            alt="{{ $category }}" class="img-fluid w-100">
                    @endif
                </div>
                <!-- border -->
                <div class="col-12 mt-4">
                    <div class="border-bottom border-primary"></div>
                </div>
                <!-- blog contect -->
                <div class="col-12 mb-5">
                    @if ($category === 'visi-misi' && $generalSettings->vision_and_mission_description)
                        {!! $generalSettings->vision_and_mission_description !!}
                    @elseif($category === 'sejarah' && $generalSettings->history_description)
                        {!! $generalSettings->history_description !!}
                    @elseif($category === 'pengantar' && $generalSettings->introduction_description)
                        {!! $generalSettings->introduction_description !!}
                    @elseif($category === 'pengantar' && $generalSettings->payment_description)
                        {!! $generalSettings->payment_description !!}
                    @elseif($category === 'struktur-organisasi' && $generalSettings->organizational_structure_description)
                        {!! $generalSettings->organizational_structure_description !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- /blog details -->
@stop
