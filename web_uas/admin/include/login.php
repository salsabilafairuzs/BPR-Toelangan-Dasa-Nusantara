<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php if(!empty($_GET['gagal'])){?>
                                        <?php if($_GET['gagal']=="userKosong"){?>
                                        <span class="text-danger">
                                            Maaf Username Tidak Boleh Kosong
                                        </span>
                                        <?php } else if($_GET['gagal']=="passKosong"){?>
                                        <span class="text-danger">
                                            Maaf Password Tidak Boleh Kosong
                                        </span>
                                        <?php } else {?>
                                        <span class="text-danger">
                                            Maaf Username dan Password Anda Salah
                                        </span>
                                        <?php }?>
                                    <?php }?>
                                    <form class="user" action="index.php?include=konfirmasi-login" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            placeholder="Username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" name="login" value="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/script.php") ?>

</body>
