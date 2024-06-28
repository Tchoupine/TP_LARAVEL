<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:41:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">


@include('layouts.header')


<div class="bread-crumb-bar">
<div class="container">
<div class="row align-items-center inner-banner">
<div class="col-md-12 col-12 text-center">
<div class="breadcrumb-list">
<h2>Freelancer table</h2>
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
<li class="breadcrumb-item" aria-current="page">Freelancer</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

@include('layouts.menu_filtre')

<!--table-->
</div>
<div class="col-md-12 col-lg-8 col-xl-9">
<div class="sort-tab develop-list-select">
<div class="row align-items-center">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<div class="d-flex align-items-center">
<div class="freelance-view">
<h4>Found 9 Results</h4>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-sm-end">
<div class="sort-by">
<select class="select ">
<option>Sort by (Default)</option>
<option>Relevance</option>
<option>Rating</option>
<option>Popular</option>
<option>Latest</option>
<option>Free</option>
</select>
</div>
<ul class="list-grid d-flex align-items-center">
<li><a href="developer.html" class="favour-active"><i class="fas fa-th-large"></i></a></li>
<li><a href="developer-list.html"><i class="fas fa-list"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-1.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">George Wells</a></h3>
<div class="freelance-specific">UI/UX Designer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Alabama, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.7 (32)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$25 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite favourited"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-2.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Timothy Smith</a></h3>
<div class="freelance-specific">PHP Developer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Illinois, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.8 (55)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$21 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-3.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Janet Paden</a></h3>
<div class="freelance-specific">Graphic Designer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>New York, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.1 (30)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">Free</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-4.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">James Douglas</a></h3>
<div class="freelance-specific">iOS Developer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Florida, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="average-rating">3.2 (22)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">Free</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-5.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Floyd Lewis</a></h3>
<div class="freelance-specific">SEO Developer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Texas, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.9 (40)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$30 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-6.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Jacqueline Daye</a></h3>
<div class="freelance-specific">SM Developer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>California, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.3 (35)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$12 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-7.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Crystal Kemper</a></h3>
<div class="freelance-specific">Network Engineer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Maryland, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="average-rating">3.5 (28)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$20 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-8.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Tony Ingle</a></h3>
<div class="freelance-specific">Business Analyst</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Missouri, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="average-rating">2.1 (15)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">Free</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-9.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Kathleen Kaiser</a></h3>
<div class="freelance-specific">IT Project Manager</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Kansas, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.5 (36)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$25 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-10.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Veronica Cheek</a></h3>
<div class="freelance-specific">Software Architect</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Vermont, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span class="average-rating">2.3 (20)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$26 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-11.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Andrew Glover</a></h3>
<div class="freelance-specific">Software Developer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Virginia, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">5.0 (4)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">$8 Hourly</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-4">
<div class="freelance-widget">
<div class="freelance-content">
<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
<div class="freelance-img">
<a href="developer-details.html">
<img src="assets/img/user/avatar-12.jpg" alt="User Image">
<span class="verified"><i class="fas fa-check-circle"></i></span>
</a>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Mickey Bernier</a></h3>
<div class="freelance-specific">QA Engineer</div>
<div class="freelance-location"> <i class="feather-map-pin me-1"></i>Colorado, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">5.0 (4)</span>
</div>
<div class="freelance-tags">
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
</div>
<div class="freelancers-price">Free</div>
</div>
</div>
<div class="cart-hover">
<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<ul class="paginations list-pagination">
<li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-left"></i></a>
</li>
<li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
<li class="page-item"><a href="javascript:void(0);">2</a></li>
<li class="page-item"><a href="javascript:void(0);">3</a></li>
<li class="page-item"><a href="javascript:void(0);">...</a></li>
<li class="page-item"><a href="javascript:void(0);">10</a></li>
<li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-right"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!--/table-->

<footer class="footer">
<div class="footer-top">
<div class="container">
<div class="row">
<div class=" col-lg-4 col-md-12">
<div class="footer-bottom-logo">
<a href="index.html" class="menu-logo">
<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
</a>
<p>We’re always in search for talented and motivated people. Don’t be shy introduce yourself!</p>
<ul>
<li>
<a href="javascript:void(0);"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
</li>
<li>
<a href="javascript:void(0);"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
</li>
<li>
<a href="javascript:void(0);"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
</li>
<li>
<a href="javascript:void(0);"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
</li>
</ul>
<a href="javascript:void(0);" class="btn btn-connectus">Contact with us</a>
</div>
</div>
<div class=" col-lg-8 col-md-12">
<div class="row">
<div class="col-xl-3 col-md-6">
<div class="footer-widget footer-menu">
<h2 class="footer-title">Useful Links</h2>
<ul>
<li><a href="about.html"><i class="fas fa-angle-right me-1"></i>About Us</a></li>
<li><a href="blog-list.html"><i class="fas fa-angle-right me-1"></i>Blog</a></li>
<li><a href="login.html"><i class="fas fa-angle-right me-1"></i>Login</a></li>
<li><a href="register.html"><i class="fas fa-angle-right me-1"></i>Register</a></li>
<li><a href="forgot-password.html"><i class="fas fa-angle-right me-1"></i>Forgot Password</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="footer-widget footer-menu">
<h2 class="footer-title">Help & Support</h2>
<ul>
<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Browse Candidates</a></li>
<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Employers Dashboard</a></li>
<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Job Packages</a></li>
<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Jobs Featured</a></li>
<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Post A Job</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="footer-widget footer-menu">
<h2 class="footer-title">Other Links</h2>
<ul>
<li><a href="freelancer-dashboard.html"><i class="fas fa-angle-right me-1"></i>Freelancers</a></li>
<li><a href="freelancer-portfolio.html"><i class="fas fa-angle-right me-1"></i>Freelancer Details</a></li>
<li><a href="project.html"><i class="fas fa-angle-right me-1"></i>Project</a></li>
<li><a href="project-details.html"><i class="fas fa-angle-right me-1"></i>Project Details</a></li>
<li><a href="post-project.html"><i class="fas fa-angle-right me-1"></i>Post Project</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="footer-widget footer-menu">
<h2 class="footer-title">Connect With Us</h2>
<ul>
<li><a href="freelancer-chats.html"><i class="fas fa-angle-right me-1"></i>Chat</a></li>
<li><a href="faq.html"><i class="fas fa-angle-right me-1"></i>Faq</a></li>
<li><a href="freelancer-review.html"><i class="fas fa-angle-right me-1"></i>Reviews</a></li>
<li><a href="privacy-policy.html"><i class="fas fa-angle-right me-1"></i>Privacy Policy</a></li>
<li><a href="term-condition.html"><i class="fas fa-angle-right me-1"></i>Terms of use</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="footer-bottom">
<div class="container">

<div class="copyright">
<div class="row">
<div class="col-md-12">
<div class="copyright-text text-center">
<p class="mb-0">Copyright 2024 © KofeJob. All right reserved.</p>
</div>
</div>
</div>
</div>

</div>
</div>

</footer>

</div>


<div class="modal fade" id="rating">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-header d-block b-0 pb-0">
<span class="modal-close float-end"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
</div>
<div class="modal-body">
<form action="https://kofejob.dreamstechnologies.com/html/template/project.html">
<div class="modal-info">
<div class="text-center pt-0 mb-5">
<h3>Please login to Favourite Freelancer</h3>
</div>
<div class="submit-section text-center">
<button data-bs-dismiss="modal" class="btn btn-primary black-btn click-btn">Cancel</button>
<button type="submit" class="btn btn-primary click-btn">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.7.1.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="151145e2f361d169085d3c88-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="151145e2f361d169085d3c88-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

<script src="assets/js/profile-settings.js" type="151145e2f361d169085d3c88-text/javascript"></script>
<script src="assets/js/script.js" type="151145e2f361d169085d3c88-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="151145e2f361d169085d3c88-|49" defer></script></body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:01 GMT -->
</html>