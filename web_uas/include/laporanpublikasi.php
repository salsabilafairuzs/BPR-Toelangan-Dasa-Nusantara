<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Laporan Publikasi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <p>Laporan Publikasi Mengacu pada Ketentuan</p>
                <p>peraturan OJK nomor 48/POJK.03/2017 Tentang</p>
                <p>transparansi Kondisi Keuangan Bank Perkreditan rakyat</p>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" position-relative overflow-hidden pe-0">
                        <p>Dalam rangka pemantauan keadaan usaha Bank Perkreditan Rakyat (BPR) oleh publik,
                            BPR diwajibkan untuk menyampaikan laporan dan/atau informasi sesuai dengan jenis,
                            waktu, cakupan, dan bentuk yang ditetapkan oleh Otoritas Jasa Keuangan. Jenis 
                            laporan dan informasi yang ditetapkan oleh Otoritas Jasa Keuangan adalah 
                            Laporan Tahunan dan Laporan Keuangan Publikasi. Hal tersebut ditetapkan
                            berdasarkan Peraturan Otoritas Jasa Keuangan nomor 48/POJK.03/2017 tentang 
                            Transparansi Kondisi Keuangan Bank Perkreditan Rakyat yang telah diberlakukan 
                            sejak 12 Juli 2017
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <table class="table">
                        <thead>
                            <tr>
                                <td scope="col">Bulan</td>
                                <td scope="col">Tahun</td>
                                <td scope="col">Laporan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_b = "SELECT `tahun`,`file` FROM `laporan` where `id_jenis_laporan` = '2' ORDER BY `tahun`";
                            //echo $sql_b;
                            $query_b = mysqli_query($koneksi,$sql_b);
                            while($data_b = mysqli_fetch_row($query_b)){
                                $tahun = $data_b[0];
                                $file = $data_b[1];
                            ?> 
                            <tr>
                                <td>Desember</td>
                                <td><?php echo $tahun;?></td>
                                <td><a href="admin/file/<?php echo $file;?>"><i class="fa fa-file-pdf" style="font-size:20px;"></i></a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <!-- containerkanan -->