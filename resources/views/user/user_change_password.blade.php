@extends('user.user_dashboard')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <!-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Ganti Sandi</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ganti Sandi</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div> -->
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
                <!-- <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="user" style="width: 110px; height: 146.67px; object-fit: cover;" class="p-1 bg-transparent">

                                <div class="mt-3">
                                    <h4>{{ $profileData->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $profileData->username }}</p> -->
                <!-- <p class="text-muted font-size-sm">{{ $profileData->email }}</p> -->
                <!-- <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                            <hr class="my-4" />
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                        </svg>Website</h6>
                                    <span class="text-secondary">https://codervent.com</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-8">
                    <div class="card">

                        <form method="POST" action="{{ route('user.password.update') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Sandi lama </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" />
                                        @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Sandi baru </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" />
                                        @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Ulangi sandi </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" />
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



@endsection