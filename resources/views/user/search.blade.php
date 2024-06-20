@extends('template.user')

@section('navbar-second')
    <div class="content-top" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 tab-extra" id="view-event">
                    <div class="float-md-right mb-4"><a href="#event1" class="btn view-btn">View Event</a>
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
            <div class="">
                <ul class="nav nav-tabs col-lg-12" id="myTab-two" role="tablist">
                    <li class="nav-item text-center p-0 col-lg-2">
                        <a class="nav-link active" data-toggle="tab" href="#teratas" role="tab" aria-controls="teratas"
                            aria-selected="true">Teratas</a>
                    </li>
                    <li class="nav-item text-center p-0 col-lg-2">
                        <a class="nav-link" data-toggle="tab" href="#momen" role="tab" aria-controls="moments"
                            aria-selected="false">Momen</a>
                    </li>
                    <li class="nav-item text-center p-0 col-lg-2">
                        <a class="nav-link" data-toggle="tab" href="#akun" role="tab" aria-controls="account"
                            aria-selected="false">Akun</a>
                    </li>
                    <li class="nav-item text-center p-0 col-lg-2">
                        <a class="nav-link" data-toggle="tab" href="#tagar" role="tab" aria-controls="tagars"
                            aria-selected="false">Tagar</a>
                    </li>
                    <li class="nav-item text-center p-0 col-lg-2">
                        <a class="nav-link" data-toggle="tab" href="#komentar" role="tab" aria-controls="comments"
                            aria-selected="false">Komentar</a>
                    </li>
                    <li class="nav-item text-center p-0 col-lg-2">
                        <a class="nav-link" data-toggle="tab" href="#komentar" role="tab" aria-controls="comments"
                            aria-selected="false">Komentar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <div id="search-results" class="tab-content">
                    <div class="tab-pane fade show active" id="teratas" role="tabpanel" aria-labelledby="teratas-tab-two">
                    </div>
                    <div class="tab-pane fade search-results" id="momen" role="tabpanel"
                        aria-labelledby="moments-tab-two">
                        @if ($moments->count() > 0)
                            @foreach ($moments as $moment)
                                @if ($moment->user_id === Auth::id())
                                    <?php
                                    $tanggal = date('d', strtotime($moment->date_moment));
                                    $bulan = date('F', strtotime($moment->date_moment));
                                    $tahun = date('Y', strtotime($moment->date_moment));
                                    $hari = date('l', strtotime($moment->date_moment));
                                    ?>
                                    <div class="col-lg-12 col-md-6">
                                        <a href="#"
                                            class="search-toggle dropdown-toggle d-flex align-items-center mb-2 ml-2"
                                            id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="../assets/images/user/01.jpg" class="avatar-40 img-fluid rounded"
                                                alt="user">
                                            <div class="caption ml-3 d-flex align-items-center justify-content-center">
                                                <h6 class="mb-0 line-height">{{ Auth::user()->nama_lengkap }}</h6>
                                                <span class="mx-2">•</span>
                                                <span class="card-description">{{ $moment->created_at->format('d F Y') }}
                                                    {{ $moment->created_at->format('H:i') }}</span>
                                            </div>
                                        </a>
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail"
                                                style="border-bottom-color: {{ $moment->color }};"
                                                onmouseover="this.style.borderColor='{{ $moment->color }}'"
                                                onmouseout="this.style.borderColor='transparent'; this.style.borderBottomColor='{{ $moment->color }}'">
                                                <div class="d-flex align-items-top justify-content-between">
                                                    <div class="d-flex">
                                                        <h4 class="mb-2 mr-4">{{ $tanggal }}</h4>
                                                        <p class="mb-3 card-description">{{ $hari }},
                                                            {{ $tahun }}. {{ $bulan }}</p>
                                                    </div>
                                                    <div class="card-header-toolbar mt-1">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle" id="dropdownMenuButton03"
                                                                data-toggle="dropdown">
                                                                <i class="ri-more-2-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton03">
                                                                <a class="dropdown-item edit-moment-btn" href="#"
                                                                    data-momentid="{{ $moment->id }}"
                                                                    data-toggle="modal"
                                                                    data-target="#editMomen{{ $moment->id }}">
                                                                    <i class="ri-pencil-line mr-3"></i>Edit
                                                                </a>


                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-sticky-note-line mr-3"></i>Bookmark</a>

                                                                <form action="{{ route('destroy', $moment->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="dropdown-item"
                                                                        href="#"><i
                                                                            class="ri-delete-bin-6-line mr-3"></i>Delete</button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="momentId" value="{{ $moment->id }}">
                                                <h4 class="mb-2 mr-4">{{ $moment->title }}</h4>
                                                <p class="mb-3 card-description">{{ $moment->desc }}</p>
                                                @foreach ($moment->images as $image)
                                                    <img src="{{ asset($image->location_file) }}"
                                                        class="img-fluid rounded w-100" alt="image">
                                                @endforeach
                                                <button type="button"
                                                    class="btn btn-light rounded-pill mt-2">#ashgdahs</button>

                                            </div>
                                        </div>

                                        <button class="like-btn" data-momentid="{{ $moment->id }}">
                                            <i class="ri-heart-fill"></i> <span class="like-text">Like</span>
                                        </button>


                                        <!-- Formulir Komentar -->
                                        <button class="comment-btn" data-momentid="{{ $moment->id }}">
                                            <i class="ri-chat-3-line"></i> Comment
                                        </button>


                                        <!-- Daftar Komentar (jika ada) -->
                                        @if ($moment->comments()->count() > 0)
                                            <div class="comments">
                                                @foreach ($moment->comments as $comment)
                                                    <div class="comment">
                                                        <p>{{ $comment->comment }}</p>
                                                    </div>
                                                @endforeach

                                            </div>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p>No moments found.</p>
                        @endif
                    </div>
                    <div class="tab-pane fade search-results" id="akun" role="tabpanel"
                        aria-labelledby="account-tab-two">
                        @if ($users->count() > 0)
                            <ul>
                                @foreach ($users as $user)
                                    <div class="profile">
                                        <h2>{{ $user->username }}</h2>
                                        <p>{{ $user->email }}</p>
                                        <button class="follow-btn" data-userid="{{ $user->id }}">
                                            <span class="follow-text">Follow</span>
                                        </button>

                                    </div>
                                @endforeach

                            </ul>
                        @else
                            <p>No users found.</p>
                        @endif
                    </div>
                    <div class="tab-pane fade search-results" id="tagar" role="tabpanel"
                        aria-labelledby="tagars-tab-two">
                        @if ($hastags->count() > 0)
                            <ul>
                                @foreach ($hastags as $hastag)
                                    <li>{{ $hastag->hastag_name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No hashtags found.</p>
                        @endif
                    </div>
                    <div class="tab-pane fade search-results" id="komentar" role="tabpanel"
                        aria-labelledby="comments-tab-two">
                        <p>Lorem Ipsting and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
