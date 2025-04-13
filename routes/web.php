<?php

use App\Http\Controllers\Filiere\FiliereController;
use App\Http\Livewire\GestionTJobComponent;
use App\Http\Livewire\ProflileComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GestionCommande;
use App\Http\Controllers\Auth\ActionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Logout\LogoutController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Episode\EpisodeController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Profles\ProfileController;
use App\Http\Controllers\Admin\GestionCouponController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Admin\GestionCourseController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Formateur\FormateurController;
use App\Http\Controllers\Admin\GestionCategoryController;
use App\Http\Controllers\Admin\GestionFormateurController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AuthSocialController;
use App\Http\Controllers\Cours\CoursController;
use App\Http\Controllers\Formation\FormationController;
use App\Http\Controllers\Matiere\MatiereController;
use App\Http\Controllers\PrestationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\Sujet\SujetController;
use App\Http\Livewire\CandidatListComponent;
use App\Http\Livewire\CompetenceComponent;
use App\Http\Livewire\CourseComponent;
use App\Http\Livewire\DetailPrestataire;
use App\Http\Livewire\ExperienceComponent;
use App\Http\Livewire\FormationComponent;
use App\Http\Livewire\GestionArticleComponent;
use App\Http\Livewire\GestionSpecialiteComponent;
use App\Http\Livewire\GestionUserComponent;
use App\Http\Livewire\HomeCandidat;
use App\Http\Livewire\HomeDetailJob;
use App\Http\Livewire\HomeJob;
use App\Http\Livewire\ProjetComponent;
use App\Http\Livewire\SocialAccompteComponent;
use App\Http\Middleware\AdminMddleware;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sucess/{name}', [ActionController::class, 'registerSuccess'])->name('register.sucess');
Route::get('/register', [RegisterController::class, 'create'])->name('auth.register');
Route::post('/post/user', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/login/User', [LoginController::class, 'loginForUser'])->name('post.login');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboard.users')->middleware('auth');
Route::post('/createNewTeacher', [FormateurController::class, 'store'])->name('post.new.formateur');



Route::get('/postuler', [HomeController::class, 'postuler'])->name('home.postuler');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/nos-formations', [HomeController::class, 'formation'])->name('home.formation');


Route::resources([
    'category' => GestionCategoryController::class,
    'coupon' => GestionCouponController::class,
    'episode' => EpisodeController::class
]);


Route::get('/cancel-payment', [PaymentController::class, 'cancelPayment'])->name('cancel.payment');
Route::get('/sucess-payment', [PaymentController::class, 'sucessPayment'])->name('success.payment');
Route::post('/process-payment', [PaymentController::class, 'initialisePayment'])->name('process.checkout');


// GoogleLoginController redirect and callback urls
Route::get('/login/{google}', [AuthSocialController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/{google}/callback', [AuthSocialController::class, 'handleGoogleCallback']);


Route::get('/comment-ca-marche', function () {
    return view('home.commentcamarche');
});


Route::get('/conditionutilisateur', function () {
    return view('home.condtiionutilisation');
})->name('CGU');


Route::get('/confirmated_compte', [AuthController::class, 'verificationAcount'])->name('confirmated.compte');;





Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->name('verification.verify')
    ->middleware(['signed', 'throttle:6,1']); // Ajout des middlewares "signed" et "throttle" pour limiter les requêtes




// mes nouvelles routes

Route::get('/detail/profile/candidat/{codeprofile}', DetailPrestataire::class)->name('detail.candidat');



Route::get('/gestion-utilisateurs', GestionUserComponent::class)->name('users.management');
Route::get('/gestion-articles', GestionArticleComponent::class)->name('articles.management');
Route::get('/politiquedeconfidentialite', function () {
    return view('home.politiquedeconfidentialise');
})->name('politique.confidentialise');



Route::resource('users', UserController::class);
Route::resource('formations', FormationController::class);
Route::resource('filieres', FiliereController::class);
Route::resource('matieres', MatiereController::class);
Route::resource('cours', CoursController::class);
Route::resource('sujets', SujetController::class);

Route::get('/fac', function () {
    return view('home.faq');
})->name('fac');


Route::get('/quisommesnous', function () {
    return view('home.about');
})->name('about');


Route::get('/detail/btp', function () {
    return view('home.detailone');
})->name('btp.batiment');


Route::get('/detail/bahcelor', function () {
    return view('home.detailtwo');
})->name('btp.bachelor');


Route::get('/detail/master-entrepreneuriat-innovation', function () {
    return view('home.detailMasterEntrepreneuriat');
})->name('btp.master.entreprenarait');


Route::get('/detail/formation-gestion-chantier', function () {
    return view('home.detailGestionChantier');
})->name('btp.master.gestion.chantier');

Route::get('/notre-universite', function () {
    return view('home.notreuniversiste');
})->name('universite');


Route::get('/e-learning', function () {
    return view('home.elearning');
})->name('elearning');

Route::get('/vie-etudiante', function () {
    return view('home.vieetudiante');
})->name('vie.etudiante');


Route::get('/partenarait', function () {
    return view('home.partenarait');
})->name('partenariat');




Route::get('/home-job-detail/{slug}', HomeDetailJob::class)->name('detail.job');
