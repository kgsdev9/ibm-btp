<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/libs/tiny-slider/dist/tiny-slider.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ipmbtepe.jpg') }}" />


    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/libs/simplebar/simplebar.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    @livewireStyles
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-0">
            <!-- Logo de l'institut -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/ipmbtepe.jpg') }}" style="height:40px;" alt="Institut" />
            </a>

            <!-- Mobile view nav wrap -->
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
                    <!-- Dropdown Menu (User Profile) -->
                    <li class="dropdown ms-2 d-inline-block position-static">
                        <a class="rounded-circle" href="{{ route('auth.login') }}" aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Toggle Button (for mobile view) -->
            <div>
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('universite') ? 'active' : '' }}" href="{{ route('universite') }}">Notre Université</a>
                        @can('is_admin')
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownUniversite">
                                <li><a class="dropdown-item" href="#">Notre Présentation IPMBTPE</a></li>
                                <li><a class="dropdown-item" href="#">Notre Histoire</a></li>
                                <li><a class="dropdown-item" href="#">Nos Atouts</a></li>
                                <li><a class="dropdown-item" href="#">Notre Organisation</a></li>
                            </ul>
                        @endcan
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('home.formation') ? 'active' : '' }}" href="{{ route('home.formation') }}">Nos Formations</a>
                        @can('is_admin')
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownFormations">
                                <li><a class="dropdown-item" href="#">Filière Universitaire</a></li>
                                <li><a class="dropdown-item" href="#">Filière Professionnelle</a></li>
                            </ul>
                        @endcan
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('elearning') ? 'active' : '' }}" href="{{ route('elearning') }}">E-Learning</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('vie.etudiante') ? 'active' : '' }}" href="{{ route('vie.etudiante') }}">Vie Etudiante</a>
                        @can('is_admin')
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownVieEtudiante">
                                <li><a class="dropdown-item" href="#">Inscription (connexion/inscription)</a></li>
                                <li><a class="dropdown-item" href="#">La Vie Etudiante à IPMBTPE</a></li>
                                <li><a class="dropdown-item" href="#">Bibliothèque Numérique</a></li>
                                <li><a class="dropdown-item" href="#">Insertion Professionnelle</a></li>
                            </ul>
                        @endcan
                    </li>

                    @can('is_admin')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('partenariat') ? 'active' : '' }}" href="{{ route('partenariat') }}">Partenariats et Innovation</a>
                        </li>
                    @endcan

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home.contact') ? 'active' : '' }}" href="{{ route('home.contact') }}">Contact</a>
                    </li>
                </ul>

                <!-- Search Bar -->
                <form class="mt-3 mt-lg-0 me-lg-5 d-flex align-items-center">
                    <span class="position-absolute ps-3 search-icon"><i class="fe fe-search"></i></span>
                    <label for="search" class="visually-hidden">Rechercher</label>
                    <input type="search" id="search" class="form-control ps-6" placeholder="Rechercher un cours" />
                </form>
            </div>
        </div>
    </nav>





    @yield('content')



    <!-- Footer -->
    <footer class="footer bg-light-stable py-8 mt-2">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            IPMBTPE
                        </div>
                        <p class="mb-0">
                            L'IPMBTPE (Institut Polytechnique des Métiers du Bâtiment, des Travaux Publics et de
                            l'Entrepreneuriat) est un établissement dédié à la formation de professionnels compétents
                            dans ces secteurs.
                        </p>
                    </div>
                </div>

                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">NOS PAGES</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="https://www.linkedin.com/company/ipmbtpe/" class="nav-link">LINKEDIN</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/ipmbtpe" class="nav-link">FACEBOOK</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-12">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">ACCOMPAGNEMENT</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="{{ route('home.postuler') }}" class="nav-link" target="_blank">Postuler</a>
                            </li>
                            <li>
                                <a href="{{ route('home.formation') }}" class="nav-link" target="_blank">Nos
                                    formations</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                            <span class="text-dark-stable">CONTACT</span>
                            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                                <li>
                                    Adresse : Abidjan, Cocody,Saint Jean
                                </li>
                                <li>
                                    Horaires : <span class="fw-semibold">8H à 17H</span>
                                </li>
                                <li>
                                    Email : <span class="fw-semibold">contact@ipmbtpe.international</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
                <div class="col-lg-6 col-12 text-center text-md-start">
                    <span>
                        ©
                        <span id="copyright">
                            <script>
                                document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        IPMBTPE - Tous droits réservés
                    </span>
                </div>

                <!-- Links -->
                <div class="col-12 col-lg-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
                        <a class="nav-link active" href="#!">Conditions Générales d'Utilisation</a>
                        <a class="nav-link" href="#!">Politique de confidentialité</a>
                        <a class="nav-link" href="#!">FAQ</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>


    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>
    @livewireScripts
    @include('sweetalert::alert')
    <script src="{{ asset('assets/libs/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="../assets/js/vendors/tnsSlider.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('assets/js/vendors/navbar-nav.js') }}"></script>
    <script src="{{ asset('assets/alpine.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('script')
</body>

</html>
