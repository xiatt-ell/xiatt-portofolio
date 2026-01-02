<?php
session_start();

if (!isset($_SESSION['user']['logged_in']) || $_SESSION['user']['logged_in'] !== true) {
      header('Location: login/login.php');
      exit;
   }



?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>XIATT | PORTOFOLIO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS (nanti kita buat di file terpisah) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- SCROLL PROGRESS -->
<div class="scroll-progress"></div>

<!-- NAVBAR -->
<header class="navbar">
  <div class="logo">PORTFOLIO</div>
  <nav>
    <a href="#hero">Home</a>
    <a href="#identity">Profil</a>
    <a href="#skills">Skill</a>
    <a href="#works">Karya</a>
    <a href="#personal">Personal</a>
    <a href="#contact">Kontak</a>
    <a href="login/logout.php">Log Out</a>
  </nav>
</header>

<!-- HERO / JUDUL PROFESIONAL -->
<section class="hero reveal" id="hero">
  <div class="hero-content glass">
    <h1>Creative Multimedia Specialist</h1>
    <h2>Fotografi • Videografi • Editing • Design</h2>
    <p>Menghadirkan visual yang bermakna, estetik, dan profesional.</p>
  </div>
</section>

<!-- IDENTITAS DIRI -->
<section class="section reveal" id="identity">
  <h2 class="section-title">Identitas Diri</h2>
  <p class="section-subtitle">
    Gambaran lengkap tentang latar belakang, keahlian, dan nilai profesional saya
  </p>

  <div class="identity-wrapper">

    <!-- PROFILE UTAMA -->
    <div class="identity-main glass">
      <div class="identity-photo">
        <img src="img/profile.jpg" alt="Foto Diri">
      </div>

      <div class="identity-summary">
        <h3>Nama Lengkap Anda</h3>
        <span class="profession">Creative Multimedia & Front-End Developer</span>

        <p class="about-text">
          Saya adalah individu kreatif yang memiliki ketertarikan besar pada dunia
          visual, teknologi, dan pengembangan digital. Terbiasa menggabungkan
          estetika desain dengan fungsi teknis untuk menghasilkan karya yang
          tidak hanya menarik secara visual, tetapi juga efektif dan fungsional.
        </p>

        <p class="about-text">
          Saya memiliki pengalaman dalam bidang fotografi, videografi, editing,
          desain visual, serta pengembangan website front-end dan back-end dasar.
          Fokus utama saya adalah menciptakan pengalaman pengguna yang nyaman,
          bersih, dan profesional.
        </p>
      </div>
    </div>

    <!-- DETAIL IDENTITAS -->
    <div class="identity-details grid">

      <!-- DATA PRIBADI -->
      <div class="card glass">
        <h4>Data Pribadi</h4>
        <ul class="identity-list">
          <li><strong>Nama:</strong> Nama Lengkap Anda</li>
          <li><strong>Alamat:</strong> Kota / Provinsi</li>
          <li><strong>Tempat, Tanggal Lahir:</strong> -</li>
          <li><strong>Status:</strong> Pelajar / Mahasiswa / Freelancer</li>
        </ul>
      </div>

      <!-- RIWAYAT PENDIDIKAN -->
      <div class="card glass">
        <h4>Riwayat Pendidikan</h4>
        <ul class="identity-list">
          <li>
            <strong>SMK / SMA</strong><br>
            Jurusan Multimedia / IPA / IPS<br>
            <span class="year">2022 – 2025</span>
          </li>
          <li>
            <strong>Kursus / Pelatihan</strong><br>
            Editing, Desain, Web Development
          </li>
        </ul>
      </div>

      <!-- KEAHLIAN UTAMA -->
      <div class="card glass">
        <h4>Keahlian Utama</h4>
        <ul class="identity-list">
          <li>Fotografi & Komposisi Visual</li>
          <li>Videografi & Cinematic Storytelling</li>
          <li>Editing Foto & Video (Color Grading)</li>
          <li>Desain Grafis & Ilustrasi Digital</li>
          <li>Front-End Development (HTML, CSS, JavaScript)</li>
          <li>Back-End Dasar (PHP & Database)</li>
        </ul>
      </div>

      <!-- NILAI & KARAKTER -->
      <div class="card glass">
        <h4>Nilai & Karakter Profesional</h4>
        <p>
          Saya dikenal sebagai pribadi yang teliti, bertanggung jawab,
          dan memiliki rasa ingin tahu tinggi. Saya senang belajar hal baru,
          terbuka terhadap feedback, dan mampu bekerja secara mandiri maupun tim.
        </p>
      </div>

    </div>

  </div>
</section>


<!-- SKILL & KEAHLIAN -->
<section class="section reveal" id="skills">
  <h2 class="section-title">Skill & Keahlian</h2>
  <p class="section-subtitle">
    Perpaduan kreativitas visual & kemampuan teknis
  </p>

  <div class="skill-wrapper">

    <!-- SKILL CARD -->
    <div class="skill-card glass reveal">
      <div class="skill-visual">
        <img src="img/photography.jpg" alt="Fotografi">
      </div>

      <div class="skill-content">
        <h3>Fotografi</h3>
        <p class="skill-desc">
          Mengabadikan momen dengan komposisi, cahaya, dan emosi.
        </p>

        <div class="skill-level">
          <span>Advanced</span>
          <div class="progress-bar">
            <div class="progress fill-90"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- VIDEOGRAFI -->
    <div class="skill-card glass reveal">
      <div class="skill-visual">
        <img src="img/videography.jpg" alt="Videografi">
      </div>

      <div class="skill-content">
        <h3>Videografi</h3>
        <p class="skill-desc">
          Storytelling cinematic melalui pergerakan kamera.
        </p>

        <div class="skill-level">
          <span>Advanced</span>
          <div class="progress-bar">
            <div class="progress fill-85"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- EDITING -->
    <div class="skill-card glass reveal">
      <div class="skill-visual">
        <img src="img/editing.jpg" alt="Editing">
      </div>

      <div class="skill-content">
        <h3>Editing Foto & Video</h3>
        <p class="skill-desc">
          Color grading, retouching, dan cinematic cut.
        </p>

        <div class="skill-level">
          <span>Expert</span>
          <div class="progress-bar">
            <div class="progress fill-95"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- DESIGN -->
    <div class="skill-card glass reveal">
      <div class="skill-visual">
        <img src="img/design.jpg" alt="Design">
      </div>

      <div class="skill-content">
        <h3>Design & Ilustrasi</h3>
        <p class="skill-desc">
          Visual branding, ilustrasi digital, dan layout design.
        </p>

        <div class="skill-level">
          <span>Advanced</span>
          <div class="progress-bar">
            <div class="progress fill-80"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- FRONT END -->
    <div class="skill-card glass reveal">
      <div class="skill-visual">
        <img src="img/frontend.jpg" alt="Front End">
      </div>

      <div class="skill-content">
        <h3>Front-End Development</h3>
        <p class="skill-desc">
          HTML, CSS, JavaScript — UI interaktif & animasi modern.
        </p>

        <div class="skill-level">
          <span>Advanced</span>
          <div class="progress-bar">
            <div class="progress fill-85"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- BACK END -->
    <div class="skill-card glass reveal">
      <div class="skill-visual">
        <img src="img/backend.jpg" alt="Back End">
      </div>

      <div class="skill-content">
        <h3>Back-End Development</h3>
        <p class="skill-desc">
          PHP & database — login system, session, dashboard.
        </p>

        <div class="skill-level">
          <span>Intermediate</span>
          <div class="progress-bar">
            <div class="progress fill-70"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- HASIL KARYA & PROYEK TERBAIK -->
<section class="section reveal" id="works">

  <h2 class="section-title">Hasil Karya & Proyek Terbaik</h2>
  <p class="section-subtitle">
    Kumpulan karya dan proyek pilihan yang merepresentasikan skill, kreativitas,
    serta pengalaman profesional saya di berbagai bidang.
  </p>

  <div class="works-wrapper">

    <!-- ================= FOTOGRAFI ================= -->
    <div class="work-category">
      <h3 class="category-title">📸 Fotografi</h3>

      <div class="works-grid">

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/photo1.jpg" alt="Fotografi Portrait">
          </div>
          <div class="work-content">
            <h4>Portrait Photography</h4>
            <p>
              Pemotretan portrait dengan fokus pada pencahayaan natural,
              komposisi wajah, dan ekspresi emosional subjek.
            </p>
            <span class="work-tag">Lighting • Composition • Editing</span>
          </div>
        </article>

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/photo2.jpg" alt="Fotografi Landscape">
          </div>
          <div class="work-content">
            <h4>Landscape Photography</h4>
            <p>
              Eksplorasi keindahan alam dengan pendekatan visual cinematic
              dan tone warna yang dramatis.
            </p>
            <span class="work-tag">Nature • Color Grading</span>
          </div>
        </article>

      </div>
    </div>

    <!-- ================= VIDEOGRAFI ================= -->
    <div class="work-category">
      <h3 class="category-title">🎬 Videografi</h3>

      <div class="works-grid">

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/video1.jpg" alt="Cinematic Video">
          </div>
          <div class="work-content">
            <h4>Cinematic Short Video</h4>
            <p>
              Video cinematic dengan storytelling visual, transisi halus,
              dan color grading bergaya film.
            </p>
            <span class="work-tag">Storytelling • Color Grading</span>
          </div>
        </article>

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/video2.jpg" alt="Video Editing">
          </div>
          <div class="work-content">
            <h4>Video Editing & Motion</h4>
            <p>
              Editing video kreatif untuk konten digital dengan ritme dinamis
              dan visual yang engaging.
            </p>
            <span class="work-tag">Editing • Motion • Audio Sync</span>
          </div>
        </article>

      </div>
    </div>

    <!-- ================= DESIGN & ILUSTRASI ================= -->
    <div class="work-category">
      <h3 class="category-title">🎨 Design & Ilustrasi</h3>

      <div class="works-grid">

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/design1.jpg" alt="UI Design">
          </div>
          <div class="work-content">
            <h4>UI/UX Design</h4>
            <p>
              Desain antarmuka modern dengan pendekatan clean,
              usability tinggi, dan konsistensi visual.
            </p>
            <span class="work-tag">UI • UX • Prototyping</span>
          </div>
        </article>

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/illustration1.jpg" alt="Ilustrasi Digital">
          </div>
          <div class="work-content">
            <h4>Digital Illustration</h4>
            <p>
              Ilustrasi digital dengan gaya personal yang ekspresif
              dan detail visual yang kuat.
            </p>
            <span class="work-tag">Illustration • Creativity</span>
          </div>
        </article>

      </div>
    </div>

    <!-- ================= PROGRAMMING ================= -->
    <div class="work-category">
      <h3 class="category-title">💻 Programming</h3>

      <div class="works-grid">

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/frontend.jpg" alt="Frontend Project">
          </div>
          <div class="work-content">
            <h4>Frontend Website</h4>
            <p>
              Website interaktif dengan animasi modern,
              responsif, dan pengalaman pengguna yang optimal.
            </p>
            <span class="work-tag">HTML • CSS • JavaScript</span>
          </div>
        </article>

        <article class="work-card">
          <div class="work-image">
            <img src="img/works/backend.jpg" alt="Backend Project">
          </div>
          <div class="work-content">
            <h4>Backend System</h4>
            <p>
              Sistem backend dengan autentikasi, dashboard,
              dan pengelolaan data yang terstruktur.
            </p>
            <span class="work-tag">PHP • Database • Logic</span>
          </div>
        </article>

      </div>
    </div>

  </div>

</section>


<!-- SERTIFIKASI -->
<section class="section reveal">
  <h2 class="section-title">Sertifikasi & Penghargaan</h2>

  <div class="grid">
    <div class="card glass">
      <img src="img/certificate.jpg" class="visual-img">
      <h3>Sertifikat Multimedia</h3>
      <p>Bukti kompetensi di bidang multimedia dan desain.</p>
    </div>
  </div>
</section>

<!-- SISI PERSONAL -->
<section class="section reveal" id="personal">
  <h2 class="section-title">Sisi Personal</h2>

  <div class="grid">

    <div class="card glass">
      <img src="img/hobby.jpg" class="visual-img">
      <h3>Hobi & Kesukaan</h3>
      <p>Eksplor visual, editing, menonton anime, dan bermain game.</p>
    </div>

    <div class="card glass">
      <img src="img/anime.jpg" class="visual-img">
      <h3>Anime Favorit</h3>
      <p>Attack on Titan, Naruto, One Piece, Demon Slayer.</p>
    </div>

    <div class="card glass">
      <img src="img/game.jpg" class="visual-img">
      <h3>Game Favorit</h3>
      <p>Valorant, Genshin Impact, Minecraft.</p>
    </div>

  </div>
</section>

<!-- KONTAK -->
<section class="section reveal" id="contact">
  <h2 class="section-title">Kontak & Media Sosial</h2>

  <div class="grid">
    <div class="card glass">
      <p>Email: example@email.com</p>
      <p>Instagram: @username</p>
      <p>WhatsApp: 08xxxxxxxxxx</p>
    </div>
  </div>
</section>

<footer class="footer">
  © 2026 — Creative Multimedia Portfolio
</footer>

<!-- JS (nanti kita buat di file terpisah) -->
<script src="script/script.js"></script>
</body>
</html>

