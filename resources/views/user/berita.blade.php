@extends('user.app')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Berita</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">
                        @foreach ($berita as $b)
                            <article class="entry">

                                <div class="entry-img">

                                    <img src="{{ asset('storage/' . $b->foto) }}" alt="" class="img-fluid">
                                </div>
                                <!-- Judul -->
                                <h2 class="entry-title">
                                    <a href="#">{{ $b->judul }}</a>
                                </h2>
                                <!-- Author & tanggal -->
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="#">{{ $b->author }}</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="#">{{ $b->tanggal }}</time></a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                href="blog-single.html">12 Comments</a></li>
                                    </ul>
                                </div>
                                <!-- Isi -->
                                <div class="entry-content">
                                    <p>
                                        {{ substr($b->isi, 0, 150) }}...
                                    </p>
                                    <div class="read-more">
                                        <a href="{{ route('user.berita.detail', ['id' => $b->id]) }}">Baca Selengkapnya</a>
                                    </div>

                                </div>

                            </article><!-- End blog entry -->
                        @endforeach
                        <div class="blog-pagination">
                            {{ $berita->Links() }}
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            @foreach ($kategoriberita as $kategori)
                                <div class="sidebar-item categories">
                                    <ul>
                                        <li><a href="{{ route('user.kategori', ['id' => $kategori->id]) }}">{{ $kategori->nama }}
                                                <span>({{ $kategori->jumlah }})</span></a></li>
                                    </ul>
                                </div>
                                <!-- End sidebar categories-->
                            @endforeach
                        </div>
                        <!-- End sidebar -->
                    </div>
                    <!-- End blog sidebar -->
                </div>
            </div>
        </section>
        <!-- End Blog Section -->
    </main>
    <!-- End #main -->
@endsection
