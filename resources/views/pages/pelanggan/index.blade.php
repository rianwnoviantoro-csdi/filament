@extends('layouts.default')
@section('content')
    @php
        // Get the current URL path
        $currentPath = request()->path();
        $segments = explode('/', $currentPath);

        // Define the breadcrumb map based on URL segments
        $breadcrumbMap = [
            'pelanggan' => 'Pelanggan',
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
                    @if ($category === 'air-tangki' && $CustomerSettings->water_tank_banner)
                        <img src="{{ Storage::url($CustomerSettings->water_tank_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'pasang-baru' && $CustomerSettings->new_installation_banner)
                        <img src="{{ Storage::url($CustomerSettings->new_installation_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'ganti-nama' && $CustomerSettings->change_name_banner)
                        <img src="{{ Storage::url($CustomerSettings->change_name_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'stop-kran' && $CustomerSettings->stop_the_tap_banner)
                        <img src="{{ Storage::url($CustomerSettings->stop_the_tap_banner) }}" alt="{{ $category }}"
                            class="img-fluid w-100">
                    @elseif($category === 'ganti-pindah-meter' && $CustomerSettings->move_customer_meters_banner)
                        <img src="{{ Storage::url($CustomerSettings->move_customer_meters_banner) }}"
                            alt="{{ $category }}" class="img-fluid w-100">
                    @endif
                </div>
                <!-- border -->
                <div class="col-12 mt-4">
                    <div class="border-bottom border-primary"></div>
                </div>
                <!-- blog contect -->
                <div class="col-12 mb-5">
                    @if ($category === 'air-tangki' && $CustomerSettings->water_tank_description)
                        {!! $CustomerSettings->water_tank_description !!}
                    @elseif($category === 'pasang-baru' && $CustomerSettings->new_installation_description)
                        {!! $CustomerSettings->new_installation_description !!}
                    @elseif($category === 'ganti-nama' && $CustomerSettings->change_name_description)
                        {!! $CustomerSettings->change_name_description !!}
                    @elseif($category === 'ganti-nama' && $CustomerSettings->payment_description)
                        {!! $CustomerSettings->payment_description !!}
                    @elseif($category === 'stop-kran' && $CustomerSettings->stop_the_tap_description)
                        {!! $CustomerSettings->stop_the_tap_description !!}
                    @elseif($category === 'ganti-pindah-meter' && $CustomerSettings->move_customer_meters_description)
                        {!! $CustomerSettings->move_customer_meters_description !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- /blog details -->
@stop
