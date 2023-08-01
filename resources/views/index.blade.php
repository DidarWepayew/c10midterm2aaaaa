<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jd Sports</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loading_screen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroller_to_top.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scroller_to_top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/loading_screen') }}"></script>

</head>
<body>
    <!-- Loading_screen -->
    <div id="preloader_malc">
        <div>
            <img src="img/6.gif" alt="">
            <p class="text-center">Ýüklenýär....<br>-- Maksadyň näme? --<br><br><br><br><br><br><br>Pikirlen!<br><i class="bi bi-emoji-smile-upside-down"></i></p>
        </div>
    </div>
    <!-- Loading_screen End-->


    <!-- Scroller_to_top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-rocket-fill"></i></button>
    <!-- Scroller_to_top End-->

    <div style="height: 50px; background-color: black;"></div>
    <div class="bg-warning">
        <div class="container pt-4 pb-4">
            <div class="d-flex ">
                <div class="p-2 flex-grow-1"><a href=""><img src="img/logo.png" alt=""></a></div>
                <div class="p-2"><a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-cart4" style="font-size: 35px;"></i></a></div>
                <div class="p-2"><a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-person-plus" style="font-size: 35px;"></i></a></div>
                <div class="p-2"><a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-box-arrow-in-right" style="font-size: 35px;"></i></a></div>
            </div>
        </div>
    </div>
    <div class="bg-black" style="font-size: 22px;">
        <ul class="nav justify-content-center">

            <li class="nav-item">
                <a class="nav-link disabled text-warning text-opacity-25">Disabled</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled text-warning text-opacity-25">Disabled</a>
            </li>

            <li class="nav-item">
                <a class="nav-link link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{route('sportswears')}}">Sportswears</a>
            </li>

            <li class="nav-item">
                <a class="nav-link link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/sport_equipments">Sport equipments</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/sport_nutritions">Sport nutritions</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled text-warning text-opacity-25">Disabled</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled text-warning text-opacity-25">Disabled</a>
            </li>
        </ul>
    </div>

    <div style="height: 50px; background-color: #464646">
        <div class="container">
            <form class="d-flex py-2 align-items-end" role="search" style="width: 400px;">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>


    <!-- -----------------------------------------------------------------SLIDER IS STARTED--------------------------------------------------------->
    <div class="bg-warning row">




        <!-- slide 1 row. slider 1-->
        <div class="container col-2 m-0 p-0">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="img/24.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- slide 1 row. slider 2 -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="8000">
                        <img src="img/4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <img src="img/5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <img src="img/6.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- slide 1 row. slider 3-->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="img/9.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- slide 1 row.  slider 4-->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="img/10.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="img/11.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="img/12.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>

        <!-- slide 2 row. main slider -->
        <div class="container col-8 m-0 p-0">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="img/mainslidephoto.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/mainslidephoto2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/mainslidephoto3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <!-- -------------------------------------------------- -->
        <!-- slide 3- row. slider 1-->
        <div class="container col-2 m-0 p-0">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="img/13.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="img/14.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="img/15.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- slide 3- row. slider 2 -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="7000">
                        <img src="img/16.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/17.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/18.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- slide 3- row.  slider 3-->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="8000">
                        <img src="img/19.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <img src="img/20.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <img src="img/21.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- slide 3- row.  slider 4-->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="img/22.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/23.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>




        <!-- -----------------------------------------------------------------SLIDER IS END--------------------------------------------------------->

        <div style="height: 25px; background-color: #464646"></div>

        <!-- -----------------------------------------------------------------SPINNERS--------------------------------------------------------->
        <div class="text-center">
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <!-- -----------------------------------------------------------------SPINNERS IS END--------------------------------------------------------->



        <div class="container">
            <div class="d-flex justify-content-center gx-5 mt-5">
                <div><a href=""><img class="gx-5 mx-3 px-3 img-fluid" src="img/logos/logoadidas.svg" style="height: 200px;" alt=""></a></div>
                <div><a href=""><img class="gx-5 mx-3 px-3 img-fluid" src="img/logos/logopuma.png" style="height: 200px;" alt=""></a></div>
                <div><a href=""><img class="gx-5 mx-3 px-3 img-fluid" src="img/logos/logoreebok.png" style="height: 200px;" alt=""></a></div>
                <div><a href=""><img class="gx-5 mx-3 px-3 img-fluid" src="img/logos/logounderarmour.png" style="height: 200px;" alt=""></a></div>
                <div><a href=""><img class="gx-5 mx-3 px-3 img-fluid" src="img/logos/logonike.png" style="height: 200px;" alt=""></a></div>
            </div>
        </div>

        <footer style="height: 300px; background-color: black; margin-top: 200px;">
            <div class="container">
                <div class="text-light">
                    <div class="mb-2 mt-5"><a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="">About</a></div>
                    <div class="mb-2"><a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="">Service</a></div>
                    <div class="mb-2"><a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="">Partners</a></div>
                    <div class="mb-2"><a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="">Feedback</a></div>
                    <div class="mt-3" style="font-size: large;">
                        <a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href=""><i class="bi bi-instagram "></i></a>
                        <a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href=""><i class="bi bi-twitter ms-3"></i></a>
                        <a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href=""><i class="bi bi-twitch ms-3"></i></a>
                        <a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href=""><i class="bi bi-linkedin ms-3"></i></a>
                        <a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href=""><i class="bi bi-youtube ms-3"></i></a>
                    </div>
                    <div class="mt-3">© 2023 JD Sports. All rights reserved.</div>
                </div>
            </div>

        </footer>

        <!-- Script -->
        <script src="js/loading_screen.js"></script>
        <script src="js/scroller_to_top.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/aos.js"></script>
        <script>
            AOS.init({
                once: true,
            });
        </script>
        <!-- Script -->










































































































</div>
</body>

</html>