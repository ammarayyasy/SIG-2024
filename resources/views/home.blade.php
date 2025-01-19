@extends('layouts.main')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat datang di Peta Tematik</div>
            <div style="margin-bottom: 10rem" class="masthead-heading text-uppercase">YOGYAKARTA</div>
            {{-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> --}}
        </div>
    </header>

    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Sejarah</h2>
                <h3 class="section-subheading text-muted">Garis besar sejarah provinsi Yogyakarta.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/mataram.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>800 - 1000 M</h4>
                            <h4 class="subheading">Masa Kerajaan Mataram</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Yogyakarta memiliki akar sejarah yang kuat sejak era Kerajaan Mataram Kuno pada abad ke-8 hingga ke-10, yang menjadi pusat perkembangan Hindu-Buddha di Jawa. Bukti kejayaan masa ini terlihat dari peninggalan bersejarah seperti Candi Borobudur dan Candi Prambanan.
                            </p>
                    </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/perjanjian.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Februari 1755</h4>
                            <h4 class="subheading">Perjanjian Giyanti</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Melalui Perjanjian Giyanti, Kesultanan Mataram dibagi menjadi dua, yaitu Kesultanan Yogyakarta yang dipimpin oleh Sultan Hamengkubuwono I dan Kasunanan Surakarta. Peristiwa ini menjadi titik awal berdirinya Kesultanan Yogyakarta sebagai entitas politik yang berdaulat.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/dukungan.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Februari 1945</h4>
                            <h4 class="subheading">Dukungan terhadap Kemerdekaan Indonesia</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Setelah Indonesia memproklamasikan kemerdekaannya, Sultan Hamengkubuwono IX dan Sri Paku Alam VIII mendukung penuh Republik Indonesia. Yogyakarta kemudian menjadi bagian integral dari NKRI dan mendapat pengakuan sebagai daerah istimewa.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/merdeka.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1950</h4>
                            <h4 class="subheading">Penetapan Daerah Istimewa Yogyakarta</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Yogyakarta secara resmi ditetapkan sebagai Daerah Istimewa pada tahun 1950 dengan pengakuan atas peran Kesultanan Yogyakarta dan Kadipaten Pakualaman dalam pemerintahan daerah. Status ini kemudian diperkuat dengan Undang-Undang Nomor 13 Tahun 2012.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Present
                            <br />
                            past
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/ammar.jpeg') }}" alt="..." />
                        <h4>M. Ammar Ayyasy</h4>
                        <p class="text-muted">0110221082</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/zahra.jpg') }}" alt="..." />
                        <h4>Adzhimatinur Az Zahra</h4>
                        <p class="text-muted">0110221075</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/miqdad.jpeg') }}" alt="..." />
                        <h4>Muhammad Miqdad</h4>
                        <p class="text-muted">0110221256</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/abi.jpg') }}" alt="..." />
                        <h4>Restu Abie Sucipto</h4>
                        <p class="text-muted">0110221093</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
@endsection