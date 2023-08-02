<!DOCTYPE html>
<html>

<head>
    <title>Add Contact</title>
    <style>
    .custom-language-dropdown {
        width: 300px;
        background-color: #f2f2f2;
        border: 1px solid #ddd;
    }

    .custom-language-dropdown option {
        font-size: 16px;
        color: #555;
    }

    .card {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .card-title {
        display: flex;
        flex-direction: column;
    }

    .card-title h3 {
        font-weight: bold;
        margin: 0;
    }

    .card-toolbar {
        display: flex;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-control:focus {
        outline: none;
        border-color: #007bff;
    }

    .image-input {
        position: relative;
        width: 120px;
        height: 120px;
        border: 2px dashed #ddd;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .image-input input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    .image-input img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .select-wrapper {
        position: relative;
    }

    .select-wrapper select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        background-color: transparent;
        cursor: pointer;
    }

    .select-wrapper::after {
        content: "\f107";
        font-family: FontAwesome;
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
    }

    .select-wrapper select::-ms-expand {
        display: none;
    }
    </style>
    <link rel="stylesheet" href="{{ asset('path/to/styles.css') }}">

</head>

<body>
    @include('navigation')
    <div class="card card-custom">
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Contact Information</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Update your information</span>
            </div>
            <div class="card-toolbar">
                <div class="card-toolbar" style="margin-left: 311px;">
                    <button type="button" class="btn btn-primary mr-2" onclick="submitForm()">Save Changes</button>
                    <button type="reset" class="btn btn-secondary" onclick="resetForm()">Reset</button>
                </div>
            </div>
        </div>

        <form id="personal" method="POST" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mb-6">Contact Personal Info</h5>
                    </div>
                </div>

                <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="image-input image-input-outline" id="kt_profile_avatar">
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="image" accept=".png, .jpg, .jpeg" id="imageInput">
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" value=""
                            name="firstname" placeholder="First name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" value=""
                            name="lastname" placeholder="Last name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                            </div>
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                                value="" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Phone Number</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                            </div>
                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid"
                                value="" placeholder="Phone" required>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" name="birthday" type="date"
                            value="" placeholder="Birthday" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Job</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="job" value=""
                            placeholder="Job" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                    <div class="col-lg-9 col-xl-6">
                        <select name="language" id="language"
                            class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6 custom-language-dropdown"
                            required>
                            <option value="" selected disabled>Select Option</option>
                            <option value="English">English</option>
                            <option value="Arabic">Arabic</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">City</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <input type="text" name="city" class="form-control form-control-lg form-control-solid"
                                placeholder="City" value="" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    function submitForm() {
        document.getElementById('personal').submit();
    }

    function resetForm() {
        document.getElementById('personal').reset();
    }

    document.getElementById('imageInput').addEventListener('change', function() {
        const input = this;
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const newImageURL = e.target.result;
                document.getElementById('kt_profile_avatar').style.backgroundImage = `url(${newImageURL})`;
            };

            reader.readAsDataURL(input.files[0]);
        }
    });
    </script>

    <script src="{{asset('admin/assets/js/pages/crud/datatables/data-sources/html.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('path/to/scripts.js') }}"></script>

</body>

</html>