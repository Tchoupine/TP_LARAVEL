@extends('freelancer.formulaire.crud.layouts.app')

@section('content')
    <div class="container">
        <h1>Create Freelancer</h1>
        <form action="{{ route('freelancer.store') }}" method="POST">
            @csrf
            @include('freelancers.crud.form')
            <button type="submit" class="btn btn-primary">Save</button>
            <button class="btn btn-secondary click-btn btn-plan">Cancel</button>
        </form>
    </div>
@endsection

@section('js')
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
@endsection