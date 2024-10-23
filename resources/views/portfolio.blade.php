<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="icon" type="image/png" href="{{ asset('images/png/Frame12.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/font.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/grid.css') }}">

</head>
<body>
    <!-- Header -->
    <header>
            <div class="nav_wrapper">
                <img class="nav-logo" src="{{ asset('images/png/Logo.png') }}" alt="تصویر لوگو">
            </div>
            <nav class="nav">
                <ul class="menu-list">
                    <li class="menu-list-item"><a href="#home">Home</a></li>
                    <li class="menu-list-item"><a href="#about">About</a></li>
                    <li class="menu-list-item"><a href="#about">Process</a></li>
                    <li class="menu-list-item"><a href="#portfolio">Portfolio</a></li>
                    <li class="menu-list-item"><a href="#blog">Blog</a></li>
                    <li class="menu-list-item"><a href="#about">Servisess</a></li>
                    <li class="menu-list-item"><a href="#contact">Contact</a></li>
                    <li class="menu-list-item"><a href="#login"><i class="fas fa-sign-in-alt"></i>   Login</a></li>
                    <li class="menu-list-item"><a href="#logout"><i class="fas fa-sign-out-alt"></i>   Logout</a></li>

                </ul>
            </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Section 1 -->
        <section id="home">
            <div class="container">
                <div class="content">
                    <img class="img-1" src="{{ asset('images/png/unsplash_wKOKidNT14w.png') }}" alt="عکس آدم">
                </div>
                <div class="jumbotron">
                    <h1 class="text-1">Hello, I’m <br>Brooklyn Gilbert</h1>
                    <p class="tp1">I'm a Freelance UI/UX Designer and Developer based in London, England.<br> I strives to build immersive and beautiful web applications through <br>carefully crafted code and user-centric design.</p>
                </div>
                <button type="button" class="btn btn-primary">Primary</button>
                <div style="display: flex">
                    <div class="card" >
                        <div class="card-body" style="text-align: center">
                            <p class="card-text">250+<br>Project Completed</p>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body" style="text-align: center">
                            <p class="card-text">15 Y.<br>Experience</p>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body" style="text-align: center">
                            <p class="card-text">58<br>Happy Client</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section 2 -->

    </main>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
