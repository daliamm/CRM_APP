<!DOCTYPE html>
<html>

<head>
    <title>Edit Contact</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .select-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f2f2f2;
    }

    .btn {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-subtitle {
        font-size: 16px;
        color: #888;
    }

    .avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-size: cover;
        background-position: center;
        margin: 0 auto 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        @include('navigation')

        <div class="card">
            <div class="card-title">Contact Information</div>
            <div class="card-subtitle">Update your information</div>
            <form id="personal" method="POST" action="{{ route('contacts.update',$contact) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="avatar" style="background-image: url({{ $contact->image }})"></div>
                    <input type="file" name="image" id="imageInput">
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control"
                        value="{{ old('firstname', $contact->firstname) }}" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control"
                        value="{{ old('lastname', $contact->lastname) }}">
                </div>
                <div class="form-group">
                    <label for="birthday">Date of Birth</label>
                    <input type="date" name="birthday" id="birthday" class="form-control"
                        value="{{ old('birthday', $contact->birthday) }}">
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" name="job" id="job" class="form-control"
                        value="{{ old('job', $contact->job) }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <select name="language" id="language" class="select-control">
                        <option value="" selected disabled>Select Option</option>
                        <option value="English" {{ $contact->language == 'English' ? 'selected' : '' }}>English</option>
                        <option value="Arabic" {{ $contact->language == 'Arabic' ? 'selected' : '' }}>Arabic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ old('email', $contact->email) }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control"
                        value="{{ old('phone', $contact->phone) }}">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control"
                        value="{{ old('city', $contact->city) }}">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" onclick="submitForm()">Save Changes</button>
                    <button type="reset" class="btn btn-secondary" onclick="resetForm()">Reset</button>
                </div>
            </form>
        </div>
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
</body>

</html>
