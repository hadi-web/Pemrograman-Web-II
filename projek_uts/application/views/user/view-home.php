<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php $this->load->view('user/_partials/v-head') ?>
</head>
<body>
	<?php $this->load->view('user/_partials/v-header') ?>

	<!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center overlay2" style="background-image: url(assets/img/banner/banner2.jpg);" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> Selamat Datang Di <br>
                                    SDN 01 Gandasuli </h3>
                                <p>Sekolah dasar yang ramah anak<br>
                                    dan mencetak siswa siswi yang berprestasi.</p>
                                <div class="video_service_btn">
                                    <a href="#" class="boxed-btn3">Daftar</a>
                                    <a href="#" class="boxed-btn3-white"> <i class="fa fa-play"></i>
                                        Lihat Alumni</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Berikut adalah beberapa fitur yang dapat anda coba</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_1">
                        <div class="service_hover">
                            <img src="<?php echo base_url('assets/img/svg_icon/legal-paper.svg') ?>" alt="">
                            <h3>E-Sekolah</h3>
                            <div class="hover_content">
                                <div class="hover_content_inner">
                                    <h4>E-Sekolah</h4>
                                    <p>E-Sekolah adalah tempat untuk belajar online.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_2">
                        <div class="service_hover">
                            <img src="<?php echo base_url('assets/img/svg_icon/case.svg') ?>" alt="">
                            <h3>Data Guru</h3>
                            <div class="hover_content">
                                    <div class="hover_content_inner">
                                        <h4>Data Guru</h4>
                                        <p>Data guru berisi beberapa pengajar.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <a class="col-xl-4 col-md-4" href="<?php echo base_url('Siswa') ?>">
                    <div class="single_service service_bg_3">
                        <div class="service_hover">
                            <img src="<?php echo base_url('assets/img/svg_icon/survey.svg') ?>" alt="">
                            <h3>Data Siswa</h3>
                            <div class="hover_content">
                                    <div class="hover_content_inner">
                                        <h4>Data Siswa</h4>
                                        <p>Sekumpulan data yang berisi para siswa yang sudah terdaftar.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- service_area_end -->
</body>
<?php $this->load->view('user/_partials/v-footer') ?>
<?php $this->load->view('user/_partials/v-js') ?>
</html>