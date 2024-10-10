    <!-- header -->
    <header class="fixed-top header">
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand" href="{{ route('home') }}"><img class="img-fluid"
                            src="{{ Storage::url($generalSettings->brand_logo) }}" alt="logo">
                        {{ $generalSettings->brand_name }}
                    </a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            {{-- Pelanggan --}}
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pelanggan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href="{{ route('pelanggan.index', ['category' => 'air-tangki']) }}">Air
                                            Tangki</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('pelanggan.index', ['category' => 'pasang-baru']) }}">Pasang
                                            Baru</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('pelanggan.index', ['category' => 'ganti-name']) }}">Ganti
                                            Nama</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('pelanggan.index', ['category' => 'stop-kran']) }}">Stop
                                            Kran</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('pelanggan.index', ['category' => 'ganti-pindah-meter']) }}">Ganti/Pindah
                                            Meter</a></li>
                                </ul>
                            </li>
                            {{-- Layanan --}}
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Layanan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href="{{ route('layanan.index', ['category' => 'tarif']) }}">Tarif</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('layanan.index', ['category' => 'rantai-pasok']) }}">Rantai
                                            Pasok</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('layanan.index', ['category' => 'pembayaran']) }}">Pembayaran</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Publikasi --}}
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Publikasi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href="{{ route('publikasi.index', ['category' => 'berita']) }}">Berita</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('publikasi.index', ['category' => 'edukasi']) }}">Edukasi</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('publikasi.index', ['category' => 'agenda']) }}">Agenda</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Info --}}
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Info
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href="{{ route('info.index', ['category' => 'visi-misi']) }}">Visi Misi</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('info.index', ['category' => 'sejarah']) }}">Sejarah</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('info.index', ['category' => 'pengantar']) }}">Pengantar</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('info.index', ['category' => 'struktur-organisasi']) }}">Struktur
                                            Organisasi</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
