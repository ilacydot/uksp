<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Rujukan ke file CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>
<body>
    <!-- Konten HTML -->
 <!-- header section starts  -->

 <header>
 <div class="awal">
    <img src="{{ asset('image/smk.png') }}" alt="Gambar Kiri" />
  <p class="center-text">
    SMKN 1 Kota Bengkulu<br />UKS (Unit Kesehatan Sekolah)
  </p>
    <img src="{{ asset('image/uks.png') }}" alt="Gambar Kanan" />
</div>


<div id="menu-bar" class="fas fa-bars"></div>


      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#fungsiuks">Fungsi UKS</a>
        <a href="#strukturuks">Struktur UKS</a>
        <a href="#fasilitasuks">Fasilitas UKS</a>
        <a href="#contact">contact</a>
        <a href="#gallery">gallery</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>

      </div>

      <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <div class="login-options" style="display: none">
      <button id="signUpBtn" href="{{ asset('/public/register.html') }}">Sign Up</button>
        <button id="signInBtn" href="{{ asset('/public/login.html') }}" >Sign In</button>
      </div>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
      <h1 class="heading">
        <span>U</span>
        <span>K</span>
        <span>S</span>
      </h1>
      <div class="foto-container">
    <img src="{{ asset('image/pmr.png') }}" alt="Gambar Kiri" />
      </div>
    </section>

    <!-- home section ends -->

    <!-- uks section starts  -->

    <section class="book" id="fungsiuks">
  <h1 class="heading">
    <span>f</span>
    <span>u</span>
    <span>n</span>
    <span>g</span>
    <span>s</span>
    <span>i</span>
    <span class="space"></span>
    <span>u</span>
    <span>k</span>
    <span>s</span>
  </h1>

  <div class="row">
    <form class="form">
      <article>
        <p>
            <b>Pencegahan dan promosi kesehatan:</b>
            Mendorong perilaku sehat dan gaya hidup sehat serta kampanye vaksinasi.
    <br>
            <b>Pelayanan kesehatan dasar:</b>
            Menyediakan perawatan awal dan pemantauan kesehatan siswa.
    <br>
            <b>Pendidikan kesehatan:</b>
            Melakukan penyuluhan tentang kesehatan dan kebiasaan hidup sehat.
    <br>
            <b>Konseling dan dukungan emosional:</b>
            Memberikan bimbingan dan dukungan terkait kesehatan mental dan sosial siswa.
    <br>        
            <b>Pelatihan keterampilan hidup sehat:</b>
            Mengajarkan keterampilan untuk hidup sehat dan pengambilan keputusan bijak.
    <br>
            <b>Kerjasama dengan orang tua dan masyarakat:</b>
            Kolaborasi untuk mendukung kesehatan siswa.
    <br>
            <b>Keadaan darurat dan bencana:</b>
            Persiapan dan penanganan keadaan darurat dan bencanaa.
    <br>
            <b>Memonitor dan mengevaluasi program kesehatan:</b>
            Menilai efektivitas program dan tujuan kesehatan.
    <br>
            <b>Perawatan dan pemeliharaan sarana kesehatan:</b>
            Merawat fasilitas kesehatan sekolah.
    <br>
            <b>Dokumentasi dan pelaporan:</b>
            Merekam data dan menyusun laporan terkait kesehatan siswa dan kegiatan UKS.
        </p>
        <!-- Konten artikel lainnya -->
        </article>

    <footer>
        <p>&copy; 2023 PT.kita sehati. Hak Cipta Dilindungi.</p>
    </footer>

        </form>
      </div>
    </section>

    <!-- uks section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="strukturuks">
      <h1 class="heading">
        <span>s</span>
        <span>t</span>
        <span>r</span>
        <span>u</span>
        <span>k</span>
        <span>t</span>
        <span>u</span>
        <span>r</span>
        <span class="space"></span>
        <span>u</span>
        <span>k</span>
        <span>s</span>
      </h1>

      <div class="org-chart">
      <div class="level">
        <div class="position">
          Kepala Sekolah <br />
          <p>Dr. Hj. Evriza, M.Pd</p>
        </div>
      </div>

      <div class="level">
        <div class="position">
          Waka Kesiswaan <br />
          <p>Desi Sri Lusiawati, M.Pd</p>
        </div>
      </div>

      <div class="level">
        <div class="position">Dinas Kesehatan Provinsi</div>
        <div class="position">
          Pembina UKS <br />
          <p>Erlena Soelianti, S.Pd</p>
        </div>
        <div class="position">UPTD. Puskesmas Penurunan</div>
      </div>

      <div class="level">
        <div class="position">
          Perawat UKS <br />
          <p>Oktaviasari, S.Kep</p>
        </div>
        <div class="position">
          Pelatih PMR <br />
          <p>Andri Fabiani M, Amd</p>
        </div>
      </div>

      <div class="level">
        <div class="position">Anggota PMR</div>
      </div>

      <div class="level">
        <div class="position">Siswa</div>
      </div>
    </div>
    
    </section>

    <!-- packages section ends -->

    <!-- fslts section starts  -->

    <section class="services" id="fasilitasuks">  
      <h1 class="heading">
        <span>f</span>
        <span>a</span>
        <span>s</span>
        <span>i</span>
        <span>l</span>
        <span>i</span>
        <span>t</span>
        <span>a</span>
        <span>s</span>
        <span class="space"></span>
        <span>u</span>
        <span>k</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">

       <!-- Profile 1  -->
       <div class="profile-box">
              <div class="profile-header">
                <img src="/image/tensimeter.jpg" alt="Profile Picture 6">
                   <h2>Tensimeter</h2>
            </div>

          <div class="profile-data">
             <p>Tensimeter berguna untuk mengukur tekanan darah </p>
          </div>

      </div>
     </div>

        <div class="box">
    <!-- Profile 2 -->
    <a href="/obat.php" class="profile-link">
        <div class="profile-box">
            <div class="profile-header">
                <img src="/image/obat.jpg" alt="Profile Picture 2">
                <h2>Obat-obatan</h2>
            </div>

            <div class="profile-data">
                <p>Obat merupakan bahan yang sangat berpotensi bila digunakan dengan tepat karena obat dapat mencegah,
                    menyembuhkan penyakit atau mengatasi masalah kesehatan anda</p>
            </div>
        </div>
    </a>
</div>



     <div class="box">
            <!-- Profile 3 -->
          <div class="profile-box">
            <div class="profile-header">
              <img src="/image/ranjang.jpg" alt="Profile Picture 3">
                <h2>Ranjang tidur</h2>
          </div>

        <div class="profile-data">
          <p>Ranjang tidur berguna untuk orang-orang yang sedang sakit untuk beristirahat</p>
        </div>

      </div>
    </div>



     <div class="box">

              <!-- Profile 4 -->
            <div class="profile-box">
              <div class="profile-header">
                <img src="/image/pengukur.jpg" alt="Profile Picture 4">
                  <h2>Stature</h2>
            </div>

          <div class="profile-data">
           <p>Stature meter adalah alat pengukur tinggi badan</p>
          </div>

      </div>
     </div>

    <div class="box">

              <!-- Profile 5 -->
            <div class="profile-box">
              <div class="profile-header">
                <img src="/image/termometer.jpg" alt="Profile Picture 5">
                  <h2>Termometer</h2>
            </div>

          <div class="profile-data">
            <p>Termometer adalah alat pengukur suhu tubuh</p>
          </div>

      </div>
     </div>
     
     <div class="box">

      <!-- Profile 6 -->
      <div class="profile-box">
            <div class="profile-header">
              <img src="/image/timbangan.jpg" alt="Profile Picture 1">
                <h2>Timbangan</h2>
          </div>

        <div class="profile-data">
        <p>Timbangan badan berguna untuk mengukur berat badan</p>
        </div>
      
      </div>
        </div>

              

     <div class="box">

                <!-- Profile 7 -->
              <div class="profile-box">
                <div class="profile-header">
                  <img src="/image/dispenser.jpg" alt="Profile Picture 7">
                    <h2>Dispenser</h2>
            </div>

          <div class="profile-data">
            <p>Dispenser berfungsi untuk mempermudah dalam mengambil air minum khususnya dari galon air</p>
          </div>
        
      </div>
     </div>

     <div class="box">

               <!-- Profile 8 -->
            <div class="profile-box">
              <div class="profile-header">
                <img src="/image/lemariobat.jpg" alt="Profile Picture 8">
                  <h2>Lemari obat</h2>
            </div>

          <div class="profile-data">
            <p>Lemari obat-obatan berguna untuk menyimpan obat agar tidak berantakan atau hilang</p>
          </div>

      </div>
     </div>

     <div class="box">

               <!-- Profile 9 -->
            <div class="profile-box">
              <div class="profile-header">
                <img src="/image/kipasangin.jpg" alt="Profile Picture 9">
                  <h2>Kipas angin</h2>
            </div>

          <div class="profile-data">
            <p>Kipas angin berguna menjaga suhu ruangan</p>
          </div>

      </div>
     </div>

</section>

    <!-- fslts section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <h1 class="heading">
    <span>C</span>
    <span>o</span>
    <span>n</span>
    <span>t</span>
    <span>a</span>
    <span>c</span>
    <span>t</span>
  </h1>

  <div
      class="slider"
      x-data="{start: true, end: false}"
      style="padding-top: 150px"
    >
      <div
        class="slider__content"
        x-ref="slider"
        x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;"
      >
        <div class="slider__item">
          <img
            class="slider__image"
            src="https://2.bp.blogspot.com/-666fKLs_ePE/UZdcjqClhJI/AAAAAAAABp4/dnWaRCT9Ciw/s1600/Foto+Cewek+Berjilbab+9.jpg"
            alt="Image"
          />
          <div class="slider__info">
            <h2>Kepala Sekolah</h2>
            <h3>Ibu Satyo</h3>
            <p>no tlpn 12345678</p>
          </div>
        </div>
        <div class="slider__item">
          <img
            class="slider__image"
            src="https://2.bp.blogspot.com/-IR5CPBxzApI/XJ13iFEkXFI/AAAAAAAAByI/rmgIxRwQziMxlWATKbgOhJfiNwYmnj7NQCLcBGAs/s1600/Cewek%2Bhijab%2Balila%2Bmanis%2Bseksi.jpg"
            alt="Image"
          />
          <div class="slider__info">
            <h2>Waka Kesiswaan</h2>
            <h3>Ibu Helen</h3>
            <p>no tlpn 12345678</p>
          </div>
        </div>
        <div class="slider__item">
          <img
            class="slider_image"
            src="https://i.pinimg.com/originals/91/c4/51/91c451b9c9a5fc5b47516b8d87aa497a.jpg"
            alt="Image"
          />
          <div class="slider__info">
            <h2>Dokter</h2>
            <h3>Dr.Rosvita</h3>
            <p>no tlpn 12345678</p>
          </div>
        </div>
        <div class="slider__item">
          <img
            class="slider_image"
            src="https://cdn.idntimes.com/content-images/post/20220624/fv3mknpakaegxlu-89a124f5c6278589c0564ffe2740015b.jpg"
            alt="Image"
          />
          <div class="slider__info">
            <h2>pembina pmra</h2>
            <h3>Ibu Kiki</h3>
            <p>no tlpn 12345678</p>
          </div>
        </div>
        <div class="slider__item">
          <img
            class="slider__image"
            src="data:image/jpeg;base64,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"
            alt="Image"
          />
          <div class="slider__info">
            <h2>ketua PMr</h2>
            <h3>Angga</h3>
            <p>no tlpn 12345678</p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
</section>

    <!-- contact section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">
  <h1 class="heading">
    <span>g</span>
    <span>a</span>
    <span>l</span>
    <span>l</span>
    <span>e</span>
    <span>r</span>
    <span>y</span>
  </h1>

  <div class="box-container">
    <div class="box">
      <img src="https://yru.or.id/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-14.12.14.jpeg" alt="" />
      <div class="content">
        <h3>Pelantikan Anggorta Pmr</h3>
        <p>
          Pengunjian dan pelantikan anggota pmr tahun ajaran 2023/2024
        </p>
      </div>
    </div>
    <div class="box">
      <img src="https://pmiblora.or.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-04-01-at-05.42.05.jpeg" alt="" />
      <div class="content">
        <h3>Kemah</h3>
        <p>Kemah siaga bencana PMR</p>
      </div>
    </div>
    <div class="box">
      <img src="https://sman2banjar.sch.id/wp-content/uploads/2021/11/IMG_4936-1200x800.jpg" alt=""/>
      <div class="content">
        <h3>Pertolongan Pertama</h3>
        <p>
          Simulasi penyelamatan korban.
        </p>
      </div>
    </div>
    <div class="box">
      <img src="https://smkn6solo.sch.id/wp-content/uploads/2022/07/IMG_2820-1024x683.jpg" alt="" />
      <div class="content">
        <h3>Edukasi</h3>
        <p>
        Edukasi yang dilakukan PMR kepada seluruh warga sekolah.
        </p>
      </div>
    </div>
    <div class="box">
      <img src="https://images.solopos.com/2022/06/25PMR-Grobogan-Istimewa-PMI-Grobogan.jpg" alt="" />
      <div class="content">
        <h3>Trobosan Anggota PMR</h3>
        <p>
          Membuat peta resiko bencana di sekolah.
        </p>
      </div>
    </div>
    <div class="box">
      <img src="https://1.bp.blogspot.com/-FA81z2FJI8c/YaR7kNpB7wI/AAAAAAAAOgc/wcU-mQ9JqF4pOORIJNfZa0Ijj7WykN0awCLcBGAsYHQ/s792/IMG_20211129_140407.jpg" alt="" />
      <div class="content">
        <h3>Foto Bersama</h3>
        <p>
          Anggota beserta pembina PMR.
        </p>
      </div>
    </div>
    <div class="box">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxpAwaHpUIdiiPlrjh-ifvjn9TsQ6b_FthMg&usqp=CAU" alt="" />
      <div class="content">
        <h3>Prestasi</h3>
        <p>
         Meraih juara umum dalam kategori pertolongan pertama.
        </p>
      </div>
    </div>
    <div class="box">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9GzUqjApkhbVo0VZqLGixfOMvQtWcRPc8Jw&usqp=CAU" alt="" />
      <div class="content">
        <h3>Keseruan</h3>
        <p>
         Kegiatan outbons dan game.
        </p>
      </div>
    </div>
    <div class="box">
      <img src="https://smansaka.sch.id/po-content/uploads/whatsapp_image_2021-12-05_at_20.35.47_(1).jpg" alt="" />
      <div class="content">
        <h3>Recor</h3>
        <p>
          Berhasil meraih 12 piala!
        </p>
      </div>
    </div>
  </div>
</section>

<!-- gallery section ends -->

    <!-- gallery section ends -->

    <!-- brand section  -->
    <section class="brand-container">
      <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/1.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/2.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/3.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/4.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/5.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/6.jpg" alt="" /></div>
        </div>
      </div>
    </section>

    <!-- footer section  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>about us</h3>
          <p>
          UKS (Unit Kesehatan Sekolah)<br>
          Peduli Kesehatan, Ciptakan Masa Depan Sehat dan Unggul! Dengan moto 'Unggul Kesehatan, Unggul Prestasi'.
          UKS adalah mitra setia siswa dalam meraih prestasi terbaik melalui pendekatan kesehatan holistik.
          Melalui layanan medis dan edukasi, UKS membimbing siswa menuju keunggulan, membentuk karakter tangguh, dan membawa visi 'Melindungi, Membina, Membangun Masa Depan Berkualitas'.
          </p>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="#home">home</a>
          <a href="#fungsiuks">fungsi UKS</a>
          <a href="#strukturuks">Struktur UKS</a>
          <a href="#fasilitasuks">Fasilitas UKS</a>
          <a href="#contact">contact</a>
          <a href="#gallery">gallery</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="https://www.instagram.com/prajajati_smea01/">Instagram</a>
          <a
            href=""
            >Tiktok</a
          >
          <a href="https://www.youtube.com/@smk1bengkulutv"
            >youtube</a
          >
        </div>
        <div class="box">
  <h3><a href="/kita.html">PT. KITA SEHATI</a></h3>
</div>

      </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Rujukan ke file JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>