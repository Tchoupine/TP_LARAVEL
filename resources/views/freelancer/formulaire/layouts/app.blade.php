<!DOCTYPE html>
<html lang="en">


<body class="dashboard-page">

<div class="main-wrapper">
@include('freelancer.formulaire.layouts.head')
@include('layouts.header')


@include('freelancer.formulaire.layouts.menu')


<!--formulaire-->
@yield('content_formulaire')
<!--/formulaire-->

</div>
</div>
</div>


@include('layouts.footer_content')
@include('layouts.footer_bottom')

</div>

<!--js-->
@yield('js')
<!--/js-->

</body>

</html>