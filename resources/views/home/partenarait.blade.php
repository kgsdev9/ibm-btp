@extends('layout.layout')

@section('content')
    <section class="container py-10 mt-6">
        <div class="text-center mb-7">
            <h2 class="display-5 fw-bold text-primary">Partenariats & Innovation</h2>
            <p class="fs-5 text-muted mt-3">
                À l’<strong>Institut Polytechnique des Métiers du Bâtiment et des Travaux Publics de
                    l’Environnement</strong>, l’innovation est bien plus qu’un concept : c’est une réalité concrète, nourrie
                par des collaborations solides avec des acteurs majeurs du secteur.
            </p>
        </div>

        <!-- Section narrative + illustration -->
        <div class="row align-items-center g-5 mb-7">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/landing-immigration/innovation.svg') }}" alt="Partenariat IPMBTPE"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h3 class="fw-semibold mb-3">Un écosystème d'opportunités pour nos étudiants</h3>
                <p class="fs-5 mb-4">
                    Grâce à des accords stratégiques avec des entreprises, universités et centres de recherche, nos
                    étudiants ont accès à :
                </p>
                <ul class="list-unstyled fs-5">
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Stages et immersions
                        professionnelles encadrées</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Participation à des projets
                        de R&D innovants</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Mentorat par des experts du
                        secteur</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Accès à des laboratoires
                        partenaires</li>
                </ul>
            </div>
        </div>

        <!-- Logos des partenaires -->
        <div class="text-center mb-7">
            <h4 class="fw-bold mb-4">Ils nous font confiance</h4>
            <div class="row justify-content-center align-items-center g-4">
                @foreach (['partner1.png', 'partner2.png', 'partner3.png', 'partner4.png'] as $logo)
                    <div class="col-6 col-sm-4 col-md-3">
                        <img src="{{ asset('assets/images/partners/' . $logo) }}" alt="Partenaire"
                            class="img-fluid grayscale-hover">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Témoignage -->
        <div class="row mb-7">
            <div class="col-lg-10 mx-auto">
                <div class="p-5 bg-light rounded shadow">
                    <blockquote class="blockquote mb-0 text-center">
                        <p class="fs-4 fst-italic">
                            « Grâce aux partenariats de l’IPMBTPE, j’ai pu intégrer une entreprise de BTP dès ma 3e année.
                            Ce fut une expérience incroyable, à la fois technique et humaine. »
                        </p>
                        <footer class="blockquote-footer mt-3">Aminata K., <cite title="Étudiante en Génie Civil">Étudiante
                                en Génie Civil</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-5">
            <h4 class="fw-bold mb-3">Envie de collaborer avec l’IPMBTPE ?</h4>
            <p class="fs-5 text-muted mb-4">Nous sommes ouverts aux initiatives innovantes, locales et internationales.
                Rejoignez notre réseau dès aujourd’hui.</p>
            <a href="{{ route('home.contact') }}" class="btn btn-primary btn-lg px-4">Nous contacter</a>
        </div>
    </section>
@endsection
