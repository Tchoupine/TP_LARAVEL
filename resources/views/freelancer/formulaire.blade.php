<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="dashboard-page">

<div class="main-wrapper">

@include('layouts.header')


@include('layouts.menu')

<!--formulaire-->
<div class="col-xl-9 col-lg-8">
    <div class="pro-pos">
    <div class="setting-content employee-profile-new">
    <form action="https://kofejob.dreamstechnologies.com/html/template/profile-settings.html">
    <div class="card">
    <div class="pro-head">
    <h3>Profile Setting</h3>
    </div>
    <div class="pro-body">
    <div class="row">
    <div class="col-lg-12">
    <div class="form-row pro-pad pt-0 ps-0">
    <div class="input-block col-md-6 pro-pic">
    <h4 class="mb-3">Personal Information</h4>
    <label class="form-label">Profile Picture</label>
    <div class="d-flex align-items-center">
    <div class="upload-images">
    <img src="assets/img/img-02.jpg" alt="Image" id="blah">
    </div>
    <div class="ms-3">
    <label class="file-upload image-upbtn ms-0">
    Upload Image <input type="file" id="imgInp">
    </label>
    <p>Max Image size 300*300</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Phone Number</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Email Address</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card">
    <div class="pro-body">
    <div class="row">
    <div class="col-lg-12">
    <div class="form-row pro-pad pt-0 ps-0">
    <div class="input-block col-md-6 pro-pic">
    <h4 class="mb-3">Address</h4>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Country</label>
    <select class="select">
    <option value>Select</option>
    <option value>UK</option>
    <option value>USA</option>
    </select>
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">State</label>
    <select class="select">
    <option value>Select</option>
    <option value>UK</option>
    <option value>USA</option>
    </select>
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">City</label>
    <select class="select">
    <option value>Select</option>
    <option value>UK</option>
    <option value>USA</option>
    </select>
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Zipcode</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card">
    <div class="pro-body">
    <div class="row">
    <div class="col-lg-12">
    <div class="form-row pro-pad pt-0 ps-0">
    <div class="input-block col-md-6 pro-pic">
    <h4 class="mb-3">Details</h4>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="mb-3">
    <label class="form-label">Company Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="mb-3">
    <label class="form-label">Tagline</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Established On</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Company Owner Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Industry</label>
    <select class="select">
    <option value>Select</option>
    <option value>UK</option>
    <option value>USA</option>
    </select>
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="mb-3">
    <label class="form-label">Website</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-12">
    <div class="input-block">
    <label class="form-label">Team Size</label>
    <div class="check-radio">
    <ul class="d-flex flex-wrap">
    <li>
    <label class="custom_radio me-4">
    <input type="radio" name="budget" value="Yes" checked>
    <span class="checkmark"></span> It's just me
    </label>
    </li>
    <li>
    <label class="custom_radio me-4">
    <input type="radio" name="budget">
    <span class="checkmark"></span>2-9 employees
    </label>
    </li>
    <li>
    <label class="custom_radio me-4">
    <input type="radio" name="budget">
    <span class="checkmark"></span>10-99 employees
    </label>
    </li>
    <li>
    <label class="custom_radio me-4">
    <input type="radio" name="budget">
    <span class="checkmark"></span>100-1000 employees
    </label>
    </li>
    <li>
    <label class="custom_radio me-4">
    <input type="radio" name="budget">
    <span class="checkmark"></span>More than 1000 employees
    </label>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
    <label class="form-label">About</label>
    <textarea rows="4" class="form-control"></textarea>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <h4 class="mb-3">Working Hours</h4>
    </div>
    <div class="col-md-6">
    <div class="input-block d-flex">
    <div class="form-check form-switch d-inline-block work-check position-relative">
    <input type="checkbox" class="form-check-input" id="check_hour" checked>
    </div>
    <label class="form-label ms-2">Same Every Day</label>
    </div>
    </div>
    <div class="col-md-12">
    <div class="checkout-hour" style>
    <div class="other-info-list">
    <ul>
    <li class="active-hour">Mon</li>
    <li class="active-hour">Tue</li>
    <li class="active-hour">Wed</li>
    <li class="active-hour">Thr</li>
    <li class="active-hour">Fri</li>
    <li>Sat</li>
    <li>Sun</li>
    </ul>
    </div>
    </div>
    <div class="check-hour" style="display: none;">
    <div class="col-md-12">
    <h4>Select Days</h4>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="row align-items-center">
    <div class="col-md-1">
    <div class="other-info-list">
    <ul>
    <li class="active-hour m-0">Mon</li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">Start Time </label>
    <input type="text" class="form-control" value="8:00">
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">End Time </label>
    <input type="text" class="form-control" value="20:00">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="row align-items-center">
    <div class="col-md-1">
    <div class="other-info-list">
    <ul>
    <li class="active-hour m-0">Tue</li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">Start Time </label>
    <input type="text" class="form-control" value="8:00">
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">End Time </label>
    <input type="text" class="form-control" value="20:00">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="row align-items-center">
    <div class="col-md-1">
    <div class="other-info-list">
    <ul>
    <li class="active-hour m-0">Wed</li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">Start Time </label>
    <input type="text" class="form-control" value="8:00">
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">End Time </label>
    <input type="text" class="form-control" value="20:00">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="row align-items-center">
    <div class="col-md-1">
    <div class="other-info-list">
    <ul>
    <li class="active-hour m-0">Thur</li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">Start Time </label>
    <input type="text" class="form-control" value="8:00">
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">End Time </label>
    <input type="text" class="form-control" value="20:00">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="row align-items-center">
    <div class="col-md-1">
    <div class="other-info-list">
    <ul>
    <li class="active-hour m-0">Fri</li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">Start Time </label>
    <input type="text" class="form-control" value="8:00">
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">End Time </label>
    <input type="text" class="form-control" value="20:00">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="row align-items-center">
    <div class="col-md-1">
    <div class="other-info-list">
    <ul>
    <li class="m-0">Fri</li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">Start Time </label>
    <input type="text" class="form-control" value="8:00">
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">End Time </label>
    <input type="text" class="form-control" value="20:00">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="row align-items-center">
    <div class="col-md-1">
    <div class="other-info-list">
    <ul>
    <li class="m-0">Sun</li>
    </ul>
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">Start Time </label>
    <input type="text" class="form-control" value="8:00">
    </div>
    </div>
    <div class="col-md-5">
    <div class="input-block">
    <label class="form-label">End Time </label>
    <input type="text" class="form-control" value="20:00">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card">
    <div class="pro-body">
    <div class="row">
    <div class="col-lg-12">
    <div class="form-row pro-pad pt-0 ps-0">
    <div class="input-block col-md-6 pro-pic">
    <h4 class="mb-3">Social Media</h4>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="mb-3">
    <label class="form-label">Facebook</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-4">
    <div class="mb-3">
    <label class="form-label">Instagram </label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="mb-3">
    <label class="form-label">LinkedIn</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="mb-3">
    <label class="form-label">Behance</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="mb-3">
    <label class="form-label">Pinterest </label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="mb-3">
    <label class="form-label">Twitter</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card">
    <div class="pro-body">
    <div class="row">
    <div class="col-lg-12">
    <div class="form-row pro-pad pt-0 ps-0">
    <div class="input-block col-md-6 pro-pic">
    <h4 class="mb-3">Location</h4>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-xl-3 col-md-6">
    <div class="mb-3">
    <label class="form-label">City </label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-xl-3 col-md-6">
    <div class="mb-3">
    <label class="form-label">State / Province</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-xl-3 col-md-6">
    <div class="mb-3">
    <label class="form-label">ZIP / Post Code </label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-xl-3 col-md-6">
    <div class="mb-3">
    <label class="form-label">Country</label>
    <select class="select">
    <option value>Select</option>
    <option value>UK</option>
    <option value>USA</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card  border-0">
    <div class="pro-body">
    <div class="row">
    <div class="col-lg-12">
    <div class="form-row pro-pad pt-0 ps-0">
    <div class="input-block col-md-6 pro-pic">
    <h4 class="mb-3">Language</h4>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="mb-3">
    <label class="form-label">Language</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="mb-3">
    <label class="form-label">Fluency</label>
    <select class="select">
    <option value>Select</option>
    <option value>UK</option>
    <option value>USA</option>
    </select>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card text-end border-0">
    <div class="pro-body">
    <button class="btn btn-secondary click-btn btn-plan">Cancel</button>
    <button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
    </div>
    </div>
    </form>
    </div>
    </div>
</div>
<!--/formulaire-->

</div>
</div>
</div>


@include('layouts.footer')

</div>

<!--js-->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

<script src="assets/js/moment.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
<script src="assets/plugins/datatables/datatables.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

<script src="assets/js/script.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1844f759bf01818f16cd74e0-|49" defer></script>
<!--/js-->

</body>

</html>