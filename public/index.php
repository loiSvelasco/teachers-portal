<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Portal</title>
    <!-- CSS only -->
    <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column h-100">
    <nav class="py-2 bg-dark border-bottom">
        <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="#" class="nav-link link-light px-2">Trainings</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-light px-2">Programs</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item px-2"><a class="nav-link link-light" target="_blank" href="https://depedilocosnorte.com"><strong>Schools Division of Ilocos Norte</strong></a></li>
        </ul>
        <!-- <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link link-light px-2">Login</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-light px-2">Sign up</a></li>
        </ul> -->
        </div>
    </nav>
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="text-muted">Teacher's Portal</span>
        </a>
        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
            <input type="search" class="form-control rounded-0" placeholder="Search..." aria-label="Search">
        </form> -->
        </div>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div>

            <div class="container col-xl-10 col-xxl-8 px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
                        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form
                            controls. Each required form group has a validation state that can be triggered by
                            attempting to submit the form without completing it.</p>
                    </div>
                    <div class="col-md-10 mx-auto col-lg-5">
                        <form class="p-4 p-md-5 border rounded-0 bg-light">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-0" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-0" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary rounded-0" type="submit">Sign up</button>
                            <hr class="my-4">
                            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bg-dark text-secondary px-4 py-5 text-center">
                <div class="py-5">
                    <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap,
                            the world’s most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom
                                button</button>
                            <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light text-secondary">
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <!-- <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap" /></svg>
                </a> -->
                <span class="mb-3 mb-md-0 text-muted">
                    &copy; <?php
                    $fromYear = 2022;
                    $thisYear = (int)date('Y');
                    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Developed and Designed with ❤ by Louis Velasco.
                </span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><strong>Schools Division of Ilocos Norte</strong></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi-twitter"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi-facebook"></i></a></li>
            </ul>
        </footer>
    </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="../assets/bootstrap/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>