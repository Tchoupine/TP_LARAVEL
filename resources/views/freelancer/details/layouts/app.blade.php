<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:01 GMT -->

<body>

<div class="main-wrapper">

@include('layouts.header')


@include('freelancer.details.layouts.head')


<div class="content">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12">
@include('freelancer.details.layouts.profil')
@include('freelancer.details.layouts.description')
@include('freelancer.details.layouts.experience')
@include('freelancer.details.layouts.education')
@include('freelancer.details.layouts.reviews')
</div>

<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">
@include('freelancer.details.layouts.budgets')
@include('freelancer.details.layouts.skills')
@include('freelancer.details.layouts.locations')
</div>

</div>
</div>
</div>


<footer class="footer">
@include('layouts.footer_content')


@include('layouts.footer_bottom')

</footer>

</div>





@include('freelancer.details.layouts.modal_budget')


{{-- <div class="modal fade custom-modal" id="success">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content proposal-modal-info">
<div class="modal-header">
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="text-center modal-body-content pt-0">
<h5 class="modal-title">Submitted Successfully</h5>
<p>You will be Notified once, your Proposal approves.</p>
</div>
<div class="col-md-12 submit-section text-center">
<a data-bs-dismiss="modal" href="freelancer-dashboard.html" class="btn btn-primary submit-btn">Go to Dashboard</a>
</div>
</div>
</div>
</div>
</div> --}}

@yield('js')
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:04 GMT -->
</html>