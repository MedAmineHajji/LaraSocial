<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\NewPasswordController;

use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\RoutineXIController;
use App\Http\Controllers\Admin\RoutineXIIController;

use App\Http\Controllers\Admin\Students\AllStudentsController;
use App\Http\Controllers\Admin\Students\XIStudentsController;
use App\Http\Controllers\Admin\Students\XIIStudentsController;
use App\Http\Controllers\Admin\Students\OldStudentsController;
use App\Http\Controllers\Admin\Students\HscExamineeController;

use App\Http\Controllers\Admin\Exam\ExamController;
use App\Http\Controllers\Admin\Exam\HscController;

use App\Http\Controllers\Admin\Teachers\TeachersController;
use App\Http\Controllers\Admin\Teachers\DeptTeachersController;

use App\Http\Controllers\Admin\Admission\SecurityCodeController;
use App\Http\Controllers\Admin\Admission\AdmissionController;

use App\Http\Controllers\Admin\Download\IDcardController;
use App\Http\Controllers\Admin\Download\TestimonialController;
use App\Http\Controllers\Admin\Download\TransCertController;

use App\Http\Controllers\User\NoticeViewController;

use App\Http\Controllers\User\Posts\PostsController;
use App\Http\Controllers\User\Posts\LikesController;
use App\Http\Controllers\User\Posts\CommentsController;
use App\Http\Controllers\Formation\FormationController;
use App\Http\Controllers\Formation\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function() {
    //__Home routes
    Route::get('/home', [UserController::class, 'index'])->name('home');

    //__Change password
    Route::post('/user_password/update', [NewPasswordController::class, 'password_update'])->name('user_password.update');

    //__User updates routes
    Route::put('profile/update', [UserController::class, 'updateProfile'])->name('user.update_profile');

    //__User profile routes
    Route::get('profile/{id}', [UserController::class, 'profile'])->name('user.profile');

    //__Notice routes
    Route::get('/notice', [NoticeViewController::class, 'index'])->name('notice.view');

    //__Post routes
    Route::resource('/posts', PostsController::class);
    Route::resource('/posts/like', LikesController::class);
    Route::resource('/posts/comment', CommentsController::class);

    //__Videos route
    Route::get('/videos', [UserController::class, 'videos'])->name('videos');

    //__Routine route
    Route::get('/routines', [UserController::class, 'routines'])->name('routines');
    Route::get('/routines/export/{class}/{dept}', [UserController::class, 'export'])->name('routines.export');

    //__Teachers and students info route
    Route::get('/teacher_student_info', [UserController::class, 'teacher_student_view'])->name('teacher_student_info');

});




// Formation Routes
Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/formations/create', [FormationController::class, 'create'])->name('formations.create');
Route::post('/formations', [FormationController::class, 'store'])->name('formations.store');
Route::get('/formations/{formation}', [FormationController::class, 'show'])->name('formations.show');
Route::get('/formations/{formation}/edit', [FormationController::class, 'edit'])->name('formations.edit');
Route::put('/formations/{formation}', [FormationController::class, 'update'])->name('formations.update');
Route::delete('/formations/{formation}', [FormationController::class, 'destroy'])->name('formations.destroy');

// Order Routes
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{formationId}/{userId}', [OrderController::class,'destroy'])->name('orders.destroy');
Route::get('/formations/{formationId}/ordered-users', [OrderController::class, 'getUsersWhoOrderedFormation'])
    ->name('formations.ordered-users');

// __Admission routes
Route::get('/admission/procedure', function () {
    return view('admission.admission_procedure');
})->name('admission.procedure');

Route::post('/student/admission/store', [AdmissionController::class, 'store'])->name('student.admission.store');
Route::post('/student/admission/verify', [AdmissionController::class, 'verify'])->name('student.admission.verify');
Route::put('/orders/{order}/toggle-status', [OrderController::class, 'toggleStatus'])->name('orders.toggle-status');


require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group([], function() {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

    Route::get('/admin/password/change', [HomeController::class, 'password_change'])->name('admin.password.change');
    Route::post('/admin/password/update', [HomeController::class, 'password_update'])->name('admin.password.update');

    // __Notice routes
    Route::resource('/admin/notice', NoticeController::class);

    // __Routine routes
    Route::resource('/admin/routines_xi', RoutineXIController::class);
    Route::resource('/admin/routines_xii', RoutineXIIController::class);

    // __Student routes
    Route::resource('/admin/students', AllStudentsController::class);
    Route::resource('/admin/students_xi', XIStudentsController::class);
    Route::resource('/admin/students_xii', XIIStudentsController::class);
    Route::resource('/admin/students_old', OldStudentsController::class);
    Route::resource('/admin/hsc_examinee', HscExamineeController::class);
    Route::get('/admin/students/transfer-class/{id}', [AllStudentsController::class, 'transfer_class'])->name('students.transfer-class');

    //__HSC routes
    Route::resource('/admin/hsc', HscController::class);
    Route::get('/admin/hsc_prev', [HscController::class, 'index_prev'])->name('hsc.previous');

    //__Exam routes
    Route::post('/admin/students/exam/mt/update/{class}/{id}', [ExamController::class, 'update_mt'])->name('admin.students.exam.mt.update');
    Route::post('/admin/students/exam/hy/update/{class}/{id}', [ExamController::class, 'update_hy'])->name('admin.students.exam.hy.update');
    Route::post('/admin/students/exam/fnl/update/{class}/{id}', [ExamController::class, 'update_fnl'])->name('admin.students.exam.fnl.update');

    // __Teacher routes
    Route::resource('/admin/teachers', TeachersController::class);
    Route::get('/admin/teachers-science', [DeptTeachersController::class, 'science'])->name('admin.teachers-science');
    Route::get('/admin/teachers-humanities', [DeptTeachersController::class, 'humanities'])->name('admin.teachers-humanities');
    Route::get('/admin/teachers-business', [DeptTeachersController::class, 'business'])->name('admin.teachers-business');

    // __Admission routes
    Route::resource('/admin/student/admission', AdmissionController::class);
    Route::resource('/admin/admission/security_code', SecurityCodeController::class);
    Route::get('/admin/admission/confirmation/{id}', [AdmissionController::class, 'confirmation'])->name('admin.admission.confirmation');

    // __Download routes
    Route::get('/admin/students/idcard/generate/{id}', [IDcardController::class, 'generate'])->name('admin.students.idcard.generate');
    Route::get('/admin/teachers/idcard/generate/{id}', [IDcardController::class, 'teachers_id_generate'])->name('admin.teachers.idcard.generate');

    Route::get('/admin/download/testimonial', [TestimonialController::class, 'index'])->name('admin.download.testimonial');
    Route::post('/admin/download/testimonial/generate', [TestimonialController::class, 'generate'])->name('admin.download.testimonial.generate');

    Route::get('/admin/download/tc', [TransCertController::class, 'index'])->name('admin.download.tc');
    Route::post('/admin/download/tc/generate', [TransCertController::class, 'generate'])->name('admin.download.tc.generate');

});
