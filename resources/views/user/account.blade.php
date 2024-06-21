@extends('template.user')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="profile-card-header d-flex flex-column align-content-center justify-content-center">
                        <img src="../assets/images/user/01.jpg" class="avatar-40 img-fluid rounded w-25 h-25" alt="user">
                    <div class="profile-info">
                        <h3 class="profile-name">
                            <h5 class="card-title">Username</h5>
                        </h3>
                    </div>
                </div>

                <div class="d-flex align-items-center flex-column">
                    <ul class="status p-0" style="width: 70%">
                        <li class="d-flex flex-column">
                            <span class="status-value">0</span>
                            <span class="status-text">Momen</span>
                        </li>
                        <li class="d-flex flex-column">
                            <span class="status-value">0</span>
                            <span class="status-text">Followers</span>
                        </li>
                        <li class="d-flex flex-column">
                            <span class="status-value">0</span>
                            <span class="status-text">Following</span>
                        </li>
                        <li class="d-flex flex-column">
                            <span class="status-value">0</span>
                            <span class="status-text">Likes</span>
                        </li>
                    </ul>
                </div>

                <div class="card mb-5">
                    <div class="p-3">
                        <ul class="nav nav-pills nav-fill" id="pills-tab-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill"
                                    href="#pills-home-fill" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Momen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab-fill" data-toggle="pill"
                                    href="#pills-contact-fill" role="tab" aria-controls="pills-contact"
                                    aria-selected="false">Bookmarks</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent-1">
                    <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel"
                        aria-labelledby="pills-home-tab-fill">
                        <!-- User Moments Section -->
                        <div class="col-lg-12 col-md-6 p-0">
                            <a href="#" class="search-toggle dropdown-toggle d-flex align-items-center mb-2 ml-2"
                                id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/user/01.jpg" class="avatar-40 img-fluid rounded" alt="user">
                                <div class="caption ml-3 d-flex align-items-center justify-content-center">
                                    <h6 class="mb-0 line-height">Full Name</h6>
                                    <span class="mx-2">•</span>
                                    <span class="card-description">Date</span>
                                </div>
                            </a>
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body rounded event-detail" style="border-bottom-color: #000;">
                                    <div class="d-flex align-items-top justify-content-between">
                                        <div class="d-flex">
                                            <h4 class="mb-2 mr-4">Day</h4>
                                            <p class="mb-3 card-description">Day, Year. Month</p>
                                        </div>
                                        <div class="card-header-toolbar mt-1">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton03"
                                                    data-toggle="dropdown">
                                                    <i class="ri-more-2-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton03">
                                                    <a class="dropdown-item" style="color: red" href="#"
                                                        data-toggle="modal" data-target="#createReportModal">
                                                        <i class="ri-error-warning-line mr-3"></i>Laporkan
                                                    </a>
                                                    <a class="dropdown-item edit-moment-btn" href="#"
                                                        data-toggle="modal" data-target="#editMomen">
                                                        <i class="ri-pencil-line mr-3"></i>Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-delete-bin-6-line mr-3"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mb-2 mr-4" style="text-align: center;">Title</h4>
                                    <img src="../assets/images/sample.jpg" class="img-fluid rounded"
                                        style="width: 250px; margin: 0 auto; display: flex;" alt="image">
                                    <p class="mb-3 card-description" style="text-align: justify;">Description</p>
                                    <button type="button" class="btn btn-light rounded-pill mt-2">
                                        #Hashtag
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="row">
                                    <div class="like-btn">
                                        <div class="heart"></div>
                                    </div>
                                    <button class="bookmark-btn" style="position: absolute; right: 0; margin-top: 15px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z" />
                                            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 19l7-3 7 3V5c0-1.1-.9-2-2-2zm-5 9l-2 2H8v-2H6v-2h2V8h2v2h2v2h-2z" />
                                        </svg>
                                    </button>
                                    <i class="ri-chat-1-line icon" data-toggle="modal" data-target="#detailMomen"></i>
                                </div>
                            </div>
                            <span class="like-count px-2">0 suka</span>
                            <div class="form-group comments">
                                <input class="form-control comment" name="comment" rows="3" placeholder="Add a comment..."></input>
                                <i class="ri-send-plane-2-line post-comment-btn"
                                    style="position: absolute; right: 20px; bottom: 35px; cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-contact-fill" role="tabpanel"
                        aria-labelledby="pills-contact-tab-fill">
                        <div class="bookmark-container box1-group d-flex">
                            <div class="bookmark-post mb-5">
                                <img src="../assets/images/sample.jpg" class="img-fluid rounded"
                                    style="width: 250px; margin: 0 auto; display: flex;" alt="image">
                                <div class="title">Title</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

