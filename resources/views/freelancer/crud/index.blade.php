@extends('freelancer.formulaire.layouts.app')

@section('content_formulaire')
    <div class="col-xl-9 col-lg-8">
        <div class="pro-pos">
        <div class="setting-content employee-profile-new">
        {{-- <form action="{{ route('freelancer.update', $freelancer->id) }}"  method="POST"> --}}
            <form method="POST">
            <div class="card">
            <div class="pro-head">
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
                <label class="form-label">City</label>
                <select class="select">
                <option value>Select</option>
                <option value>UK</option>
                <option value>USA</option>
                </select>
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