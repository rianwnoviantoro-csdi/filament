@extends('layouts.default')
@section('content')
    @php
        // Get the current URL path
        $currentPath = request()->path();
        $segments = explode('/', $currentPath);

        // Define the breadcrumb map based on URL segments
        $breadcrumbMap = [
            'layanan' => 'Layanan',
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
        data-background="{{ Storage::url(resolve(App\Settings\GeneralSettings::class)->banner) }}">
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

    <!-- blog details -->
    <section class="section-sm bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    @if ($category === 'tarif' && $ServiceSettings->pricing_banner)
                        <img src="{{ Storage::url($ServiceSettings->pricing_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'rantai-pasok' && $ServiceSettings->supply_chain_banner)
                        <img src="{{ Storage::url($ServiceSettings->supply_chain_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'pembayaran' && $ServiceSettings->payment_banner)
                        <img src="{{ Storage::url($ServiceSettings->payment_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @endif
                </div>
                <!-- border -->
                <div class="col-12 mt-4">
                    <div class="border-bottom border-primary"></div>
                </div>
                <!-- blog contect -->
                <div class="col-12 mb-5">
                    @if ($category === 'tarif' && $ServiceSettings->pricing_description)
                        {!! $ServiceSettings->pricing_description !!}
                    @elseif($category === 'rantai-pasok' && $ServiceSettings->supply_chain_description)
                        {!! $ServiceSettings->supply_chain_description !!}
                    @elseif($category === 'pembayaran' && $ServiceSettings->payment_description)
                        {!! $ServiceSettings->payment_description !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- /blog details -->
@stop
