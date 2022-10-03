<?php
/**
 * Created by PhpStorm
 * User: santo
 * Date: 03/10/2022
 * Time: 10:54
 */

/** @var string $active */

$active1 = '';
$active2 = '';
$active3 = '';

if ( $active == 'terms_services' ) {
    $active1 = 'active';
}
if ( $active == 'privacy_policy' ) {
    $active2 = 'active';
}
if ( $active == 'user_agreement' ) {
    $active3 = 'active';
}

?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="/">PT SMT</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link" href="/">Home</a></li>
                        <li><a class="nav-link <?= $active1 ?>" href="/terms-services">Terms and Service</a></li>
                        <li><a class="nav-link <?= $active2 ?>" href="/privacy-policy">Privacy Policy</a></li>
                        <li><a class="nav-link <?= $active3 ?>" href="/user-agreement">User Agreement</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </div>

    </div>
</header>
<!-- End Header -->
 
