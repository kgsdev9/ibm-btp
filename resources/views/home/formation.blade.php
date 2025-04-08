@extends('layout.layout')

@section('title', 'Nos Formations')

@section('content')
<main>
    <section class="py-8">
        <div class="container mt-5">
            <h2 class="text-center mb-5 fw-bold">Découvrez Nos Formations Professionnelles</h2>

            <div class="row gx-0 gy-4 gy-lg-0 justify-content-center">
                <!-- Formation 1 -->
                <div class="col-md-4 d-flex">
                    <div class="card shadow w-100">
                        <img src="{{ asset('chantier1.jpeg') }}" alt="Chantier" class="card-img-top" style="height: 230px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Métiers du Chantier</h5>
                            <p class="card-text">
                                Découvrez nos formations pratiques sur le terrain avec des projets réels pour vous préparer aux défis concrets du chantier.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Formation 2 -->
                <div class="col-md-4 d-flex">
                    <div class="card shadow w-100">
                        <img src="{{ asset('chantier2.jpg') }}" alt="Bâtiment" class="card-img-top" style="height: 230px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Formation en Bâtiment</h5>
                            <p class="card-text">
                                Apprenez les bases du bâtiment et développez des compétences solides dans un secteur en pleine croissance et plein d’opportunités.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Formation 3 -->
                <div class="col-md-4 d-flex">
                    <div class="card shadow w-100">
                        <img src="{{ asset('chantier34.jpg') }}" alt="Entrepreneuriat" class="card-img-top" style="height: 230px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Entrepreneuriat dans le BTP</h5>
                            <p class="card-text">
                                Formez-vous à l’entrepreneuriat dans le secteur du BTP. Apprenez à créer, gérer et développer une entreprise performante.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouton d'appel à l'action -->
            <div class="text-center mt-5">
                <a href="{{ route('home.postuler') }}" class="btn btn-primary btn-lg">
                    Je m'inscris à une formation
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
