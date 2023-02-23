<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">



    <title>Klassy Cafe - Restaurant HTML Template</title>
    <!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>



    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->





    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/') }}#about">About</a></li>

                            <li class="scroll-to-section"><a href="{{ url('/') }}#menu">Menu</a></li>

                            <li class="scroll-to-section"><a href="{{ url('/') }}#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{ url('/') }}#reservation">Contact Us</a></li>
                            <li class="scroll-to-section" style="background-color: red;">
                                @auth
                                    <a href="{{ url('/showcart', Auth::user()->id) }}">
                                        Cart [{{ $count }}]
                                    </a>
                                @endauth
                                @guest
                                    <a href="javascript:void(0);">Cart [0]</a>
                                    {{-- Cart[0] --}}
                                @endguest
                                </a>
                            </li>
                            <li>
                                @if (Auth::check())
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <a href="{{ url('user/profile') }}" class="dropdown-item"
                                                type="button">Profile</a>
                                            <a href="{{ route('user.logout') }}" class="dropdown-item"
                                                type="button">Logout</a>
                                        </div>
                                    </div>
                                @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 underline">Register</a>
                                </li>
                            @endif
                            @endif
                            {{-- @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        <li>

                                            <x-app-layout>

                                            </x-app-layout>

                                        </li>
                                        @endauth
                                    </div>
                                @else
                                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                        </li>
                                    @endif
                                @endif --}}
                            </li>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @if (session()->has('success'))
        <div class="alert alert-dismissable alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                {!! session()->get('success') !!}
            </strong>
        </div>
    @endif
    @if (isset($errors))
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $error }}
                </div>
            @endforeach
        @endif
    @endif


    <div id="top" style="overflow-x: hidden;">


        <table align="center" bgcolor="yellow">


            <tr>
                <th style="padding: 30px;">Food Name</th>
                <th style="padding: 30px;">Price</th>
                <th style="padding: 30px;">Quantity</th>
                <th style="padding: 30px;">Action</th>

            </tr>



            <form action="{{ url('orderconfirm') }}" method="POST">

                @csrf

                @foreach ($data as $data)
                    <tr align="center">

                        <td>

                            <input type="text" name="foodname[]" value="{{ $data->title }}" hidden="">
                            {{ $data->title }}
                        </td>

                        <td>
                            <input type="text" name="price[]" value="{{ $data->price }}" hidden="">
                            {{ $data->price }}

                        </td>
                        <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">

                        <td>{{ $data->quantity }}</td>

                        <td>
                            <a class="btn btn-warning" href="{{ url('/remove', $data->id) }}">Remove</a>
                        </td>

                    </tr>
                @endforeach


                {{-- @foreach ($data2 as $data2)
                    <tr style="position: relative; top: -80px; left:360px;">

                        <td>
                            <a class="btn btn-warning" href="{{ url('/remove', $data2->id) }}">Remove</a>
                        </td>

                    </tr>
                @endforeach --}}




        </table>


        @if ($data->count() > 0)
            <div align="center" style="padding: 10px;">

                <button class="btn btn-primary" type="button" id="order">Order Now</button>

            </div>
        @else
            <p class="text-center text-danger mt-5" style="font-size: 26px">Your cart is empty</p>
        @endif




        <div id="appear" align="center" style="padding: 10px; display: none;">


            <div style="padding: 10px;">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>

            <div style="padding: 10px;">
                <label>Phone</label>
                <input type="number" name="phone" placeholder="Phone Number">
            </div>

            <div style="padding: 10px;">
                <label>Address</label>
                <input type="text" name="address" placeholder="Address">
            </div>


            <div style="padding: 10px;">

                <input class="btn btn-success" type="submit" value="Order Confirm">

                <button id="close" type="button" class="btn btn-danger">Close</button>
            </div>


        </div>

        </form>
    </div>


    <script type="text/javascript">
        $("#order").click(

            function() {
                $("#appear").show();

            }
        );




        $("#close").click(

            function() {
                $("#appear").hide();

            }
        );
    </script>




    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
