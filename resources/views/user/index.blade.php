@extends('user.user_dashboard')
@section('user')
<div class="page-content">
    <div class="row row-cols-1 row-cols-md-12 row-cols-xl-12 row-cols-xxl-4">
        <div class="col">
            <div class="card radius-10 bg-gradient-ohhappiness">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-auto" style="padding: 10px;">
                            <p class="mb-0 text-white" style="font-size: 28px; text-transform: uppercase; padding-bottom: 10px;">Selamat datang di SDMK Provinsi Jambi</p>
                            <p class="mb-0 font-13 text-white" style="font-size: 16px;padding-bottom: 10px;">Media profil tenaga kesehatan di Indonesia yang terpusat untuk efisiensi pengelolaan data SDM kesehatan.</p>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>

    </div><!--end row-->

</div>
@endsection
