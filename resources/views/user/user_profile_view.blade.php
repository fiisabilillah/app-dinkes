@extends('user.user_dashboard')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .photo-3x4 {
        width: 120px;
        /* Sesuaikan lebar foto dengan rasio 3x4 */
        height: 160px;
        /* Sesuaikan tinggi foto dengan rasio 3x4 */
        object-fit: cover;
        /* Agar gambar tetap dalam proporsi */
        border-radius: 0;
        /* Pastikan gambar tetap kotak, bukan bulat */
    }

    .card-body {
        margin-bottom: 20px;
        /* Jarak antar card-body */
        border: 1px solid #ddd;
        /* Border pada card-body */
        border-radius: 5px;
        /* Sudut melengkung */
        padding: 15px;
        /* Padding di dalam card-body */
        background-color: #f9f9f9;
        /* Warna latar belakang */
    }
</style>
<div class="page-content">
    <div class="container">
        <div class="main-body">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="card-body mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-auto">
                                        <div class="row mb-3 align-items-center"> <!-- Menambahkan align-items-center untuk penataan vertikal -->
                                            <div class="col-sm-3 text-center">
                                                <img id="showImage" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="Admin" class="photo-3x4 p-1 bg-transparent" />
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <h6 class="mb-0">{{ $profileData->nama }}</h6> <!-- Menampilkan nama di sini -->
                                                <input type="file" name="photo" class="form-control mt-2" id="image" /> <!-- Menambahkan margin-top untuk jarak -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="chart1"></div>
                                </div>
                            </div>


                            <div class="container mt-5">
                                <!-- Tab menu -->
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="data-diri-tab" data-bs-toggle="tab" href="#data-diri" role="tab" aria-controls="data-diri" aria-selected="true">Data Diri</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profesi-tab" data-bs-toggle="tab" href="#profesi" role="tab" aria-controls="profesi" aria-selected="false">Profesi</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pekerjaan-tab" data-bs-toggle="tab" href="#pekerjaan" role="tab" aria-controls="pekerjaan" aria-selected="false">Pekerjaan</a>
                                    </li>
                                    <!-- Tambahkan tab lain sesuai kebutuhan -->
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <!-- Konten Data Diri -->
                                    <div class="tab-pane fade show active" id="data-diri" role="tabpanel" aria-labelledby="data-diri-tab">
                                        <div class="card-body mb-3">
                                            <div class="row mb-3">
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="hidden" name="username" class="form-control" value="{{ $profileData->username }}" readonly />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nama</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="nama" class="form-control" value="{{ $profileData->nama }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">NIK</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="number" name="nik" class="form-control" value="{{ $profileData->nik }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">NIP</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="number" name="nip" class="form-control" value="{{ $profileData->nip }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Tempat</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="tempat" class="form-control" value="{{ $profileData->tempat }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Tanggal lahir</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $profileData->tgl_lahir }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jenis kelamin</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select name="jk" class="form-control">
                                                        <option value="" disabled {{ empty($profileData->jk) ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki" {{ $profileData->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                        <option value="Perempuan" {{ $profileData->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Kabupaten</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select name="kabupaten" class="form-control">
                                                        <option value="" disabled {{ empty($profileData->kabupaten) ? 'selected' : '' }}>Pilih Kabupaten</option>
                                                        <option value="Batanghari" {{ $profileData->kabupaten == 'Batanghari' ? 'selected' : '' }}>Batanghari</option>
                                                        <option value="Bungo" {{ $profileData->kabupaten == 'Bungo' ? 'selected' : '' }}>Bungo</option>
                                                        <option value="Jambi" {{ $profileData->kabupaten == 'Jambi' ? 'selected' : '' }}>Jambi</option>
                                                        <option value="Kerinci" {{ $profileData->kabupaten == 'Kerinci' ? 'selected' : '' }}>Kerinci</option>
                                                        <option value="Merangin" {{ $profileData->kabupaten == 'Merangin' ? 'selected' : '' }}>Merangin</option>
                                                        <option value="Muaro Jambi" {{ $profileData->kabupaten == 'Muaro Jambi' ? 'selected' : '' }}>Muaro Jambi</option>
                                                        <option value="Sungai Penuh" {{ $profileData->kabupaten == 'Sungai Penuh' ? 'selected' : '' }}>Sungai Penuh</option>
                                                        <option value="Tanjung Jabung Barat" {{ $profileData->kabupaten == 'Tanjung Jabung Barat' ? 'selected' : '' }}>Tanjung Jabung Barat</option>
                                                        <option value="Tanjung Jabung Timur" {{ $profileData->kabupaten == 'Tanjung Jabung Timur' ? 'selected' : '' }}>Tanjung Jabung Timur</option>
                                                        <option value="Tebo" {{ $profileData->kabupaten == 'Tebo' ? 'selected' : '' }}>Tebo</option>
                                                        <option value="Sarolangun" {{ $profileData->kabupaten == 'Sarolangun' ? 'selected' : '' }}>Sarolangun</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="email" name="email" class="form-control" value="{{ $profileData->email }}" readonly/>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="phone" class="form-control" value="{{ $profileData->phone }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Alamat</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="alamat" class="form-control" value="{{ $profileData->alamat }}" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Konten Profesi -->
                                    <div class="tab-pane fade" id="profesi" role="tabpanel" aria-labelledby="profesi-tab">
                                        <div class="card-body mb-3">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Profesi</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="profesi" class="form-control" value="{{ $profileData->profesi }}" />
                                                </div>
                                            </div>
                                            <!-- Tambahkan field lain untuk informasi profesi -->
                                        </div>
                                    </div>
                                    <!-- Konten Pekerjaan -->
                                    <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
                                        <div class="card-body mb-3">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Pekerjaan</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="pekerjaan" class="form-control" value="{{ $profileData->pekerjaan }}" />
                                                </div>
                                            </div>
                                            <!-- Tambahkan field lain untuk informasi profesi -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-info px-4" value="Save Changes" />
                                        </div>
                                    </div>
                                    <br>
                                </div>

                            </div>

                            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->



                        </form>


                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection