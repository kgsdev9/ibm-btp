@extends('layout.layout')
@section('title', 'Formulaire de candidature')
@section('content')
<main>
    <section class="py-8">
        <div class="container mt-5">
            <h2 class="text-center mb-4 fw-bold">Formulaire de Candidature</h2>

            <!-- Barre de progression -->
            <div class="progress mb-4" style="height: 25px;">
                <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                     role="progressbar" style="width: 25%">Étape 1 sur 4</div>
            </div>

            <form id="multiStepForm" method="POST" action="" enctype="multipart/form-data">
                @csrf

                <!-- Étape 1 : Infos personnelles -->
                <div class="form-step active">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom complet</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Numéro de téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                    </div>
                </div>

                <!-- Étape 2 : Choix de la formation -->
                <div class="form-step">
                    <div class="mb-3">
                        <label for="formation" class="form-label">Formation souhaitée</label>
                        <select class="form-select" id="formation" name="formation" required>
                            <option value="">-- Sélectionnez une formation --</option>
                            <option value="btp">Métiers du Bâtiment</option>
                            <option value="tp">Travaux Publics</option>
                            <option value="entrepreneuriat">Entrepreneuriat BTP</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="niveau" class="form-label">Niveau d'études</label>
                        <input type="text" class="form-control" id="niveau" name="niveau" placeholder="ex : BAC, BEPC...">
                    </div>
                </div>

                <!-- Étape 3 : Documents -->
                <div class="form-step">
                    <div class="mb-3">
                        <label for="cv" class="form-label">CV (PDF)</label>
                        <input type="file" class="form-control" id="cv" name="cv" accept=".pdf">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo d'identité</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    </div>
                </div>

                <!-- Étape 4 : Confirmation -->
                <div class="form-step text-center">
                    <h4>Merci pour votre intérêt !</h4>
                    <p>Veuillez cliquer sur "Soumettre" pour valider votre candidature.</p>
                </div>

                <!-- Boutons navigation -->
                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary" id="prevBtn" disabled>Précédent</button>
                    <button type="button" class="btn btn-primary" id="nextBtn">Suivant</button>
                    <button type="submit" class="btn btn-success d-none" id="submitBtn">Soumettre</button>
                </div>
            </form>
        </div>
    </section>
</main>

<style>
    .form-step { display: none; }
    .form-step.active { display: block; }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 0;
        const steps = document.querySelectorAll(".form-step");
        const progressBar = document.getElementById("progressBar");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");
        const submitBtn = document.getElementById("submitBtn");

        function updateFormSteps() {
            steps.forEach((step, index) => {
                step.classList.toggle("active", index === currentStep);
            });

            prevBtn.disabled = currentStep === 0;
            nextBtn.classList.toggle("d-none", currentStep === steps.length - 1);
            submitBtn.classList.toggle("d-none", currentStep !== steps.length - 1);

            const progress = ((currentStep + 1) / steps.length) * 100;
            progressBar.style.width = progress + "%";
            progressBar.innerText = `Étape ${currentStep + 1} sur ${steps.length}`;
        }

        nextBtn.addEventListener("click", () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                updateFormSteps();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                updateFormSteps();
            }
        });

        updateFormSteps();
    });
</script>
@endsection
