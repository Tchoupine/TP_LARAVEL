<div class="col-xl-9 col-lg-8">
    <div class="pro-pos">
        <div class="setting-content employee-profile-new">
                @csrf
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
                                                    Upload Image
                                                    <input type="file" class="form-control" id="profile_picture" name="profile_picture">
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
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email_address" name="email_address" value="{{ old('email_address') }}">
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
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="form-control" id="country" name="country">
                                        <option value="" disabled {{ old('country') == '' ? 'selected' : '' }}>Select</option>
                                        <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>UK</option>
                                        <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
