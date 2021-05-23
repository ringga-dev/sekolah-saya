<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('tamplate/admin') ?>/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('tamplate/admin') ?>/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('tamplate/admin') ?>/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tamplate/admin') ?>/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tamplate/admin') ?>/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tamplate/admin') ?>/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">

    <!-- loding start -->
    <div class="pre-loader">
        <div class="pre-loader-box">
            <script src="<?= base_url('tamplate') ?>/animasi/lottie-player.js"></script>
            <lottie-player src="<?= base_url('tamplate') ?>/animasi/file/43887-secure-payments.json" mode="" background="" speed="1" style="width: 400px; height: 400px;" hover loop autoplay></lottie-player>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                tunggu ya saya lakukan...
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <?= session()->getFlashdata('pesan') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- loding end -->

    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <img src="<?= base_url('tamplate/admin') ?>/vendors/images/deskapp-logo.svg" alt="">
                </a>
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <?= session()->getFlashdata('pesan') ?>
            <?php endif; ?>
            <div class="login-menu">
                <ul>
                    <li><a href="<?= base_url('auth/register') ?>">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="<?= base_url('tamplate/admin') ?>/vendors/images/login-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To DeskApp</h2>
                        </div>
                        <form action="<?= base_url() ?>/auth/cek_login" method="POST">
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="options" id="user">
                                        <div class="icon"><img src="<?= base_url('tamplate/admin') ?>/vendors/images/person.svg" class="svg" alt=""></div>
                                        <span>I'm</span>
                                        Employee
                                    </label>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg <?= ($validation->hasError('email_user') ? 'is-invalid' : '') ?>" placeholder="Email" name="email_user" id="email_user" autofocus value="<?= old('email_user') ?>">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                                <div class="invalid-feedback pl-3">
                                    <?= $validation->getError('email_user') ?>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg <?= ($validation->hasError('pass') ? 'is-invalid' : '') ?>" placeholder="**********" name="pass" id="pass" autofocus value="<?= old('pass') ?>">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                                <div class="invalid-feedback pl-3">
                                    <?= $validation->getError('pass') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" href="index.html">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="<?= base_url('tamplate/admin') ?>/vendors/scripts/core.js"></script>
    <script src="<?= base_url('tamplate/admin') ?>/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url('tamplate/admin') ?>/vendors/scripts/process.js"></script>
    <script src="<?= base_url('tamplate/admin') ?>/vendors/scripts/layout-settings.js"></script>

    <script src="<?= base_url('tamplate/admin') ?>/src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?= base_url('tamplate/saya.js') ?>"></script>
</body>

</html>