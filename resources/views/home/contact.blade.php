@extends('layout.layout')

@section('content')
    <main class="mt-4">
        <!-- Page Content -->
        <section class="container-fluid">
            <div class="row min-vh-100">
                <!-- col -->
                <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12">
                    <div class="py-8 me-xl-8 pe-xl-8">
                        <!-- content -->
                        <div class="d-flex justify-content-between mb-7 align-items-center">
                            <a href="/"><img src="{{ asset('assets/ipmbtepe.jpg') }}" style="height:60px;" alt="logo"
                                    class="logo-inverse"></a>
                        </div>
                        <div>
                            <h1 class="display-4 fw-bold">Contactez l’IPMBTE</h1>
                            <p class="lead text-dark">
                                Remplissez ce formulaire pour toute demande d’information. Un membre de notre équipe vous
                                contactera dans les plus brefs délais.
                            </p>
                            <div class="mt-8 fs-4">
                                <p class="mb-4">
                                    Pour toute question urgente, vous pouvez également nous joindre par téléphone ou par
                                    email.
                                </p>
                                <p>
                                    <i class="bi bi-telephone text-primary me-2"></i>
                                    +225 07 07 07 07 07
                                </p>
                                <p>
                                    <i class="bi bi-envelope-open text-primary me-2"></i>
                                    contact@ipmbte.ci
                                </p>
                                <p class="d-flex">
                                    <i class="bi bi-geo-alt text-primary me-2"></i>
                                    Abidjan, Côte d’Ivoire
                                </p>
                            </div>
                            <div class="mt-8">
                                <p class="text-muted">
                                    <strong>Formez-vous aux métiers du Bâtiment, des Travaux Publics et de
                                        l’Entrepreneuriat.</strong><br>
                                    Bâtir l'Excellence, Créer des Opportunités.<br>
                                    L'IPMBTE propose des formations de qualité adaptées aux métiers du bâtiment, des travaux
                                    publics, et de l’entrepreneuriat. Bénéficiez d’une expertise reconnue et de ressources
                                    modernes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- form section -->
                <div
                    class="col-lg-6 d-lg-flex align-items-center w-lg-50 position-fixed-lg bg-cover bg-light top-0 right-0">
                    <div class="px-4 px-xl-8 mx-xl-8 py-8 py-lg-0">
                        <form class="row needs-validation" novalidate="">
                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="fname">
                                    Prénom : <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="text" id="fname" placeholder="Votre prénom"
                                    required="">
                                <div class="invalid-feedback">Veuillez entrer votre prénom</div>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="lname">
                                    Nom : <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="text" id="lname" placeholder="Votre nom"
                                    required="">
                                <div class="invalid-feedback">Veuillez entrer votre nom</div>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="email">
                                    Email : <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="email" id="email" placeholder="Votre email"
                                    required="">
                                <div class="invalid-feedback">Veuillez entrer un email valide</div>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="phone">
                                    Téléphone : <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="text" id="phone" placeholder="Votre numéro"
                                    required="">
                                <div class="invalid-feedback">Veuillez entrer votre numéro de téléphone</div>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="text-dark form-label" for="contactReason">
                                    Motif de contact : <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" id="contactReason" required>
                                    <option value="">Choisir...</option>
                                    <option value="Formation">Demande d’information sur une formation</option>
                                    <option value="Inscription">Demande d’inscription</option>
                                    <option value="Autre">Autre</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner un motif</div>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="text-dark form-label" for="messages">Message :</label>
                                <textarea class="form-control" id="messages" rows="3" placeholder="Votre message..."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
