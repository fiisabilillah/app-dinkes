@extends('user.user_dashboard')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">

                        <form method="POST" action="{{ route('user.password.update') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <!-- Sandi Lama -->
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Sandi lama</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <div class="input-group">
                                            <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" />
                                            <button class="btn btn-outline-secondary" type="button" id="toggleOldPassword">
                                                <i class="bi bi-eye-slash" id="oldPasswordIcon"></i>
                                            </button>
                                        </div>
                                        @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Sandi Baru -->
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Sandi baru</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <div class="input-group">
                                            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" />
                                            <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                                                <i class="bi bi-eye-slash" id="newPasswordIcon"></i>
                                            </button>
                                        </div>
                                        @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Ulangi Sandi -->
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Ulangi sandi</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <div class="input-group">
                                            <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" />
                                            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                                <i class="bi bi-eye-slash" id="confirmPasswordIcon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-info px-4" value="Simpan" />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk toggle password visibility -->
<script>
    // Toggle untuk sandi lama
    $('#toggleOldPassword').on('click', function() {
        const passwordField = $('#old_password');
        const passwordIcon = $('#oldPasswordIcon');
        const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        passwordIcon.toggleClass('bi-eye bi-eye-slash');
    });

    // Toggle untuk sandi baru
    $('#toggleNewPassword').on('click', function() {
        const passwordField = $('#new_password');
        const passwordIcon = $('#newPasswordIcon');
        const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        passwordIcon.toggleClass('bi-eye bi-eye-slash');
    });

    // Toggle untuk konfirmasi sandi
    $('#toggleConfirmPassword').on('click', function() {
        const passwordField = $('#new_password_confirmation');
        const passwordIcon = $('#confirmPasswordIcon');
        const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        passwordIcon.toggleClass('bi-eye bi-eye-slash');
    });
</script>

@endsection
