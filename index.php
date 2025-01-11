<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

     <!--Menu navigation-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand fst-italic" href="#">My Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#JadwalKuliah">Schedule</a>
                    </li>

                        <!--log out-->
                        <li class="nav-item" >
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                        </li>

                    <!-- Dark Mode Toggle -->
                    <li class="nav-item">
                        <button class="btn btn-outline-dark ms-3" onclick="toggleTheme()" id="themeToggle">
                            <i class="bi bi-moon"></i> Dark Mode
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    
    <!--Section Hero-->
    <section id="hero" class="text-center py-5 bg-danger-subtle">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold text-dark">Create Memories, Save Memories, Everyday</h1>
                    <p class="lead text-dark fst-italic">Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="image2.png" alt="Gambar Placeholder" class="img-fluid mt-4">
                </div>
            </div>
        </div>
    </section>

    <!--Section Article-->
    <section class="container my-5">
        <h2 class="mb-4 text-dark">Today's Reflections</h2>
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum ligula sit amet nibh
                    cursus, id bibendum arcu hendrerit. Mauris vitae lacus a libero vestibulum condimentum.</p>
                <p>Nulla facilisi. Integer eu augue nec neque lacinia ullamcorper. Integer condimentum, mauris at
                    accumsan posuere, est lacus placerat metus, non facilisis odio lectus et risus.</p>
                <p>Fusce vitae metus nec mauris ultricies aliquam. Curabitur sit amet ligula eget magna fermentum
                    pulvinar et vel enim.</p>
            </div>
            <div class="col-md-4">
                <h3 class="text-dark">About Me</h3>
                <p>Sebuah deskripsi singkat tentang penulis. Sangat suka bermain game dan melawak dikehidupan
                    sehari-hari.
                </p>
                <img src="image3.png" width="200px" alt="about me" class="img-fluid mt-3">
            </div>
        </div>
    </section>

    <!--Profil-->
    <section id="profil" class="container my-5">
        <h2 class="text-center mb-5">Profil Mahasiswa</h2>
        <div class="row justify-content-center">
            <!-- Foto Profil -->
            <section class="col-md-4 d-flex justify-content-center mb-3 mb-md-0">
                <img src="image11.jpg" alt="Foto Profil" class="rounded-circle img-fluid">
            </section>

            <!-- Data Diri -->
            <section class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Harisz Pujianto</h5>
                        <p class="text-center mb-4">Mahasiswa Teknik Informatika</p>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">NIM</th>
                                    <td>: A11.2023.15196</td>
                                </tr>
                                <tr>
                                    <th scope="row">Program Studi</th>
                                    <td>: Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>: harisz@dsn.dinus.ac.id</td>
                                </tr>
                                <tr>
                                    <th scope="row">Telepon</th>
                                    <td>: +62 895 424 459 783</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>: Jl. Kaba Selatan, Semarang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!--Section Gallery-->
    <section class="container my-5">
        <h2 class="mb-4 text-dark">Gallery Foto</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="image2.png" alt="Foto 1" class="img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img src="image2.png" alt="Foto 2" class="img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img src="image2.png" alt="Foto 3" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- section article -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- Jadwal Kuliah -->
    <section id="JadwalKuliah" class="container my-5">
        <H3 class="text-center fw-bold mb-5">Jadwal Kuliah</H3>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Senin</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">09:00 - 10:30</h6>
                        <p class="text-dark text-center">
                            Basis Data</p>
                        <p class="text-dark text-center">Ruang H.3.4</p>
                        <h6 class="text-dark text-center">13:00 - 15:00</h6>
                        <p class="text-dark text-center">Dasar Pemrograman</p>
                        <p class="text-dark text-center">Ruang H.3.1</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Selasa</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">08:00 - 09:30</h6>
                        <p class="text-dark text-center">
                            Pemrograman Berbasis Web</p>
                        <p class="text-dark text-center">Ruang D.2.A</p>
                        <h6 class="text-dark text-center">14:00 - 16:00</h6>
                        <p class="text-dark text-center">Basis Data</p>
                        <p class="text-dark text-center">Ruang D.3.M</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 bg-danger text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rabu</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">10:00 - 12:00</h6>
                        <p class="text-dark text-center">
                            Pemrograman Berbasis Objecj</p>
                        <p class="text-dark text-center">Ruang D.2.A</p>
                        <h6 class="text-dark text-center">13:30 - 15:00</h6>
                        <p class="text-dark text-center">Pemrograman Sisi Server</p>
                        <p class="text-dark text-center">Ruang D.2.A</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100 bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kamis</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">08:00 - 10:00</h6>
                        <p class="text-dark text-center">
                            Pengantar Teknologi Informasi</p>
                        <p class="text-dark text-center">Ruang D.3.N</p>
                        <h6 class="text-dark text-center">11:00 - 13:00</h6>
                        <p class="text-dark text-center">Rapat Koordinasi DOSCOM</p>
                        <p class="text-dark text-center">Ruang Rapat G.1</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100 bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jumat</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">09:00 - 11:00</h6>
                        <p class="text-dark text-center">
                            Data mining</p>
                        <p class="text-dark text-center">Ruang G.2.3</p>
                        <h6 class="text-dark text-center">13:00 - 15:00</h6>
                        <p class="text-dark text-center">Information Retrieval</p>
                        <p class="text-dark text-center">Ruang G.2.4</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card h-100 bg-dark-subtle text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sabtu</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <h6 class="text-dark text-center">08:00 - 10:00</h6>
                        <p class="text-dark text-center">
                            Bimbingan Karier</p>
                        <p class="text-dark text-center">Online</p>
                        <h6 class="text-dark text-center">10:30 - 12:00</h6>
                        <p class="text-dark text-center">Bimbingan Skripsi</p>
                        <p class="text-dark text-center">Online</p>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col">
                <div class="card h-100 bg-dark text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Minggu</h5>

                    </div>
                    <div class="card-footer bg-light">
                        <p class="text-dark text-center">Tidak ada jadwal</p>
                        <h6>08:00 - 10:00</h6>
                        <p>Online</p>
                        <h6>10:30 - 12:00</h6>
                        <p>Bimbingan Skripsi</p>
                        <p>Online</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

<!-- Gallery Section -->
<section id="gallery" class="bg-light py-5 bg-danger-subtle">
    <div class="container bg-pink p-5 rounded">
        <h1 class="text-center fw-bold mb-4">Gallery</h1>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <?php
                $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                $hasil = $conn->query($sql); 
                $total_items = $hasil->num_rows;

                if ($total_items > 0) {
                    for ($i = 0; $i < $total_items; $i++) {
                        $active_class = $i === 0 ? "active" : "";
                        echo "<button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='{$i}' class='{$active_class}' aria-label='Slide " . ($i + 1) . "'></button>";
                    }
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                if ($total_items > 0) {
                    $is_first = true;
                    while ($row = $hasil->fetch_assoc()) {
                        $active_class = $is_first ? "active" : "";
                        $is_first = false; // Set subsequent items to inactive
                        ?>
                        <div class="carousel-item <?= $active_class ?>">
                            <img src="<?= htmlspecialchars($row["gambar"]) ?>" class="d-block w-100 img-fluid" style="height: 450px; object-fit: cover;" alt="foto">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?= htmlspecialchars($row["judul"]) ?></h5>
                                <p><?= htmlspecialchars($row["isi"]) ?></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<div class='carousel-item active'>
                            <div class='d-flex justify-content-center align-items-center' style='height: 450px; background-color: #f8f9fa;'>
                                <p class='text-muted'>No gallery items available</p>
                            </div>
                          </div>";
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>




    <!--Footer-->
    <footer class="text-center p-5">
        <h4><a href="https://www.instagram.com/harisz_15/profilecard/?igsh=YzB2YjF3MTBxb2Vw" class="text-dark mx-2"><i
                    class="bi bi-instagram"></i></a>
            <a href="#" class="text-dark"><i class="bi bi-twitter-x"></i></a>
            <a href=" https://wa.me/qr/LUXYO4747DABE1 " class="text-dark mx-2"><i class="bi bi-whatsapp"></i></a>
        </h4>
        <p>Harisz Cuki &copy 2024</p>
    </footer>

    <script>

    </script>

    <!-- Dark Mode Script -->
    <script>
        function toggleTheme() {
            const body = document.body;
            const navbar = document.getElementById('navbar');
            const hero = document.getElementById('hero');
            const article = document.getElementById('article');
            const toggleButton = document.getElementById('themeToggle');

            // Elements to change theme
            const elements = [body, navbar, hero, article];

            elements.forEach(element => {
                element.classList.toggle('bg-light');
                element.classList.toggle('bg-dark');
            });

            // Change text color for dark mode
            const textElements = [
                document.getElementById('heroTitle'),
                document.getElementById('heroSubtitle'),
                document.getElementById('articleTitle'),
                document.getElementById('articleText1'),
                document.getElementById('articleText2'),
                document.getElementById('articleText3'),
                document.getElementById('aboutMeTitle'),
                document.getElementById('aboutMeText')
            ];

            textElements.forEach(element => {
                element.classList.toggle('text-dark');
                element.classList.toggle('text-light');
            });

            // Change button icon and text
            if (body.classList.contains('bg-dark')) {
                toggleButton.innerHTML = '<i class="bi bi-sun"></i> Light Mode';
            } else {
                toggleButton.innerHTML = '<i class="bi bi-moon"></i> Dark Mode';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
