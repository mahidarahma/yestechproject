@extends('template.blog')
@section('header')
<header class="position-fixed w-100 transition text-white">
    <div class="d-flex p-4 container">
        <a href="/yes-blog" class="d-flex text-decoration-none">

            <h3 class="my-auto text-white">SCARWASH</h3>
        </a>

        <!-- RIGHT MENU -->
        <div class="ms-auto d-lg-flex d-none gap-2">
            <a href="{{ route('blog.index') }}" class="btn text-white">
                Blog
            </a>
            <a href="{{ route('location.index') }}" class="btn text-white">
                Location
            </a>
            <a href="{{ route('gallery.index') }}" class="btn text-white">
                Gallery
            </a>
            <a href="{{ route('price.index') }}" class="btn text-white">
                Price List
            </a>
            <a href="{{route('login.index')}}" class="btn text-white">
                Login
                <hr />
            </a>
        </div>

        <!-- RIGHT MOBILE MENU ICON -->
        <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
        <div onclick="showMenu()" class="pointer ms-auto">
            X
        </div>

        <!-- MENU -->
        <a href="/yes-blog/location" class="btn text-white">
            Location
            <hr />
        </a>
        <a href="/yes-blog/blog" class="btn text-white">
            Blog
            <hr />
        </a>
        <div>
            <a href="/yes-blog/price" class="btn btn-light w-100">PRICE LIST</a>
        </div>
        <a href="{{route('login.index')}}" class="btn text-white">
            Login
            <hr />
        </a>
    </div>
</header>
@endsection

@section('section')
    <!-- SECTION TYPE 1 : HERO -->
    <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img"
                        src="{{asset('yesblog')}}/header.webp">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5">Pilihan Terbaik untuk Perawatan Barang Kesayangan Anda</h1>
                        <div>
                            Kami menangani perawatan sepatu tas, topi, dan dompet. Kami melakukan perawatan secara profesional, dengan teknik khusus, serta menggunakan alat dan bahan premium untuk melakukan perawatan.
                            Dapatkan informasi terbaru mengenai Shoes and Care dengan memasukkan email anda.
                        </div>
                        <div>
                            <form class="d-flex gap-2">
                                <input class="app-input flex-grow-1" placeholder="Enter your email">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <b>Kami Telah Melayani Pelanggan Hampir ke Seluruh Kota di Indonesia</b>
                        <div class="row gap-4 mt-4">
                            <div class="col">
                                <h4>20 kota</h4>
                                <p>Tersedia hampir diseluruh Indonesia</p>
                            </div>
                            <div class="col">
                                <h4>700.000+</h4>
                                <p>Pasang sepatu telah ditangani</p>
                            </div>
                            <div class="col">
                                <h4>300.000+</h4>
                                <p>Pelanggan puas dengan layanan Kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Promo Terbaik untuk Anda</h1>
                <a class="btn text-white ms-auto">More ></a>
            </div>
            <div class="row mt-4 gy-4">


                    @foreach ($posts as $post)
                    <div class="col-lg-3 col-12 rounded-3">
                        @if ($post->banner_image)
                        <div>
                        <img class="w-100 object-cover" src="{{ asset('uploads/' . $post->banner_image) }}" style="height:200px; object-fit:contain;">
                        </div>
                        @endif
                        <div class="p-4 bg-secondary d-grid gap-4" style="height: 280px;">
                            <b style="font-size: 20">{{$post->title}}</b>
                            <p>Posted by {{$post->user->name}} on {{$post->created_at}}</p>
                            <a href="{{ route('blog.show',['slug'=>$post->slug])}}">
                            <a class="btn btn-light" href="{{ route('blog.show',['slug'=>$post->slug])}}">LIHAT PROMO</a>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center py-2">
                        <a class="btn btn-light">READ MORE</a>
                    </div>
                </div>
            </div>
    </section>

    <!-- SECTION TYPE 3 -->
    <section class="container py-5 container d-grid gap-4">
        <div class="row">
            <div class="col">
                <h2>Bagaimana Kami Melakukan Perawatan untuk Barang Kesayangan Anda</h2>
            </div>
            <div class="col">
                Kami merupakan jasa perawatan premium sepatu pertama di Indonesia berbasis media sosial
                yang sampai saat sudah memiliki lebih dari 65 workshop di 20 kota di Indonesia.
            </div>
        </div>

        <div>
            <img style="height:400px;" class="w-100 object-fit-cover rounded-3"
                src="{{asset('yesblog')}}/bg-service.webp">
        </div>

        <div class="row">
            <div class="col-lg-3">
                <h3>Expert Technician</h3>
                <p>Berpengalaman lebih dari 8 tahun di industri cuci sepatu</p>
            </div>

            <div class="col-lg-3">
                <h3>Free pick up delivery</h3>
                <p>Pickup delivery gratis dengan jarak maksimal 5 km</p>
            </div>

            <div class="col-lg-3">
                <h3>Customer service</h3>
                <p>Dukungan customer service yang responsif

                </p>
            </div>

            <div class="col-lg-3">
                <h3>Garansi layanan</h3>
                <p>Jaminan garansi apabila terjadi kerusakan selama layanan</p>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 4 -->
    <section class="container py-5">
        <div class="text-center">
            <h1>Layanan kami</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem fuga molestiae distinctio eius
                quibusdam mollitia atque accusantium aliquam quam porro consequuntur adipisci, reiciendis culpa dolorum!
                Deserunt rerum ipsam voluptatum ut.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/fastclean.webp">
                <div class="py-2 d-grid gap-2">
                    <h2>Fast cleaning</h2>
                    <p>Fast cleaning merupakan pencucian instan pada bagian upper dan midsole yang bisa di tunggu selama 15-30 menit.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/deepclean.webp">
                <div class="py-2 d-grid gap-2">
                    <h2>Deep cleaning</h2>
                    <p>Perawatan pembersihan sepatu secara detail dan menyeluruh pada seluruh bagian.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/treatment.webp">
                <div class="py-2 d-grid gap-2">
                    <h2>Premium treatment</h2>
                    <p>Perawatan yang ditujukan untuk material-material khusus dalam pengerjaanya serta menggunakan bahan khusus dalam setiap produknya.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/unyellowing.webp">
                <div class="py-2 d-grid gap-2">
                    <h2>Unyellowing</h2>
                    <p>Perawatan pada bagian midsole yang telah menguning untuk menghilangkan warna kuning menjadi semula tanpa harus direpaint.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/repaint.webp">
                <div class="py-2 d-grid gap-2">
                    <h2>Repaint</h2>
                    <p>Perawatan restorasi warna dengan penggunaan cat khusus yang ditujukan untuk mengembalikan warna awal sepatu seperti semula.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/repair.webp">
                <div class="py-2 d-grid gap-2">
                    <h2>Repair</h2>
                    <p>Perawatan restorasi pada sepatu yang rusak atau terbuka untuk dikembalikan seperti semula.</p>
                </div>
            </div>
        </div>

        <div class="text-center py-2">
            <a class="btn btn-dark">READ MORE</a>
        </div>
    </section>







    <section class="about-us-section" id="about-section">
        <div class="container">
            <h1 class="text-about-us my-3">Tentang Kami</h1>
            <div class="row  justify-content-between">
                <div class="col-md-6  about-left">
                    <img class="img-fluid bg-radius" src="https://shoesandcare.com/../assets/front/img/icon-founder.jpg" alt="founder shoes and care" width="568px" height="398px">
                </div>
                <div class="col-md-6 secondary-text-color about-right">
                    <h1 class="secondary-text-color">Shoes and Care</h1>

                    <div>
                    <p class="secondary-text-color" style="text-align: justify;margin-bottom:2rem;">
                        merupakan jasa perawatan premium sepatu yang pertama di Yogyakarta, dan jasa perawatan premium sepatu pertama di Indonesia yang berbasis media sosial. Untuk melayani pelanggan, saat ini Shoes and Care sudah memiliki 70 workshop di 20 kota di Indonesia.

                        Berdiri di Yogyakarta, Shoes and Care mulai memberikan perawatan sepatu sejak 12 Oktober 2013.
                    </p>
                        <a href="https://shoesandcare.com/about-shoes-and-care" rel="noreferrer" target="_blank" class="btn-new">Pelajari Lebih Lanjut<i style="font-size:12px;margin-left:20px;" class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>








    <!-- SECTION TYPE 5 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>OUR LOCATION</h1>
            <p>Find us at here</p>
        </div>
        <div class="container">
            <div>
                <iframe class="rounded-3 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.962455232647!2d112.7355958220893!3d-7.24511289276129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93fc001bc5d%3A0x110e38d8a6c23fbe!2sMonumen%20Tugu%20Pahlawan%20dan%20Museum%20Sepuluh%20Nopember%20Surabaya!5e0!3m2!1sen!2sid!4v1689251639326!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 6 : GALLERY -->
    <section class="py-5 bg-black text-white">
        <div class="d-flex container">
            <h1>Gallery</h1>
            <a class="btn text-white ms-auto my-auto">More ></a>
        </div>

        <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/gallery1.jpeg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{asset('yesblog')}}/gallery2.jpeg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{asset('yesblog')}}/gallery3.jpeg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{asset('yesblog')}}/gallery4.jpeg">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="{{asset('yesblog')}}/gallery5.jpeg">
        </div>

        <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="{{asset('yesblog')}}/gallery6.jpeg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{asset('yesblog')}}/gallery7.jpeg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{asset('yesblog')}}/gallery8.jpeg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{asset('yesblog')}}/gallery9.jpeg">
            <img style="height:300px;" class="col-2 object-fit-cover"
                src="{{asset('yesblog')}}/gallery10.jpeg">
        </div>
    </section>

@endsection
