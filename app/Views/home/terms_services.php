<?php
/**
 * Created by PhpStorm
 * User: santo
 * Date: 03/10/2022
 * Time: 10:43
 */
?>
<?= $this->extend('layouts/home') ?>

<?= $this->section('content') ?>

<?= $this->include('partials/nav2') ?>

    <section id="hero2" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>PT SMT TERMS AND SERVICES</h1>
                    <h2>We are team of talented designers making websites, web apps, and mobile apps with Best Tools available</h2>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-carousel/1.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>

<main id="main">

    <section id="about">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>
                    Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern PT SMT's relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.
                </p>

                <p>
                    The term 'PT SMT' or 'us' or 'we' refers to the owner of the website whose registered office is Jl Jakenan Winong Dk Banglean Ds Tambahmulyo Kec Jakenan Kab Pati Prov Jawa Tengah Indonesia 59182. Our company registration number is 1801220016648 registered at Jakarta in electronic way. The term 'you' refers to the user or viewer of our website.
                </p>

                <p>
                    The use of this website is subject to the following terms of use:
                </p>
            </header>
            <div class="about-col">

                <ul>
                    <li>
                        <p>
                            The content of the pages of this website is for your general information and use only. It is subject to change without notice.
                        </p>
                    </li>
                    <li>
                        <p>
                            This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: email address.
                        </p>
                    </li>
                    <li>
                        <p>
                            Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors, and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.
                        </p>
                    </li>
                    <li>
                        <p>
                            Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.
                        </p>
                    </li>
                    <li>
                        <p>
                            This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.
                        </p>
                    </li>
                    <li>
                        <p>
                            All trademarks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.
                        </p>
                    </li>
                    <li>
                        <p>
                            Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.
                        </p>
                    </li>
                    <li>
                        <p>
                            From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).
                        </p>
                    </li>
                    <li>
                        <p>
                            Your use of this website and any dispute arising out of such use of the website is subject to the laws of Indonesia.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?= $this->include('partials/footer') ?>

<?= $this->endSection('content') ?>