@extends('layout.layout')
@section('content')
    <section class="py-lg-8 py-5">
        <div class="container px-lg-6 my-lg-8">
            <div class="row align-items-center gy-4 gy-lg-0">
                <div class="col-lg-5">
                    <div class="row align-items-end g-3 mb-3">
                        <div class="col-6">
                            <img src="{{ asset('assets/images/landing-immigration/about-img-1.jpg') }}"
                                alt="Étudiants IPMBTPE" class="img-fluid rounded-3 w-100">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/images/landing-immigration/about-img-2.png') }}" alt="Campus IPMBTPE"
                                class="img-fluid rounded-3 w-100">
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/landing-immigration/about-img-3.jpg') }}" alt="Ambiance IPMBTPE"
                        class="img-fluid rounded-3 w-100">
                </div>

                <div class="col-lg-6 col-12 ms-lg-8">
                    <div class="mb-5">
                        <span class="fw-semibold text-primary">Vue Estudiantine - IPMBTPE</span>
                        <h2 class="h1 my-3">Un environnement propice à l’excellence académique</h2>
                        <p class="mb-0">
                            À l’<span class="text-primary">IPMBTPE</span>, chaque étudiant est accompagné pour atteindre ses
                            objectifs académiques et professionnels. L’environnement est dynamique, inclusif, et pensé pour
                            favoriser la réussite.
                        </p>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-bullseye text-primary"></i>
                            <h3 class="mb-0">Notre Mission</h3>
                        </div>
                        <p class="mb-0">
                            Offrir aux étudiants les moyens de réussir grâce à des ressources pédagogiques de qualité, un
                            encadrement personnalisé et une immersion dans un cadre international.
                        </p>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-eye text-primary"></i>
                            <h3 class="mb-0">Notre Vision</h3>
                        </div>
                        <p class="mb-0">
                            Créer une communauté d’apprenants où chaque jeune, peu importe son parcours, peut développer ses
                            talents et s’ouvrir au monde à travers une éducation de qualité.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
