@extends('user.app')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Tentang</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">

                        <img src="{{ asset('user') }}/img/team/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h2>Latar Belakang</h2>
                        <p align="justify">
                            SMP Negeri 2 Pante Bidari, yang berdiri sejak 01 Januari 1910, memiliki warisan sejarah panjang
                            sebagai lembaga pendidikan di masyarakat. Awalnya didirikan sebagai sekolah khusus untuk satu
                            jenis kelamin, namun dengan meningkatnya minat dan kebutuhan masyarakat, sekolah ini berkembang
                            menjadi institusi yang menerima baik siswa perempuan maupun laki-laki. Dengan akreditasi B, SMP
                            Negeri 2 Pante Bidari menunjukkan komitmennya terhadap standar kualitas pendidikan, sementara
                            penggunaan panduan kurikulum SMP 2013 mencerminkan adaptasinya terhadap tuntutan pendidikan
                            nasional. Struktur organisasinya yang terdiri dari Kepala Sekolah, tenaga pengajar, dan staf
                            pendukung, bersama dengan operator yang mengelola aspek administratif, menunjukkan upaya
                            kolektif untuk memberikan lingkungan belajar yang optimal, Sekolah ini memiliki tujuan yaitu:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Mencapai 100% kelulusan dan memastikan peserta didik melanjutkan ke jenjang yang lebih tinggi.</li>
                            <li><i class="ri-check-double-line"></i> Berprestasi dalam berbagai lomba akademik dan non-akademik di tingkat Kecamatan, Kota/Kabupaten, dan Provinsi.</li>
                        </ul>
                        <h1>Sasaran Pengembangan</h1>
                        <p align="justify">
                            SMP Negeri 2 Pante Bidari Mengoptimalkan proses kegiatan belajar mengajar, karena ditunjang oleh peralatan
                            yang
                            memadai,kurikulum ( silabus ) yang mutahir dan tenaga pengajar yang kompeten
                        </p>
                        <h1>Visi:</h1>
                        <p align="justify">
                            Terwujudnya peserta didik yang religus, berkarakter, berprestasi dan peduli lingkungan sesuai profil pelajar pancasila.
                        </p>
                        <h1>Misi:</h1>
                        <ul class="list-unstyled">
                            <li>1.Membiasakan pelaksanaan ibadah secara baik dan benar</li>
                            <li>2.Menjadikan guru sebagai model pebelajaran yang menjadi contoh teladan bagi peserta  didik</li>
                            <li>3.Melaksanakan prose membelajaran yang aktif, kratif, mandiri, dan menyenangkan</li>
                            <li>4.Membudayakan 5s. senyum, salam, sapa, sopan dan santun sebagai bentuk budaya positif</li>
                            <li>5.Mewujudkan iklim sekolah yang aman dan nyaman</li>
                            <li>6.Menjalin kerjasama yang harmonis antar warga sekolah, lingkungan masyarakat, dan lembaga lain yang terkait</li>

                        </ul>
                        <h1>Pencapaian Sekolah:</h1>
                        <ul class="list-unstyled">
                            <li>1.BlaBlaBlaBla</li>
                            <li>2.BlaBlaBlaBla</li>
                            <li>3.BlaBlaBlaBla</li>
                            <li>4.BlaBlaBlaBla</li>
                            <li>5.BlaBlaBlaBla</li>
                            <li>6.BlaBlaBlaBla</li>
                            <li>7.BlaBlaBlaBla</li>
                            <li>8.BlaBlaBlaBla</li>
                            <li>9.BlaBlaBlaBla</li>
                            <li>10.BlaBlaBlaBla</li>
                            <li>11.BlaBlaBlaBla</li>
                            <li>12.BlaBlaBlaBla</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Our Hardowrking Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('user') }}/img/team/team-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('user') }}/img/team/team-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('user') }}/img/team/team-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('user') }}/img/team/team-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section --> --}}

        <!-- ======= Our Skills Section ======= -->
        {{-- <section id="skills" class="skills">
            <div class="container">

                <div class="section-title">
                    <h2>Our Skills</h2>
                    <p>Check our Our Skills</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Our Skills Section --> --}}

    </main><!-- End #main -->
@endsection
