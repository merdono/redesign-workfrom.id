<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <!-- Bootstrap AIzaSyAp6AUwZ_WsMG-2ue46EoV9Cz7EUDXHU-w -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
        crossorigin="anonymous"
    />

    />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&family=Poppins:wght@500&family=Roboto&display=swap"
        rel="stylesheet"
    />
    
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Bootstrap demo</title>
</head>
<body>
    <nav
        class="navbar navbar-expand-md navbar-light bg-light custom-navbar fixed-top"
    >
        <div class="container p-3">
            <a class="navbar-brand d-flex align-items-center" href="/dashboard">
                <img src="/img/logo.png"/>
            </a>
            <button
                class="navbar-toggler ml-auto"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li classna="nav-item mr-2">
                        <a href="/register"><button class="btn custom-button1">Register</button></a>
                    </li>
                    <li class="nav-item">
                        <a href="/login"><button class="btn custom-button">Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div>
        @yield('')
    </div>

    <footer>
    <div class="row container-fluid">
        <div class="col-4 ml-5">
            <div class="d-flex">
                <img
                    class="mb-4"
                    src="/img/logo.png"
                    alt=""
                />
            </div>
            <p class="text-left text-muted">
                Komp. Ruko Centre Point Medan Jalan Timor Blok G No.
                III/IV 2nd Floor, Gang Buntu, Medan Timur, Medan City,
                North Sumatra 20231
            </p>
            <small class="text-muted">(+6261) 805 109 77</small>
        </div>
        <div class="col-6 col-md">
            <h5>LOCATION</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Clapham</a></li>
                <li><a class="text-muted" href="#">The 101</a></li>
                <li><a class="text-muted" href="#">Yafurni</a></li>
                <li><a class="text-muted" href="#">Kalingga</a></li>
                <li><a class="text-muted" href="#">Spasi</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>USE CASE</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Event</a></li>
                <li><a class="text-muted" href="#">Meeting</a></li>
                <li><a class="text-muted" href="#">Photo Shoot</a></li>
                <li><a class="text-muted" href="#">Office</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>COMPANY</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Contact Us</a></li>
                <li><a class="text-muted" href="#">Blog</a></li>
            </ul>
        </div>
    </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"
    ></script>
    <script>
        $(document).ready(function () {
            $(".btn").click(function () {
                // Hide all divs
                $('[id$="Div"]').addClass("d-none");

                // Show the corresponding div
                var targetDiv = $(this).data("target");
                $("#" + targetDiv).removeClass("d-none");
            });

            // Initially show the content for the first button
            $("#eventDiv").removeClass("d-none");
        });
    </script>
</body>
</html>