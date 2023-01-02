<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
            <?php 
                $sql_b = "SELECT `profil`, `isi` FROM `profil` WHERE `id_profil` = '1'";
                //echo $sql_b;
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                    $profil = $data_b[0];
                    $isi = $data_b[1];
                }
              ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $profil;?></h1>
                    <p class="mb-4"><?php echo $isi;?></p>
                    <p><i class="fa fa-check text-dark me-3"></i>Trust (Kepercayaan)</p>
                    <p><i class="fa fa-check text-dark me-3"></i>Integrity (Kejujuran)</p>
                    <p><i class="fa fa-check text-dark me-3"></i>Prudent (Kehati-hatian)</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="container mb-5">
    <div class="laporan accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item mb-5 border-0">
        <?php 
        $sql_b = "SELECT `profil`, `isi` FROM `profil` WHERE `id_profil` = '3'";
        //echo $sql_b;
        $query_b = mysqli_query($koneksi,$sql_b);
        while($data_b = mysqli_fetch_row($query_b)){
            $profil = $data_b[0];
            $isi = $data_b[1];
        }
        ?>
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <?php echo $profil;?>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body shadow">
                    <strong><?php echo $profil;?></strong><br>
                    <?php echo $isi;?>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="accordion-item border-0">
        <?php 
        $sql_b = "SELECT `profil`, `isi` FROM `profil` WHERE `id_profil` = '5'";
        //echo $sql_b;
        $query_b = mysqli_query($koneksi,$sql_b);
        while($data_b = mysqli_fetch_row($query_b)){
            $profil = $data_b[0];
            $isi = $data_b[1];
        }
        ?>
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <?php echo $profil;?>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body shadow">
                    <strong><?php echo $profil;?></strong><br>
                    <p class="mb-0"> <?php echo $isi;?></p>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    </div>