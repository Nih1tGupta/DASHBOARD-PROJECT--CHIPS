<?php

use Illuminate\Support\Facades\Route;


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




Route::get('/admin/dashboard', [App\Http\Controllers\DummyController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/reports', function () {
    return view('admin.reports');
})->name('reports');

Route::get('/admin/forms', function () {
    return view('admin.forms');
})->name('forms');

Route::get('/admin/calender', function () {
    return view('admin.calender');
})->name('calender');

Route::get('/admin/tender', function () {
    return view('admin.tender');
})->name('tender');
Route::get('/admin/HighChart', function () {
    return view('admin.HighChart');
})->name('HighChart');

Route::get('/admin/BarChart', function () {
    return view('admin.BarChart');
})->name('BarChart');

Route::get('/admin/tenderdetails', function () {
    return view('admin.tenderdetails');
})->name('tenderdetails');


Route::get('/admin/form1', function () {
    return view('admin.form1');
})->name('form1');

Route::get('/admin/form2', function () {
    return view('admin.form2');
})->name('form2');




Route::get('/admin/add_notice',[App\Http\Controllers\GalleryContainer::class,'add_notice'])->name('add_notice');

Route::get('/admin/view_notice', [App\Http\Controllers\GalleryContainer::class,'view_notice'])->name('view_notice');
Route::get('/admin/view_tender', [App\Http\Controllers\GalleryContainer::class, 'view_tender'])->name('view_tender');
Route::get('/admin/view_orders', [App\Http\Controllers\GalleryContainer::class,'view_orders'])->name('view_orders');
Route::get('/admin/view_circulars', [App\Http\Controllers\GalleryContainer::class, 'view_circulars'])->name('view_circulars');
Route::get('/admin/view_recruitments', [App\Http\Controllers\GalleryContainer::class,'view_recruitments'])->name('view_recruitments');
Route::get('/admin/view_notifications', [App\Http\Controllers\GalleryContainer::class, 'view_notifications'])->name('view_notifications');
Route::get('/admin/inside/{id}', [App\Http\Controllers\GalleryContainer::class,'inside'])->name('inside');

Route::post('/admin/added_notice',[App\Http\Controllers\GalleryContainer::class,'added_notice'])->name('added_notice');

Route::post('/admin/added_notice',[App\Http\Controllers\GalleryContainer::class,'added_notice'])->name('added_notice');
// Route::get('/detail', function () {
//     return view('detail');
// })->name('detail');

Route::get('/admin/create', function () {
    return view('admin.create');
})->name('create');
  

Route::post('/admin/create',[App\Http\Controllers\DummyController::class,'stored_data'])->name('create_post');
Route::get('/admin/detail',[App\Http\Controllers\DummyController::class,'detail'])->name('detail');
Route::get('/admin/edit_record/{id}',[App\Http\Controllers\DummyController::class,'edit'])->name('edit');
Route::post('/admin/edit_record/{id}',[App\Http\Controllers\DummyController::class,'edited'])->name('edited');


Route::get('/admin/view_pending/{id}', [App\Http\Controllers\GalleryContainer::class, 'view_pending'])->name('view_pending');
Route::get('/admin/view_pending_request', [App\Http\Controllers\GalleryContainer::class, 'view_pending_request'])->name('view_pending_request');

Route::get('/admin/view_pending/accept/{id}', [App\Http\Controllers\GalleryContainer::class, 'accept_gallery'])->name('accept_gallery');
Route::get('/admin/view_pending/reject/{id}', [App\Http\Controllers\GalleryContainer::class, 'reject_gallery'])->name('reject_gallery');


Route::get('/admin/view_all_requests_for_member', [App\Http\Controllers\GalleryContainer::class, 'view_all_requests_for_member'])->name('view_all_requests_for_member');




Route::get('/admin/view_gallery',[App\Http\Controllers\GalleryContainer::class,'view_gallery'])->name('view_gallery') ;
Route::get('/admin/add_gallery',[App\Http\Controllers\GalleryContainer::class,'add_gallery'])->name('add_gallery');
Route::post('/admin/add_gallery',[App\Http\Controllers\GalleryContainer::class,'upload'])->name('add_gallery_post') ;
Route::get('/admin/view_gallery/{id}',[App\Http\Controllers\GalleryContainer::class,'view_gallery_id']) ;
Route::post('/admin/view_gallery/{id}',[App\Http\Controllers\GalleryContainer::class,'view_gallery_id_post'])->name('view_gallery_id_post') ;


Route::get('/admin/notify', function () {
    return view('admin.notify');
})->name('notify');


Route::get('/admin/request', function () {
    return view('admin.request');
})->name('request');


Route::get('/admin/requested',[App\Http\Controllers\GalleryContainer::class,'requested'])->name('requested') ;


    //   \\        //  \\\   //////////////////////////// \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/user_views/home', function () {
    return view('user_views.home');
})->name('home');
Route::get('/gallery', [App\Http\Controllers\GalleryContainer::class, 'user_view_gallery'])->name('all_gallery');
Route::get('/gallery/{id}', [App\Http\Controllers\GalleryContainer::class, 'user_view_gallery_id'])->name('user_view_gallery_id');


Route::get('/user_views/photos',[App\Http\Controllers\GalleryContainer::class,'view_photos'])->name('view_photos') ;

Route::get('/user_views/photos2/{id}',[App\Http\Controllers\GalleryContainer::class,'view_photos_id']) ;

Route::get('/user_views/login', function () {
    return view('user_views.login');
})->name('login');

Route::post('/user_views/login', [App\Http\Controllers\GalleryContainer::class, 'login_done'])->name('login_done');

Route::get('/logout', [App\Http\Controllers\GalleryContainer::class, 'logout']) -> name('logout');




// MAIN PROJECT


// Route::get('/home', function () {
//     return view('e&it_views.home');
// })->name('e&it_views.home');
Route::get('/home', [App\Http\Controllers\GalleryContainer::class, 'view_home'])->name('view_home');

// Route::get('/acts_and_rules', function () {
//     return view('e&it_views.acts_and_rules');
// })->name('e&it_views.acts_and_rules');
Route::get('/acts_and_rules', [App\Http\Controllers\GalleryContainer::class, 'view_acts_and_rules'])->name('view_acts_and_rules');

// Route::get('/subject_matter_art_scheme', function () {
//     return view('e&it_views.subject_matter_art_scheme');
// })->name('e&it_views.subject_matter_art_scheme');
Route::get('/subject_matter_art_scheme', [App\Http\Controllers\GalleryContainer::class, 'view_subject_matter_art_scheme'])->name('view_subject_matter_art_scheme');

Route::get('/contact_us', function () {
    return view('e&it_views.contact_us');
})->name('e&it_views.contact_us');

// Route::get('/right_to_information', function () {
//     return view('e&it_views.right_to_information');
// })->name('e&it_views.right_to_information');
Route::get('/right_to_information', [App\Http\Controllers\GalleryContainer::class, 'view_right_to_information'])->name('view_right_to_information');

Route::get('/chips_activity', function () {
    return view('e&it_views.chips_activity');
})->name('e&it_views.chips_activity');

// Route::get('/who', function () {
//     return view('e&it_views.who');
// })->name('e&it_views.who');

Route::get('/view_whos_who', [App\Http\Controllers\GalleryContainer::class, 'view_whos_who'])->name('view_whos_who');

// Route::get('/organization_chart', function () {
//     return view('e&it_views.organization_chart');
// })->name('e&it_views.organization_chart');
Route::get('/organization_chart', [App\Http\Controllers\GalleryContainer::class, 'view_organization_chart'])->name('view_organization_chart');

// Route::get('/achievement', function () {
//     return view('e&it_views.achievement');
// })->name('e&it_views.achievement');

Route::get('/achievements', [App\Http\Controllers\GalleryContainer::class, 'view_achievements'])->name('view_achievements');

// Route::get('/departmental_structure', function () {
//     return view('e&it_views.departmental_structure');
// })->name('e&it_views.departmental_structure');
Route::get('/departmental_structure', [App\Http\Controllers\GalleryContainer::class, 'view_departmental_structure'])->name('view_departmental_structure');


// Route::get('/departmental_activity', function () {
//     return view('e&it_views.departmental_activity');
// })->name('e&it_views.departmental_activity');
Route::get('/departmental_activities', [App\Http\Controllers\GalleryContainer::class, 'view_departmental_activities'])->name('view_departmental_activities');

// Route::get('/services', function () {
//     return view('e&it_views.services');
// })->name('e&it_views.services');
 
Route::get('/services', [App\Http\Controllers\GalleryContainer::class, 'view_services'])->name('view_services');
// Route::get('/notice_board', function () {
//     return view('e&it_views.notice_board');
// })->name('e&it_views.notice_board');
Route::get('/notice_board', [App\Http\Controllers\GalleryContainer::class, 'eit_view_notice_board'])->name('eit_view_notice_board');




// Route::get('/programs', function () {
//     return view('e&it_views.programs');
// })->name('e&it_views.programs');
Route::get('/program_and_schemes', [App\Http\Controllers\GalleryContainer::class, 'view_program_and_schemes'])->name('view_program_and_schemes');


// Route::get('/news', function () {
//     return view('e&it_views.news');
// })->name('e&it_views.news');


// Route::get('/tender', function () {
//     return view('e&it_views.tender');
// })->name('e&it_views.tender');


// Route::get('/order', function () {
//     return view('e&it_views.order');
// })->name('e&it_views.order');

// Route::get('/circular', function () {
//     return view('e&it_views.circular');
// })->name('e&it_views.circular');

// Route::get('/recruitment', function () {
//     return view('e&it_views.recruitment');
// })->name('e&it_views.recruitment');

// Route::get('/notification', function(){
//     return view('e&it_views.notification');
// })->name('e&it_views.notification');
Route::get('/news', [App\Http\Controllers\GalleryContainer::class, 'eit_view_news'])->name('eit_view_news');
Route::get('/tenders', [App\Http\Controllers\GalleryContainer::class, 'eit_view_tenders'])->name('eit_view_tenders');
Route::get('/orders', [App\Http\Controllers\GalleryContainer::class, 'eit_view_orders'])->name('eit_view_orders');
Route::get('/circulars', [App\Http\Controllers\GalleryContainer::class, 'eit_view_circulars'])->name('eit_view_circulars');
Route::get('/recruitments', [App\Http\Controllers\GalleryContainer::class, 'eit_view_recruitments'])->name('eit_view_recruitments');
Route::get('/notifications', [App\Http\Controllers\GalleryContainer::class, 'eit_view_notifications'])->name('eit_view_notifications');

Route::get('/e&it_views/photo_gallery',[App\Http\Controllers\GalleryContainer::class,'photo_gallery'])->name('photo_gallery') ;

Route::get('/e&it_views/photo_gallery2/{id}',[App\Http\Controllers\GalleryContainer::class,'photo_gallery2']) ;



Route::get('/view_notice/{id}', [App\Http\Controllers\GalleryContainer::class, 'eit_view_notice_id'])->name('eit_view_notice_id');
Route::get('/notice_board', [App\Http\Controllers\GalleryContainer::class, 'eit_view_notice_board'])->name('eit_view_notice_board');


Route::get('/about_chips', function () {
    return view('e&it_views.about_chips');
})->name('e&it_views.about_chips');




// CHIPS ACTIVITY
Route::get('/StateWide', function () {
    return view('e&it_views.StateWide');
})->name('e&it_views.StateWide');

Route::get('/BharatNet', function () {
    return view('e&it_views.BharatNet');
})->name('e&it_views.BharatNet');

Route::get('/BastarNet', function () {
    return view('e&it_views.BastarNet');
})->name('e&it_views.BastarNet');

Route::get('/Wi-Fi', function () {
    return view('e&it_views.Wi-Fi');
})->name('e&it_views.Wi-Fi');





Route::get('/Establishment', function () {
    return view('e&it_views.Establishment');
})->name('e&it_views.Establishment');

Route::get('/State-Data', function () {
    return view('e&it_views.State-Data');
})->name('e&it_views.State-Data');


Route::get('/State-Portal', function () {
    return view('e&it_views.State-Portal');
})->name('e&it_views.State-Portal');

Route::get('/E', function () {
    return view('e&it_views.E');
})->name('e&it_views.E');

Route::get('/Common', function () {
    return view('e&it_views.Common');
})->name('e&it_views.Common');

Route::get('/Aadhar', function () {
    return view('e&it_views.Aadhar');
})->name('e&it_views.Aadhar');

Route::get('/Integrated', function () {
    return view('e&it_views.Integrated');
})->name('e&it_views.Integrated');

Route::get('/Chhattisgarh-Haat', function () {
    return view('e&it_views.Chhattisgarh-Haat');
})->name('e&it_views.Chhattisgarh-Haat');


Route::get('/Chhattisgarh-Darpan', function () {
    return view('e&it_views.Chhattisgarh-Darpan');
})->name('e&it_views.Chhattisgarh-Darpan');


Route::get('/CG', function () {
    return view('e&it_views.CG');
})->name('e&it_views.CG');


Route::get('/Web', function () {
    return view('e&it_views.Web');
})->name('e&it_views.Web');


Route::get('/Digital', function () {
    return view('e&it_views.Digital');
})->name('e&it_views.Digital');

Route::get('/E-Procurement', function () {
    return view('e&it_views.E-Procurement');
})->name('e&it_views.E-Procurement');

Route::get('/Central', function () {
    return view('e&it_views.Central');
})->name('e&it_views.Central');


Route::get('/Capacity', function () {
    return view('e&it_views.Capacity');
})->name('e&it_views.Capacity');

Route::get('/BuildNext', function () {
    return view('e&it_views.BuildNext');
})->name('e&it_views.BuildNext');

Route::get('/Payment', function () {
    return view('e&it_views.Payment');
})->name('e&it_views.Payment');

Route::get('/e-Samiksha', function () {
    return view('e&it_views.e-Samiksha');
})->name('e&it_views.e-Samiksha');

Route::get('/CG-Camp', function () {
    return view('e&it_views.CG-Camp');
})->name('e&it_views.CG-Camp');


Route::get('/e-Punchboard', function () {
    return view('e&it_views.e-Punchboard');
})->name('e&it_views.e-Punchboard');

Route::get('/Information', function () {
    return view('e&it_views.Information');
})->name('e&it_views.Information');

Route::get('/Geographic', function () {
    return view('e&it_views.Geographic');
})->name('e&it_views.Geographic');

Route::get('/Incubator', function () {
    return view('e&it_views.Incubator');
})->name('e&it_views.Incubator');