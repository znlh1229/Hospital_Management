<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health </title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> 09 453994262</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span>
                                zarnilinhtet.work@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="https://zarnilinhtet.github.io/MyPortfolio/"><span
                                    class="mai-logo-github"></span></a>


                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/html/about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/html/doctors.html">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/html/blog.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/html/contact.html">Contact</a>
                        </li>

                        @if (Route::has('login'))
                            @auth

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/show_appointment') }}"
                                        style="background-color:#00D9A5;color:white">My
                                        Appointment</a>
                                </li>
                                <li>
                                    <x-app-layout>

                                    </x-app-layout>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login </a>


                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div class="mt-5 container-fluid">

        @if (session('delete_success'))
            <div class="alert alert-success">
                {{ session('delete_success') }}
            </div>
        @endif
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>

                    <th scope="col">Doator Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <th scope="col">Cancel Appointment</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $no = '1';
                @endphp
                @foreach ($appoint as $appoints)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $appoints->name }}</td>
                        <td>{{ $appoints->date }}</td>
                        <td>{{ $appoints->message }}</td>
                        <td>{{ $appoints->status }}</td>
                        <td><a href="{{ url('cancel_appointment', $appoints->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are your sure you want to cancel this ??')">Cancel</a>
                        </td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                @endforeach

            </tbody>
        </table>
    </div>




    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
