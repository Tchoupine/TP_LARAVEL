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

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-lite.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="dashboard-page">

<div class="main-wrapper">

@include('layouts.header')
@include('freelancer.formulaire.layouts.head')

@include('freelancer.formulaire.layouts.menu')


<!--formulaire-->
@yield('content_formulaire')
<!--/formulaire-->



@include('layouts.footer_content')
@include('layouts.footer_bottom')

</div>

<!--js-->
@yield('js')
<!--/js-->

</body>

</html>