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
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Profil Saya</div>
        <!-- <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
        </div> -->
        <div class="ms-auto">

        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif


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
                                        <a class="nav-link" id="riwayatfungsional-tab" data-bs-toggle="tab" href="#riwayatfungsional" role="tab" aria-controls="riwayatfungsional" aria-selected="false">Riwayat Fungsional</a>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pekerjaan-tab" data-bs-toggle="tab" href="#pekerjaan" role="tab" aria-controls="pekerjaan" aria-selected="false">Pekerjaan</a>
                                    </li> -->
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
                                                    <h6 class="mb-0">NIP</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="number" name="nip" class="form-control" value="{{ $profileData->nip }}" />
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
                                                    <h6 class="mb-0">Tempat lahir</h6>
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
                                                    <h6 class="mb-0">Kota / Kabupaten</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select name="kabupaten" class="form-control">
                                                        <option value="" disabled {{ empty($profileData->kabupaten) ? 'selected' : '' }}>Pilih Kota / Kabupaten</option>
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
                                                    <input type="email" name="email" class="form-control" value="{{ $profileData->email }}" readonly />
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

                                    <!-- Konten riwayatfungsional -->
                                    <div class="tab-pane fade" id="riwayatfungsional" role="tabpanel" aria-labelledby="riwayatfungsional-tab">
                                        <div class="card-body mb-3">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jenis Fungsional</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select name="jns_fungsional" class="form-control">
                                                        <option value="" disabled {{ empty($profileData->jns_fungsional) ? 'selected' : '' }}>Pilih Jenis Fungsional</option>
                                                        <option value="Administrator Kesehatan" {{ $profileData->jns_fungsional == 'Administrator Kesehatan' ? 'selected' : '' }}>Administrator Kesehatan</option>
                                                        <option value="Apoteker" {{ $profileData->jns_fungsional == 'Apoteker' ? 'selected' : '' }}>Apoteker</option>
                                                        <option value="Keterampilan" {{ $profileData->jns_fungsional == 'Keterampilan' ? 'selected' : '' }}>Keterampilan</option>
                                                        <option value="Bidan" {{ $profileData->jns_fungsional == 'Bidan' ? 'selected' : '' }}>Bidan</option>
                                                        <option value="Dokter" {{ $profileData->jns_fungsional == 'Dokter' ? 'selected' : '' }}>Dokter</option>
                                                        <option value="Dokter Gigi" {{ $profileData->jns_fungsional == 'Dokter Gigi' ? 'selected' : '' }}>Dokter Gigi</option>
                                                        <option value="Dokter Pendidik Klinis" {{ $profileData->jns_fungsional == 'Dokter Pendidik Klinis' ? 'selected' : '' }}>Dokter Pendidik Klinis</option>
                                                        <option value="Epidemiolog Kesehatan" {{ $profileData->jns_fungsional == 'Epidemiolog Kesehatan' ? 'selected' : '' }}>Epidemiolog Kesehatan</option>
                                                        <option value="Entomolog Kesehatan" {{ $profileData->jns_fungsional == 'Entomolog Kesehatan' ? 'selected' : '' }}>Entomolog Kesehatan</option>
                                                        <option value="Fisioterapis" {{ $profileData->jns_fungsional == 'Fisioterapis' ? 'selected' : '' }}>Fisioterapis</option>
                                                        <option value="Fisikawan Medis" {{ $profileData->jns_fungsional == 'Fisikawan Medis' ? 'selected' : '' }}>Fisikawan Medis</option>
                                                        <option value="Nutrisionis" {{ $profileData->jns_fungsional == 'Nutrisionis' ? 'selected' : '' }}>Nutrisionis</option>
                                                        <option value="Okupasi Terapis" {{ $profileData->jns_fungsional == 'Okupasi Terapis' ? 'selected' : '' }}>Okupasi Terapis</option>
                                                        <option value="Orthotis Prostetis" {{ $profileData->jns_fungsional == 'Orthotis Prostetis' ? 'selected' : '' }}>Orthotis Prostetis</option>
                                                        <option value="Pembimbing Kesehatan Kerja" {{ $profileData->jns_fungsional == 'Pembimbing Kesehatan Kerja' ? 'selected' : '' }}>Pembimbing Kesehatan Kerja</option>
                                                        <option value="Tenaga Promosi Kesehatan dan Ilmu Perilaku" {{ $profileData->jns_fungsional == 'Tenaga Promosi Kesehatan dan Ilmu Perilaku' ? 'selected' : '' }}>Tenaga Promosi Kesehatan dan Ilmu Perilaku (dahulu Penyuluh Kesehatan Masyarakat)</option>
                                                        <option value="Perawat" {{ $profileData->jns_fungsional == 'Perawat' ? 'selected' : '' }}>Perawat</option>
                                                        <option value="Terapis Gigi dan Mulut" {{ $profileData->jns_fungsional == 'Terapis Gigi dan Mulut' ? 'selected' : '' }}>Terapis Gigi dan Mulut (dahulu Perawat Gigi)</option>
                                                        <option value="Perekam Medis" {{ $profileData->jns_fungsional == 'Perekam Medis' ? 'selected' : '' }}>Perekam Medis</option>
                                                        <option value="Pranata Laboratorium Kesehatan" {{ $profileData->jns_fungsional == 'Pranata Laboratorium Kesehatan' ? 'selected' : '' }}>Pranata Laboratorium Kesehatan</option>
                                                        <option value="Psikolog Klinis" {{ $profileData->jns_fungsional == 'Psikolog Klinis' ? 'selected' : '' }}>Psikolog Klinis</option>
                                                        <option value="Radiografer" {{ $profileData->jns_fungsional == 'Radiografer' ? 'selected' : '' }}>Radiografer</option>
                                                        <option value="Refraksionis Optisien" {{ $profileData->jns_fungsional == 'Refraksionis Optisien' ? 'selected' : '' }}>Refraksionis Optisien</option>
                                                        <option value="Tenaga Sanitasi Lingkungan" {{ $profileData->jns_fungsional == 'Tenaga Sanitasi Lingkungan' ? 'selected' : '' }}>Tenaga Sanitasi Lingkungan (dahulu Sanitarian)</option>
                                                        <option value="Teknisi Elektromedis" {{ $profileData->jns_fungsional == 'Teknisi Elektromedis' ? 'selected' : '' }}>Teknisi Elektromedis</option>
                                                        <option value="Teknisi Gigi" {{ $profileData->jns_fungsional == 'Teknisi Gigi' ? 'selected' : '' }}>Teknisi Gigi</option>
                                                        <option value="Teknisi Transfusi Darah" {{ $profileData->jns_fungsional == 'Teknisi Transfusi Darah' ? 'selected' : '' }}>Teknisi Transfusi Darah</option>
                                                        <option value="Terapis Wicara" {{ $profileData->jns_fungsional == 'Terapis Wicara' ? 'selected' : '' }}>Terapis Wicara</option>
                                                        <option value="Asisten Penata Anestesi" {{ $profileData->jns_fungsional == 'Asisten Penata Anestesi' ? 'selected' : '' }}>Asisten Penata Anestesi</option>
                                                        <option value="Penata Anestesi" {{ $profileData->jns_fungsional == 'Penata Anestesi' ? 'selected' : '' }}>Penata Anestesi</option>
                                                        <option value="Ortotis Prostetis" {{ $profileData->jns_fungsional == 'Ortotis Prostetis' ? 'selected' : '' }}>Ortotis Prostetis</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jenis Pengangkatan Jabatan Fungsional</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="jns_pengangkatan_jabfung" class="form-control" value="{{ $profileData->jns_pengangkatan_jabfung }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jenjang Jabatan Fungsional</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select name="jenjang_jabfung" class="form-control">
                                                        <option value="" disabled {{ empty($profileData->jenjang_jabfung) ? 'selected' : '' }}>Pilih Jenjang Jabfung</option>

                                                        <!-- Jenjang Jabatan Fungsional Keahlian -->
                                                        <option value="" disabled>Jenjang Jabatan Fungsional Keahlian</option>
                                                        <option value="Ahli Utama" {{ $profileData->jenjang_jabfung == 'Ahli Utama' ? 'selected' : '' }}>Ahli Utama</option>
                                                        <option value="Ahli Madya" {{ $profileData->jenjang_jabfung == 'Ahli Madya' ? 'selected' : '' }}>Ahli Madya</option>
                                                        <option value="Ahli Muda" {{ $profileData->jenjang_jabfung == 'Ahli Muda' ? 'selected' : '' }}>Ahli Muda</option>
                                                        <option value="Ahli Pertama" {{ $profileData->jenjang_jabfung == 'Ahli Pertama' ? 'selected' : '' }}>Ahli Pertama</option>

                                                        <!-- Jenjang Jabatan Fungsional Keterampilan -->
                                                        <option value="" disabled>Jenjang Jabatan Fungsional Keterampilan</option>
                                                        <option value="Penyelia" {{ $profileData->jenjang_jabfung == 'Penyelia' ? 'selected' : '' }}>Penyelia</option>
                                                        <option value="Mahir" {{ $profileData->jenjang_jabfung == 'Mahir' ? 'selected' : '' }}>Mahir</option>
                                                        <option value="Terampil" {{ $profileData->jenjang_jabfung == 'Terampil' ? 'selected' : '' }}>Terampil</option>
                                                        <option value="Pemula" {{ $profileData->jenjang_jabfung == 'Pemula' ? 'selected' : '' }}>Pemula</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Angka Kredit Terakhir</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="angka_kredit_terakhir" class="form-control" value="{{ $profileData->angka_kredit_terakhir }}" />
                                                </div>
                                            </div>
                                            <!-- Tambahkan field lain untuk informasi jns_fungsional -->
                                        </div>
                                    </div>
                                    <!-- Konten Pekerjaan -->
                                    <!-- <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
                                        <div class="card-body mb-3">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Pekerjaan</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="pekerjaan" class="form-control" value="{{ $profileData->pekerjaan }}" />
                                                </div>
                                            </div>
                                            Tambahkan field lain untuk informasi riwayatfungsional
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-secondary px-4" value="Simpan" />
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
