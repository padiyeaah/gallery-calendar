@extends('template.user')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-3">
                    <h4 class="">Buatlah kenangan dan abadikan di Diaryku!</h4>


                    <div class="create-workform">
                        <a href="#" data-toggle="modal" data-target="#date-event"
                            class="btn btn-primary pr-5 position-relative">New Schedule<span class="add-btn"><i
                                    class="ri-add-line"></i></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body">
                                <div id="calendar1" class="calendar-s"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
