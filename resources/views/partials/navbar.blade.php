<!-- HEADER -->
<div class="header d-flex justify-content-between">
    <div class="menu">
        <a href="#navbar" class="text-white p-4"
            data-bs-toggle="offcanvas">
            <img src="{{ URL::asset('icon/navbar/Hamburger.svg'); }}" alt="">
            Menu
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1"
            id="navbar">
            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close"
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav">
                    <div class="nav-link">
                        <img src="{{ URL::asset('icon/navbar/Profil.svg'); }}"
                            width="25px" class="me-2">
                        <a href="/profil">Profil Desa</a>
                    </div>
                    <div class="nav-link">
                        <img src="{{ URL::asset('icon/navbar/Struktur.svg'); }}"
                            width="25px" class="me-2">
                        <a href="/struktur">Struktur Desa</a>
                    </div>
                    <div class="nav-link">
                        <img src="{{ URL::asset('icon/navbar/Program.svg'); }}"
                            width="25px" class="me-2">
                        <a href="/program">Program</a>
                    </div>
                    <div class="nav-link">
                        <img src="{{ URL::asset('icon/navbar/Berita.svg'); }}"
                            width="25px" class="me-2">
                        <a href="/berita">Berita</a>
                    </div>
                    <div class="nav-link">
                        <img src="{{ URL::asset('icon/navbar/Galeri.svg'); }}"
                            width="25px" class="me-2">
                        <a href="/galeri">Galeri</a>
                    </div>
                    <div class="nav-link">
                        <img src="{{ URL::asset('icon/navbar/Layanan.svg'); }}"
                            width="25px" class="me-2">
                        <a href="/layanan">Layanan</a>
                    </div>
                    <div class="nav-link">
                        <img src="{{ URL::asset('icon/navbar/Kontak.svg'); }}"
                            width="25px" class="me-2">
                        <a href="/kontak">Kontak</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="logo bg-white p-3">
        <a href="/"><img src="{{ URL::asset('img/logo-header.png'); }}" alt="Logo"></a>
    </div>
</div>
<!-- END HEADER -->