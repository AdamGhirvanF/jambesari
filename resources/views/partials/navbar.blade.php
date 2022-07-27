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
                    <div class="nav-link pb-2">
                        <img src="{{ URL::asset('icon/navbar/Profil.svg'); }}"
                            width="18px" class="me-2">
                        <a href="/profil.html">Profil Desa</a>
                    </div>
                    <div class="nav-link pb-2">
                        <img src="{{ URL::asset('icon/navbar/Struktur.svg'); }}"
                            width="18px" class="me-2">
                        <a href="/struktur.html">Struktur Desa</a>
                    </div>
                    <div class="nav-link pb-2">
                        <img src="{{ URL::asset('icon/navbar/Program.svg'); }}"
                            width="18px" class="me-2">
                        <a href="/program.html">Program</a>
                    </div>
                    <div class="nav-link pb-2">
                        <img src="{{ URL::asset('icon/navbar/Berita.svg'); }}"
                            width="18px" class="me-2">
                        <a href="/berita.html">Berita</a>
                    </div>
                    <div class="nav-link pb-2">
                        <img src="{{ URL::asset('icon/navbar/Galeri.svg'); }}"
                            width="18px" class="me-2">
                        <a href="/galeri.html">Galeri</a>
                    </div>
                    <div class="nav-link pb-2">
                        <img src="{{ URL::asset('icon/navbar/Layanan.svg'); }}"
                            width="18px" class="me-2">
                        <a href="/layanan.html">Layanan</a>
                    </div>
                    <div class="nav-link pb-2">
                        <img src="{{ URL::asset('icon/navbar/Kontak.svg'); }}"
                            width="18px" class="me-2">
                        <a href="/kontak.html">Kontak</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="logo bg-white p-3">
        <a href="#"><img src="{{ URL::asset('img/logo-header.png'); }}" alt="Logo"></a>
    </div>
</div>
<!-- END HEADER -->