@extends('template.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="py-4 border-bottom">
                    <div class="form-title ">
                        <h3>Tagar yang Sedang Tren ^o^</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-top justify-content-between">
                            <h5 class="mb-2 mr-4">#//</h5>
                            <p>// memakai</p>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-success mr-3 px-xl-3">Gunakan</a>
                                <a href="#" class="btn btn-outline-success copy px-xl-3" data-extra-toggle="copy"
                                    title="Copy to clipboard" data-toggle="tooltip"><i
                                        class="las la-link pr-2"></i>Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
