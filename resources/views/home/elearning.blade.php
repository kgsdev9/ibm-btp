@extends('layout.layout')
@section('title', 'E-learning - IPMBTE')
@section('content')
<main class="mt-4">
    <div class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12 text-center">
                    <h1 class="fw-bold mb-3 display-5">Formation en E-learning</h1>
                    <p class="lead text-muted">Apprenez à votre rythme, où que vous soyez.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-8">
        <div class="container">
            <div class="row mb-6">
                <div class="offset-md-2 col-md-8 col-12">
                    <h2 class="fw-semibold mb-4">Comment fonctionne notre formation en ligne ?</h2>

                    <div class="d-flex flex-column gap-5">

                        <!-- Étape 1 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="fs-4 fw-bold text-primary">1</div>
                            <div>
                                <h5 class="fw-bold mb-1">Inscription en ligne</h5>
                                <p>Choisissez votre programme et inscrivez-vous directement via notre plateforme. Vous recevrez ensuite vos accès personnels à l’espace e-learning.</p>
                            </div>
                        </div>

                        <!-- Étape 2 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="fs-4 fw-bold text-primary">2</div>
                            <div>
                                <h5 class="fw-bold mb-1">Accès à la plateforme de formation</h5>
                                <p>Connectez-vous à tout moment depuis un ordinateur, une tablette ou un smartphone. Vous y trouverez vos cours en vidéo, vos supports PDF, des quizz et des travaux à réaliser.</p>
                            </div>
                        </div>

                        <!-- Étape 3 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="fs-4 fw-bold text-primary">3</div>
                            <div>
                                <h5 class="fw-bold mb-1">Suivi et accompagnement</h5>
                                <p>Vous n’êtes pas seul ! Nos formateurs assurent un suivi pédagogique, organisent des sessions de questions-réponses en visioconférence, et corrigent vos travaux pour garantir votre progression.</p>
                            </div>
                        </div>

                        <!-- Étape 4 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="fs-4 fw-bold text-primary">4</div>
                            <div>
                                <h5 class="fw-bold mb-1">Évaluations & Certification</h5>
                                <p>Des évaluations en ligne (tests, devoirs, projets) sont organisées à chaque étape. À la fin de votre parcours, vous obtenez un certificat ou un diplôme selon la formation choisie.</p>
                            </div>
                        </div>

                        <!-- Étape 5 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="fs-4 fw-bold text-primary">5</div>
                            <div>
                                <h5 class="fw-bold mb-1">Insertion professionnelle ou poursuite</h5>
                                <p>Une fois formé, vous pouvez intégrer le marché du travail ou continuer avec une formation en présentiel ou un stage pratique en entreprise, selon vos objectifs.</p>
                            </div>
                        </div>

                        <!-- Bouton d'appel à l'action -->
                        <div class="text-center mt-4">
                            <a href="{{route('home.postuler')}}" class="btn btn-primary btn-lg">Commencer ma formation en ligne</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
