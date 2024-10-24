<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <title>Register</title>
</head>

<body class="">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">

                    <div
                        class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                            <div class="card-body">
                                <img src="{{ asset('backend/assets/images/login-images/login-cover.svg') }}"
                                    class="img-fluid auth-img-cover-login" width="550" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                        <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                            <div class="card-body p-sm-5">
                                <div class="">
                                    <div class="mb-3 text-center">
                                        <img src="{{ asset('backend/assets/images/logo-jambi.png') }}" width="60" alt="" />
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">Register</h5>
                                        <p class="mb-0">Silakan isi detail di bawah ini untuk membuat akun Anda</p>
                                    </div>
                                    <div class="form-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputNIK" class="form-label">NIK</label>
                                                <input type="number" name="nik" class="form-control" id="inputNIK"
                                                    placeholder="" required>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <label for="nama" class="form-label">Name</label>
                                                <input type="text" id="nama" class="form-control" name="nama"
                                                    :value="old('nama')" required autofocus autocomplete="nama" />
                                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                                            </div>
                                            <div class="col-12 mt-4">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <input type="email" id="email" class="form-control" name="email"
                                                    :value="old('email')" required autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="input-box mt-4">
                                                <label class="label-text">Sandi</label>
                                                <div class="form-group">
                                                    <input class="form-control form--control" id="password"
                                                        type="password" name="password" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="input-box mt-4">
                                                <label class="label-text">Ulangi Sandi</label>
                                                <div class="form-group">
                                                    <input class="form-control form--control" id="password_confirmation"
                                                        type="password" name="password_confirmation" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" required>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Saya
                                                        membaca dan menyetujui Syarat & Ketentuan</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-info">Mendaftar</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center ">
                                                    <p class="mb-0">Sudah punya akun? <a
                                                            href="{{ route('login') }}">Masuk di sini</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>