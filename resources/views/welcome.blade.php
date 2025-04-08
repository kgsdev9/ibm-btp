@extends('layout.layout')
@section('title', 'Bienvenue sur institut roosvelet')
@section('content')
    <main>





        <section class="py-xl-8 py-8">
            <div class="container py-xl-6 mt-4">
                <div class="row align-items-center gy-6 gy-xl-0">
                    <!-- Colonne gauche avec texte principal et bouton -->
                    <div class="col-lg-5 col-xxl-5 col-12">
                        <div class="d-flex flex-column gap-5">
                            <div class="d-flex flex-row gap-2 align-items-center">
                                <span>🏗️</span>
                                <span class="text-primary fw-semibold">
                                    <span>Formez-vous aux métiers du Bâtiment, des Travaux Publics et de
                                        l’Entrepreneuriat</span>
                                </span>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex flex-column gap-2">
                                    <h1 class="mb-0 display-2 fw-bolder">Bâtir l'Excellence, Créer des Opportunités</h1>
                                    <p class="mb-0">L'IPMBTE propose des formations de qualité adaptées aux métiers du
                                        bâtiment, des travaux publics, et de l’entrepreneuriat. Bénéficiez d’une expertise
                                        reconnue et de ressources modernes.</p>
                                </div>
                            </div>
                            <div class="d-grid d-md-flex flex-row gap-2">
                                <a href="{{ route('home.formation') }}" class="btn btn-primary btn-lg">Découvrez nos
                                    formations</a>
                                <a href="" class="btn btn-outline-secondary btn-lg">Demandez une brochure</a>
                                <a href="{{ route('home.postuler') }}" class="btn btn-outline-secondary btn-lg">Postulez
                                    maintenant</a>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne droite avec images en side cards -->
                    <div class="col-xxl-6 offset-xxl-1 col-lg-7 col-12">
                        <div class="row gx-0 gy-4 gy-lg-0">
                            <!-- Image 1 -->
                            <div class="col-md-4 flex-column justify-content-start align-items-center">
                                <div class="position-relative">
                                    <div class="card shadow">
                                        <img src="{{ asset('chantier1.jpeg') }}" alt="Chantier" class="card-img-top">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Formations aux Métiers du Chantier</h5>
                                            <p class="card-text">Découvrez nos formations pratiques sur le terrain avec des
                                                projets réels pour vous préparer aux défis du chantier.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image 2 -->
                            <div class="col-md-4 flex-column justify-content-start align-items-center">
                                <div class="position-relative">
                                    <div class="card shadow">
                                        <img src="{{ asset('chantier2.jpg') }}" alt="Bâtiment" class="card-img-top">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Formation en Bâtiment</h5>
                                            <p class="card-text">Apprenez les bases du bâtiment et développez des
                                                compétences solides pour réussir dans ce secteur en constante évolution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image 3 -->
                            <div class="col-md-4 flex-column justify-content-start align-items-center">
                                <div class="position-relative">
                                    <div class="card shadow">
                                        <img src="{{ asset('chantier34.jpg') }}" alt="Entrepreneuriat" class="card-img-top">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Entrepreneuriat au Service du BTP</h5>
                                            <p class="card-text">Nous vous formons à l’entrepreneuriat dans le secteur du
                                                BTP, avec des compétences pratiques pour lancer et gérer une entreprise.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="py-lg-8 py-6">
            <div class="container py-lg-6">
                <!-- Titre principal -->
                <div class="row mb-8">
                    <div class="col-12">
                        <div class="text-center d-flex flex-column gap-2">
                            <h2 class="mb-0 h1">Notre Université - IPMBTPE</h2>
                            <p class="mb-0">Découvrez l'IPMBTPE, un institut d'excellence dans les métiers du bâtiment,
                                des travaux publics et de l’entrepreneuriat.</p>
                        </div>
                    </div>
                </div>

                <!-- Étape 1: Présentation IPMBTPE -->
                <div class="row mb-8 align-items-center gy-4">
                    <div class="col-md-6 offset-xxl-2 col-xxl-4 col-xl-5 offset-xl-1 mb-xxl-6">
                        <div class="d-flex flex-column gap-4">
                            <div class="border border-2 border-primary rounded-circle icon-shape icon-xl fs-3 text-primary">
                                1</div>
                            <div class="d-flex flex-column gap-2">
                                <h3 class="mb-0 h2">Notre Présentation IPMBTPE</h3>
                                <p class="mb-0 fs-3">Découvrez notre institut d'excellence dans les métiers du bâtiment, des
                                    travaux publics et de l’entrepreneuriat, formant des professionnels compétents et
                                    responsables.</p>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-outline-secondary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-5 col-xl-6 mb-xxl-6">
                        <img src="{{ asset('ingenieur-chantier1.jpg') }}" alt="Présentation IPMBTPE"
                            class="img-fluid rounded-4 w-100">
                    </div>
                </div>

                <!-- Étape 2: Notre Histoire -->
                <div class="row mb-8 align-items-center gy-4">
                    <div class="col-md-6 col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 order-md-1 order-2 mb-xxl-6">
                        <img src="{{ asset('ecole-impbts.jpeg') }}" alt="Notre Histoire" class="img-fluid rounded-4 w-100">
                    </div>
                    <div class="col-md-6 col-xxl-4 offset-xxl-1 col-xl-5 offset-xl-1 order-xl-2 order-1 mb-xxl-6">
                        <div class="d-flex flex-column gap-4">
                            <div class="border border-2 border-primary rounded-circle icon-shape icon-xl fs-3 text-primary">
                                2</div>
                            <div class="d-flex flex-column gap-2">
                                <h3 class="mb-0 h2">Notre Histoire</h3>
                                <p class="mb-0 fs-3">Plongez dans l’histoire de l’IPMBTPE, un institut qui a marqué le
                                    secteur par ses contributions académiques et son impact sur le développement des
                                    infrastructures.</p>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-outline-primary">Lire notre histoire</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 3: Nos Atouts -->
                <div class="row mb-8 align-items-center gy-4">
                    <div class="col-md-6 offset-xxl-2 col-xxl-4 col-xl-5 offset-xl-1 mb-xxl-6">
                        <div class="d-flex flex-column gap-4">
                            <div class="border border-2 border-primary rounded-circle icon-shape icon-xl fs-3 text-primary">
                                3</div>
                            <div class="d-flex flex-column gap-2">
                                <h3 class="mb-0 h2">Nos Atouts</h3>
                                <p class="mb-0 fs-3">L'IPMBTPE se distingue par ses infrastructures modernes, son approche
                                    pédagogique innovante et son réseau solide de partenaires.</p>
                            </div>
                            <div>
                                <a href="{{ route('home.formation') }}" class="btn btn-outline-secondary">Découvrir nos
                                    atouts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-5 col-xl-6 mb-xxl-6">
                        <img src="{{ asset('inge-btp.png') }}" alt="Nos Atouts" class="img-fluid rounded-4 w-100">
                    </div>
                </div>

                <!-- Étape 4: Notre Organisation -->
                <div class="row align-items-center gy-4">
                    <div class="col-md-6 offset-xxl-2 col-xxl-4 col-xl-5 offset-xl-1 mb-xxl-6">
                        <div class="d-flex flex-column gap-4">
                            <div class="border border-2 border-primary rounded-circle icon-shape icon-xl fs-3 text-primary">
                                4</div>
                            <div class="d-flex flex-column gap-2">
                                <h3 class="mb-0 h2">Notre Organisation</h3>
                                <p class="mb-0 fs-3">Explorez la structure organisationnelle de l'IPMBTPE, incluant les
                                    départements académiques et les équipes administratives.</p>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-outline-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-5 col-xl-6 mb-xxl-6">
                        <img src="{{ asset('image-women-btp.jpg') }}" alt="Notre Organisation"
                            class="img-fluid rounded-4 w-100">
                    </div>
                </div>
            </div>
        </section>



        <section class="py-lg-8 py-5">
            <div class="container py-lg-8">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="mb-5 mb-lg-8">
                            <span class="fw-semibold text-primary">Nos Formations</span>
                            <h2 class="h1 mt-3">Formations & Cours proposés à IPMBTPE</h2>
                            <p class="mb-0">
                                À l'IPMBTPE, nous proposons une gamme complète de formations, allant du BTS au Master, dans
                                divers domaines du bâtiment, des travaux publics, et de l'entrepreneuriat. Nos formations
                                sont conçues pour répondre aux besoins du marché du travail et préparer nos étudiants à
                                réussir dans leur carrière professionnelle.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-lg-flex justify-content-end d-none">
                        <div>
                            <img src="#" alt="Nos Formations"
                                style="transform: rotate(226deg); filter: opacity(0.5)">
                        </div>
                    </div>
                </div>

                <div class="row gy-4 gy-xl-0">
                    <!-- Formation BTS -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="{{ route('btp.batiment') }}"><img src="{{ asset('cours1.jpg') }}"
                                        alt="Formation BTS" class="img-fluid rounded-3 w-100"></a>
                            </div>
                            <div class="card-body pt-2">
                                <h3><a class="text-inherit" href="{{ route('btp.batiment') }}">BTS Métiers du
                                        Bâtiment</a></h3>
                                <p>Développez vos compétences pratiques et théoriques dans le domaine du bâtiment avec notre
                                    programme BTS, adapté aux besoins actuels du secteur.</p>
                                <a href="{{ route('btp.batiment') }}"
                                    class="icon-link icon-link-hover link-primary fw-semibold">
                                    <span>Voir les détails</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Formation Bachelor -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="#"><img src="{{ asset('cours2.jpg') }}" alt="Formation Bachelor"
                                        class="img-fluid rounded-3 w-100"></a>
                            </div>
                            <div class="card-body pt-2">
                                <h3><a class="text-inherit" href="{{ route('btp.bachelor') }}">Bachelor en Gestion de
                                        Projets de
                                        Construction</a></h3>
                                <p>Acquérez des compétences approfondies dans la gestion de projets complexes, de la
                                    planification à la réalisation, pour exceller dans le secteur de la construction.</p>
                                <a href="{{ route('btp.bachelor') }}"
                                    class="icon-link icon-link-hover link-primary fw-semibold">
                                    <span>Voir les détails</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Formation Master -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="#"><img src="{{ asset('best-woman.jpg') }}" alt="Formation Master"
                                        class="img-fluid rounded-3 w-100"></a>
                            </div>
                            <div class="card-body pt-2">
                                <h3><a class="text-inherit" href="{{ route('btp.master.entreprenarait') }}">Master en
                                        Entrepreneuriat et Innovation</a>
                                </h3>
                                <p>Formez-vous à la gestion d’entreprises innovantes et apprenez à naviguer dans les défis
                                    entrepreneuriaux du secteur du bâtiment et des travaux publics.</p>
                                <a href="{{ route('btp.master.entreprenarait') }}"
                                    class="icon-link icon-link-hover link-primary fw-semibold">
                                    <span>Voir les détails</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Formation Professionnelle -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="#"><img src="{{ asset('gestion-chantiers.jpg') }}"
                                        alt="Formation Professionnelle" class="img-fluid rounded-3 w-100"></a>
                            </div>
                            <div class="card-body pt-2">
                                <h3><a class="text-inherit" href="{{ route('btp.master.gestion.chantier') }}">Formation
                                        Professionnelle en Gestion de
                                        Chantier</a></h3>
                                <p>Acquérez les compétences essentielles pour gérer efficacement un chantier, du démarrage à
                                    la livraison, en intégrant des méthodes et outils modernes.</p>
                                <a href="{{ route('btp.master.gestion.chantier') }}"
                                    class="icon-link icon-link-hover link-primary fw-semibold">
                                    <span>Voir les détails</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </main>

@endsection
