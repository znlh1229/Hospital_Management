{{-- --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.link')
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')

        <div class="container-fluid page-body-wrapper ">

            @include('admin.navbar')

            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
            <div class="container mt-6">
                <h1 class="text-danger">Add Doctors</h1>

                <div class="contact__wrapper shadow-lg my-5">
                    <div class="row no-gutters my-5">
                        <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                            <h3 class="color--white my-5">Get in Touch</h3>

                            <ul class="contact-info__list list-style--none position-relative z-index-101">
                                <li class="mb-4 pl-4">
                                    <span class="position-absolute"><i class="fas fa-envelope"></i></span>
                                    support@bootdey.com
                                </li>
                                <li class="mb-4 pl-4">
                                    <span class="position-absolute"><i class="fas fa-phone"></i></span>
                                    (021)-241454-545
                                </li>
                                <li class="mb-4 pl-4">
                                    <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span>
                                    bootdey
                                    Technologies Inc.
                                    <br> 2694 Queen City Rainbow Drive
                                    <br> Florida 99161

                                    <div class="mt-3">
                                        <a href="https://www.google.com/maps" target="_blank"
                                            class="text-link link--right-icon text-white">Get directions <i
                                                class="link__icon fa fa-directions"></i></a>
                                    </div>
                                </li>
                            </ul>

                            <figure class="figure position-absolute m-0 opacity-06 z-index-100"
                                style="bottom:0; right: 10px">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="444px" height="626px">
                                    <defs>
                                        <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%"
                                            y2="0%">
                                            <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1">
                                            </stop>
                                            <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                                        </linearGradient>

                                    </defs>
                                    <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)"
                                        d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z">
                                    </path>
                                    <path fill="url(#PSgrad_1)"
                                        d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z">
                                    </path>
                                </svg>
                            </figure>
                        </div>

                        <div class="col-lg-7  contact-form__wrapper p-5 order-lg-1">
                            <h1 class="text-white " style="font-size: 30px">Add Doctor</h1>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <form action="{{ url('upload_doctor') }}" class="contact-form form-validate my-5"
                                novalidate="novalidate" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row ">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="required-field" for="firstName">Doctor Name</label>
                                            <input type="text" class="form-control bg-white text-dark" id="firstName"
                                                name="name">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="lastName">Phone</label>
                                            <input type="text" class="form-control bg-white text-dark" id="lastName"
                                                name="phone">
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="required-field " for="email">Speciality</label>

                                            <select name="speciality" id=""
                                                class="form-control bg-white text-dark" value="">
                                                <option value="">General Health</option>
                                                <option value="skin">Cardiology</option>
                                                <option value="heart">Dental</option>
                                                <option value="eye">Neurology</option>
                                                <option value="nose">Orthopaedics</option>
                                            </select>
                                            @error('speciality')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="room">Room Number</label>
                                            <input type="text" class="form-control bg-white text-dark" id="room"
                                                name="room">
                                            @error('room')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label for="room">Doctor Image</label>
                                            <input type="file" class="form-control bg-white text-dark"
                                                id="room" name="image">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <button type="submit" name="submit" class="btn btn-primary">Add
                                            Doctor</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @include('admin.script')
</body>

</html>
