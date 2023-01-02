<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Laporan GCG</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <p>Laporan pelaksanaan Good Corporate Governance disusun sesuai dengan ketentuan Otoritas 
                    Jasa Keuangan (OJK)</p>
                <p> nomor 5/SEOJK.03/2016 perihal penerapan Good Corporate Governance 
                    bagi Bank Perkreditan Rakyat</p>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" position-relative overflow-hidden pe-0">
                        <h1 class="display-5 mb-4">Menuju Tata Kelola BPR yang Baik</h1>
                        <p>Laporan pelaksanaan Good Corporate Governance disusun sesuai dengan ketentuan 
                            Otoritas Jasa Keuangan (OJK) nomor 5/SEOJK.03/2016 
                            perihal penerapan Good Corporate Governance bagi Bank Perkreditan Rakyat</p>
                        <br><br>
                        <p>Laporan pelaksanaan Good Corporate Governance terdiri dari</p>
                        <ul>
                            <li>Transparansi pelaksanaan GCG sebagaimana dimaksud pada butir VII Surat
                                Edaran OJK No.5/SEOJK.03/2016</li>
                            <li>Laporan Penilaian Sendiri (Self Assessment) Pelaksanaan GCG</li>
                        </ul>
                        <br><br>
                        <p>Penerapan tata kelola yang baik pada sektor perbankan, khususnya Bank Perkreditan 
                            Rakyat dibutuhkan seiring dengan semakin meningkatnya volume usaha dan semakin
                            meningkat pula risikonya.</p>
                        <br><br>
                        <p>Penerapan tata kelola juga mencakup nilai-nilai etika yang berlaku umum pada 
                            perbankan, sehingga diharapkan industri perbankan, khususnya BPR semakin 
                            dipercaya oleh masyarakat.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn text-end" data-wow-delay="0.5s">
                    <h3 class="display-5 mb-4">Laporan</h3>
                    <?php
                        $sql_b = "SELECT `nama_laporan`,`file` FROM `laporan` where `id_jenis_laporan` = '3' ORDER BY `nama_laporan`";
                        //echo $sql_b;
                        $query_b = mysqli_query($koneksi,$sql_b);
                        while($data_b = mysqli_fetch_row($query_b)){
                            $nama_laporan = $data_b[0];
                            $file = $data_b[1];
                    ?> 
                    <p><?php echo $nama_laporan;?> <a class="btn btn-dark rounded-pill py-2 px-4 mt-2" href="admin/file/<?php echo $file;?>">Unduh</a></p>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>