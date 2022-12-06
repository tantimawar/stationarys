<?php

echo"<!-- ======= Header ======= -->
  <header id='header' class='fixed-top d-flex align-items-center'>
    <div class='container d-flex align-items-center'>

      <div class='logo me-auto'>
        <h1><a href='index.php'>Stationarys</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href='index.html'><img src='assets/img/logo.png' alt='' class='img-fluid'></a>-->
      </div>

      <nav id='navbar' class='navbar order-last order-lg-0'>
        <ul>
          <li><a class='nav-link scrollto active' href='#hero'>Dashboard</a></li>
          <li><a class='nav-link scrollto' href='#portfolio'>Kategori</a></li>
          <li><a class='nav-link scrollto' href='./keranjang.html'>Keranjang</a></li>
          <li class='dropdown'><a href='#'><span>Pesanan</span> <i class='bi bi-chevron-down'></i></a>
            <ul>
              <li><a href'#'>Drop Down</a></li>
            </ul>
          <li><a class='nav-link scrollto' href='#contact'>Akun</a></li>
        </ul>
        <i class='bi bi-list mobile-nav-toggle'></i>
      </nav><!-- .navbar -->

      <!-- ======= Search Form ======= -->
      <div class='search-box'>
        <input type='text' placeholder='Mau Cari Apa...?'>
        <div class='search-icon'>
          <i class='fa-solid fa-magnifying-glass'></i>
        </div>
        <div class='cancel-icon'>
          <i class='fa-solid fa-circle-xmark'></i>
        </div>
        <div class='search-data'>

        </div>
      </div>
      <script>
        const searchBox = document.querySelector('.search-box');
        const searchBtn = document.querySelector('.search-icon');
        const cancelBtn = document.querySelector('.cancel-icon');
        const searchInput = document.querySelector('.input');
        const searchData = document.querySelector('.search-data');
        searchBtn.onclick=()=>{
          searchBox.classList.add('active');
        searchBtn.classList.add('active');
        searchInput.classList.add('active');
        cancelBtn.classList.add('active');
        searchInput.focus();
        if(searchInput.value != ''){
          var values = searchInput.value;
          searchData.classList.remove('active');
          searchData.innerHTML = 'You just typed ' + '<span style='font-weight: 500;'>' + values + '</span>';
        }else{
          searchData.textContent = '';
        }
      }
      cancelBtn.onclick =()=>{
        searchBox.classList.remove('active');
        searchBtn.classList.remove('active');
        searchInput.classList.remove('active');
        cancelBtn.classList.remove('active');
        searchData.classList.toggle('active');
        searchInput.value = '';
      }
      </script>
      <!-- End Search Form -->
    

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id='hero' class='d-flex flex-column justify-content-center align-items-center'>
    <div class='container text-center text-md-left' data-aos='fade-up'>
    </div>
  </section><!-- End Hero -->

  <main id='main'>

    <!-- ======= What We Do Section ======= -->
    <section id='what-we-do' class='what-we-do'>
      <div class='container'>
        <div class='section-title'>
          <h2 class='text-center'>Top Produk</h2>
        </div>
       
        <div class='row what-we-do-container'>
        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/summer.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Notebook Summer Breze</a></h4>
              <p>Rp. 18.000</p>
            </div>
          </div>
        </div>
      
        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/alat.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Alat Lukis set Lengkap</a></h4>
              <p>Rp. 45.000</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/brushpen.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Brushpen set 10 pcs</a></h4>
              <p>Rp. 12.000</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/penghapus.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Penghapus Hitam Poloz</a></h4>
              <p>Rp. 2.000</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/ruler.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Penggaris dijamin Bahagia</a></h4>
              <p>Rp. 7.000</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/hijau.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Pensil motif hijau kece</a></h4>
              <p>Rp. 13.000</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/buah.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Penghapus Buah Segar</a></h4>
              <p>Rp. 5.000</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-6 what-we-do-item filter-buku wow fadeInUp'>
          <div class='what-we-do-wrap'>
            <figure>
              <img src='assets/img/portfolio/cathy.jpg' class='img-fluid' alt=''>
            </figure>

            <div class='what-we-do-info'>
              <h4><a href='./detail_buku_1.html'>Notebook Cathy comel</a></h4>
              <p>Rp. 14.000</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id='portfolio' class='portfolio'>
      <div class='container'>

        <div class='section-title'>
          <h2 class='text-center'>Kategori</h2>
        </div>

        <div class='row'>
          <div class='col-lg-12'>
            <ul id='portfolio-flters'>
              <li data-filter='.filter-buku'>Buku</li>
              <li data-filter='.filter-pensil'>Pensil</li>
              <li data-filter='.filter-bulpen'>Bulpen</li>
              <li data-filter='.filter-penghapus'>Penghapus</li>
              <li data-filter='.filter-alat_lukis'>Alat Lukis</li>
              <li data-filter='.filter-notebook'>Notebook</li>
              <li data-filter='.filter-penggaris'>Penggaris</li>
              <li data-filter='.filter-jangkabusur'>Jangka Busur</li>
              <li data-filter='.filter-map'>Map</li>
              <li data-filter='.filter-origami'>Origami</li>
            </ul>
          </div>
        </div>

        <div class='row portfolio-container'>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/basah.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_buku_1.html'>Buku+Blinder anti basah</a></h4>
                <p>Rp. 18.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp' data-wow-delay='0.1s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/buku_1.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='detail_buku_1.html'>Buku+Binder+Pelindungmu</a></h4>
                <p>18.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/buku_2.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku Motif Berbentuk bentuk</a></h4>
                <p>Rp 7.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/kuning.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku+Quotes Hidupmu~</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp' data-wow-delay='0.1s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/animal.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku Motif Hewan</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/buku_buah.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku Motif Buah Sueger</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/buku_3.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku Motif Pastel Glamour~</a></h4>
                <p>Rp 7.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp' data-wow-delay='0.1s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/tipis.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku Motif Bunga</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/dott4.jpg' class='img-fluid' alt='>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku Motif Dott Comell~</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-buku wow fadeInUp' data-wow-delay='0.1s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/hewan_buah.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Buku Motif Hewan & Buah</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Buku-->

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_1.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Pensil Mewah+Gemuk</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_2.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='./detail_produk/detail_buku_1.html'>Pensil Glamour Tralala~</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_3.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil Warna Abu-abu 1 set (5pcs)</a></h4>
                <p>Rp 11.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_4.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil Warna Pastel 1 set (7 pcs)</a></h4>
                <p>Rp 12.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_5.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil Motif Black+Gold~</a></h4>
                <p>Rp 13.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_6.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil + Menghapus Dosamu</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_7.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil Setinggi Angan-anganmu~</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_8.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil Motif Gold+Kece</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_9.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil Hitam Maniz~</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-pensil wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/pensil_10.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Pensil Muewah no debat!!!</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Pensil-->

          <div class='col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp' data-wow-delay='0.2s'>
            <div class='portfolio-wrap'>
              <figure>
                <img src='assets/img/portfolio/bulpen_1.jpg' class='img-fluid' alt=''>
              </figure>

              <div class='portfolio-info'>
                <h4><a href='portfolio-details.html'>Bulpen Mermaid Syalalala~~~</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_2.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Glamour Gold</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Mahkota Aduhaii~</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Kiyutt Comel</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Luxury</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Berisi Harta Karun</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen yang Menyihirmu~</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Polozzzzz</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Motif Bunga Maniz</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bulpen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/bulpen_10.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bulpen Memakai Mahkota</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Bulpen-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_1.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Buah Sueger~</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_2.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Puanjang</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Mono Pastel</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus buah</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Lucuu</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Panjang dijamin Puaz</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Wucuu</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Cutter</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Motif Hewan lucuuu</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penghapus wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/hapus_10.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penghapus Hitam Poloz</a></h4>
                <p>Rp 2.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Penghapus-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_1.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kuas Tebel seperti alis crushmu</a></h4>
                <p>Rp 10.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/alat.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Alat Lukis 1 set</a></h4>
                <p>Rp 45.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kuas Warna Hitam Menggoda</a></h4>
                <p>Rp 12.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kanvas 30x30 cm</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Cat Acrylyc Buanyak</a></h4>
                <p>Rp 55.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Cat Acrylyc isi 20</a></h4>
                <p>Rp 34.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Pisau Palet</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Palet transparan bening</a></h4>
                <p>Rp 14.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat_lukis wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lukis_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lukis Ukuran A5</a></h4>
                <p>Rp 7.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Alat Lukis-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_1.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_2.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-notebook wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/notebook_10.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Notebook</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Notebook-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Hello Lucu</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_2.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Gold Mewah</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Besi</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Hitam Bagus</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris abu_abu Faber Castel</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Luxury</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Butterfly</a></h4>
                <p>Rp 2.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris 1 set</a></h4>
                <p>Rp 8.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Hitam Manis</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-penggaris wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ruler_10.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penggaris Gold Debest</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Penggaris-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_1.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka Gold</a></h4>
                <p>Rp 7.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_2.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka Hitam Manis</a></h4>
                <p>Rp 7.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka + Busur Joyko</a></h4>
                <p>Rp 9.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka Biru</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka Deli Putih</a></h4>
                <p>Rp 7.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka JOyko MS-55</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka Kecil Imut</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Jangka Maskulin</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Busur Joyko</a></h4>
                <p>Rp 4.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jangkabusur wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/jangka_10.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Busur+Penggaris</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Jangka Busur-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_1.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Inglis Crock</a></h4>
                <p>Rp 10.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_2.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Marketing Lab</a></h4>
                <p>Rp 14.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Miacomet Preserve</a></h4>
                <p>Rp 12.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Alexandre Scherer</a></h4>
                <p>Rp 17.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map RSM</a></h4>
                <p>Rp 13.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Waldman</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map IVY</a></h4>
                <p>Rp 15.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Soveno</a></h4>
                <p>Rp 14.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Hitam Biru</a></h4>
                <p>Rp 12.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-map wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/map_10.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Map Papeles De Cine</a></h4>
                <p>Rp 16.000</p>
              </div>
            </div>
          </div>

          <!--End Kategori Map Berkas-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_1.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Forte</a></h4>
                <p>Rp 3.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_2.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Deli</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_3.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Ina Creative</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Eselon</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_5.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Double facebook</a></h4>
                <p>Rp 8.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_6.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Motif Dino</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_7.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Motif Hewan</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_8.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat All Motif</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_9.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Motif Pastel</a></h4>
                <p>Rp 6.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-origami wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/lipat_10.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kertas Lipat Motif Cartoon</a></h4>
                <p>Rp 5.000</p>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="Ban" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Lumia</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>"";
?>