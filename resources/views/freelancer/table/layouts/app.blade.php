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


@include('freelancer.table.layouts.head')


<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

@include('freelancer.table.layouts.menu_filtre')

<!--table-->
</div>
@yield('content')
</div>
</div>
</div>
<!--/table-->
@include('layouts.footer_content')
@include('layouts.footer_bottom')
</div>




@yield('js')
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:01 GMT -->
</html>