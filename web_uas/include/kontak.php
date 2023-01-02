<!-- Page Header Start -->
<div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Hubungi Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Hubungi Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Hubungi Kami</h1>
                <p>Hubungi kami melalui berbagai cara di bawah ini</p>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-dark text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Call Us</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>031-8850421</p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>bpr_toelangandn@yahoo.co.id</p>
                        <h5 class="text-white">Office Address</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Tulangan No. 3 Sidoarjo</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Isi form di bawah ini untuk kinerja perusahaan kami agar lebih baik </p>
                    <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="pesanberhasil"){?>
                        <div class="alert alert-success bg-dark text-white" role="alert">
                        Pesan Berhasil Dikirim</div>
                    <?php }}?> 
                    <form action="index.php?include=konfirmasi-kritik-saran" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="nama">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pekerjaan" placeholder="Your Job" name="pekerjaan">
                                    <label for="pekerjaan">Pekerjaan</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-floating">
                                <div class="col-sm-12">
                                <select class="form-control bg-white" id="subjek" name="subjek">
                                    <option value="Testimoni">Testimoni</option>
                                    <option value="Kritiksaran">Kritik Saran</option>              
                                </select>
                                </div>
                            </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px" name="pesan"></textarea>
                                    <label for="message">Isi Pesan Anda Disini</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark rounded-pill py-3 px-5" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
        <iframe class="w-100" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8972085921305!2d112.64665211379945!3d7.476602375787635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e04b9b211829%3A0xe7408cbea2bd15cb!2sBPR%20TULANGAN%20DASA%20NUSANTARA!5e0!3m2!1sid!2sid!4v1669099085051!5m2!1sid!2sid"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->