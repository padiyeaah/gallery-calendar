@extends('template.user')

@section('navbar-second')
    <div class="content-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="navbar-breadcrumb">
                            <h1 class="mb-1">Ceritakan Hari mu!</h1>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-extra mb-3 active" id="search-with-button">
                <div class="iq-search-bar search-device mb-0">
                    <form action="#" class="searchbox w-100">
                        <input type="text" class="text search-input" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="event-content">
                    <div id="event1" class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded event-detail event-detail-danger disabled">
                                        <div class="d-flex align-items-top justify-content-between">

                                            <a href="#"
                                                class="search-toggle dropdown-toggle d-flex align-items-center mb-2 ml-2"
                                                id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img src="../assets/images/user/01.jpg" class="avatar-40 img-fluid rounded"
                                                    alt="user">
                                                <div class="caption ml-3 d-flex align-items-center justify-content-center">
                                                    <h6 class="mb-0 line-height">//</h6>
                                                    <span class="mx-2">•</span>
                                                    <span class="card-description">//
                                                        //</span>
                                                </div>
                                            </a>
                                            <div class="d-flex align-items-top justify-content-between">
                                                {{-- <div class="d-flex">
                                                <h4 class="mb-2 mr-4">{{ $tanggal }}</h4>
                                                <p class="mb-3 card-description">{{ $hari }},
                                                    {{ $tahun }}. {{ $bulan }}</p>
                                            </div> --}}
                                                <div class="card-header-toolbar mt-1">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" id="dropdownMenuButton03"
                                                            data-toggle="dropdown">
                                                            <i class="ri-more-2-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuButton03">
                                                            {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editMomen{{ $moment->id }}"><i
                                                                class="ri-pencil-line mr-3"></i>Edit</a> --}}
                                                            {{-- @if ($moment->user_id !== Auth::id()) --}}
                                                            <a class="dropdown-item" style="color: red" href=""
                                                                data-toggle="modal" data-target="#createReportModal"
                                                                data-momentid="//">
                                                                <i class="ri-error-warning-line mr-3"></i>Laporkan
                                                            </a>
                                                            {{-- @endif --}}
                                                            {{-- @if ($moment->user_id === Auth::id()) --}}
                                                            <a class="dropdown-item edit-moment-btn" href="#"
                                                                data-momentid="//" data-toggle="modal" data-target="//">
                                                                <i class="ri-pencil-line mr-3"></i>Edit
                                                            </a>
                                                            <form action="//" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-6-line mr-3"></i>Delete</button>
                                                            </form>
                                                            {{-- @endif --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <h4 class="mb-2 mr-4 ">Pergi ke Rumah Hantu Bersama Teman Kelas</h4>
                                            <img src="../assets/images/user/01.jpg" class="img-fluid rounded w-100"
                                                alt="image">
                                            <p class="mb-3 card-description text-left">Diaryku always allows you to set the
                                                reminder to optimize task management roles and jobs.</p>

                                        </div>
                                        <div class="card-header-toolbar mt-1">
                                            <div class="dropdown d-none">
                                                <span class="dropdown-toggle" id="dropdownMenuButton1"
                                                    data-toggle="dropdown">
                                                    <i class="ri-more-2-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-pencil-line mr-3"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-sticky-note-line mr-3"></i>Add Internal Note</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-save-line mr-3"></i>Save to Template</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-code-s-slash-line mr-3"></i>Save to Website</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-delete-bin-6-line mr-3"></i>Delete</a>
                                                    <div class="dropdown-item border-top mt-2">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div>On/Off</div>
                                                            <div class="custom-control custom-switch p-0">
                                                                <input type="checkbox"
                                                                    class="custom-control-input card-change"
                                                                    id="customSwitch2" checked>
                                                                <label class="custom-control-label"
                                                                    for="customSwitch2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
