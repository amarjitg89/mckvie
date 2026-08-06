<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[App\Http\Controllers\WebsiteController::class,'index']);
Route::get('/department/computer-science-engineering',[App\Http\Controllers\WebsiteController::class,'cse_dept']);
Route::get('/course/btech-computer-science-engineering',[App\Http\Controllers\WebsiteController::class,'cse_cour']);
Route::get('/course/btech-computer-science-engineering-data-science',[App\Http\Controllers\WebsiteController::class,'cse_datascience_cour']);
Route::get('/course/btech-computer-science-engineering-ai',[App\Http\Controllers\WebsiteController::class,'cse_ai_cour']);
Route::get('/department/automobile-engineering',[App\Http\Controllers\WebsiteController::class,'automobile_dept']);
Route::get('/course/automobile-engineering',[App\Http\Controllers\WebsiteController::class,'automobile_cour']);
Route::get('/department/electrical-engineering',[App\Http\Controllers\WebsiteController::class,'electrical_dept']);
Route::get('/course/electrical-engineering',[App\Http\Controllers\WebsiteController::class,'electrical_cour']);
Route::get('/department/mechanical-engineering',[App\Http\Controllers\WebsiteController::class,'mechanical_dept']);
Route::get('/course/mechanical-engineering',[App\Http\Controllers\WebsiteController::class,'mechanical_cour']);
Route::get('/department/electronics-communication-engineering',[App\Http\Controllers\WebsiteController::class,'electronics_dept']);
Route::get('/course/btech-electronics-communication-engineering',[App\Http\Controllers\WebsiteController::class,'btech_electronics_cour']);
Route::get('/course/mtech-electronics-communication-engineering',[App\Http\Controllers\WebsiteController::class,'mtech_electronics_cour']);
Route::get('/department/information-technology',[App\Http\Controllers\WebsiteController::class,'it_dept']);
Route::get('/course/information-technology',[App\Http\Controllers\WebsiteController::class,'it_cour']);
Route::get('/department/management',[App\Http\Controllers\WebsiteController::class,'management_dept']);
Route::get('/course/mba',[App\Http\Controllers\WebsiteController::class,'mba_cour']);
Route::get('/course/bba',[App\Http\Controllers\WebsiteController::class,'bba_cour']);
Route::get('/department/basic-science-and-humanities',[App\Http\Controllers\WebsiteController::class,'humanities_dept']);
Route::get('/course/basic-science-and-humanities',[App\Http\Controllers\WebsiteController::class,'humanities_cour']);
Route::get('/about',[App\Http\Controllers\WebsiteController::class,'abot']);
Route::get('/our-inspiration',[App\Http\Controllers\WebsiteController::class,'inspire']);
Route::get('/principal-address',[App\Http\Controllers\WebsiteController::class,'princi']);
Route::get('/visit-mckvie',[App\Http\Controllers\WebsiteController::class,'visiting']);
Route::get('/the-trust',[App\Http\Controllers\WebsiteController::class,'trust']);
Route::get('/mission-vision',[App\Http\Controllers\WebsiteController::class,'vision']);
Route::get('/quality-policy',[App\Http\Controllers\WebsiteController::class,'quality']);
Route::get('/privacy-policy',[App\Http\Controllers\WebsiteController::class,'privacy']);
Route::get('/rules',[App\Http\Controllers\WebsiteController::class,'rules']);
Route::get('/policy-for-promotion',[App\Http\Controllers\WebsiteController::class,'promotion']);
Route::get('/facilities',[App\Http\Controllers\WebsiteController::class,'facilities']);
Route::get('/affiliations-accreditations-approvals',[App\Http\Controllers\WebsiteController::class,'affiliations']);
Route::get('/student-counselling',[App\Http\Controllers\WebsiteController::class,'counselling']);
Route::get('/library',[App\Http\Controllers\WebsiteController::class,'library']);
Route::get('/placements',[App\Http\Controllers\WebsiteController::class,'placement']);
Route::get('/academic-calendar',[App\Http\Controllers\WebsiteController::class,'academic']);
Route::get('/event-calendar',[App\Http\Controllers\WebsiteController::class,'eventcalen']);
Route::get('/feedback',[App\Http\Controllers\WebsiteController::class,'feedback']);
Route::get('/event/{event_slug}',[App\Http\Controllers\WebsiteController::class,'event']);
Route::get('/admission',[App\Http\Controllers\WebsiteController::class,'admission']);
Route::get('/admission-procedure',[App\Http\Controllers\WebsiteController::class,'procedure']);
Route::get('/direct-admission-notice',[App\Http\Controllers\WebsiteController::class,'admissionnotice']);
Route::get('/fees-structure',[App\Http\Controllers\WebsiteController::class,'fees']);
Route::get('/contact-us',[App\Http\Controllers\WebsiteController::class,'contact']);
Route::get('/research',[App\Http\Controllers\WebsiteController::class,'research']);
Route::get('/placement-support',[App\Http\Controllers\WebsiteController::class,'placementsupport']);
Route::get('/press-media',[App\Http\Controllers\WebsiteController::class,'press']);
Route::get('/other-coverages',[App\Http\Controllers\WebsiteController::class,'coverage']);
Route::get('/naac',[App\Http\Controllers\WebsiteController::class,'naac']);
Route::get('/grievance-redressal',[App\Http\Controllers\WebsiteController::class,'grievance']);
Route::get('/moocs-courses-through-swayam',[App\Http\Controllers\WebsiteController::class,'moocs']);
Route::get('/no-ragging',[App\Http\Controllers\WebsiteController::class,'ragging']);
Route::get('/careers',[App\Http\Controllers\WebsiteController::class,'career']);

Route::get('/aicte-approvals',[App\Http\Controllers\WebsiteController::class,'aicte']);
Route::get('/nba-accreditations',[App\Http\Controllers\WebsiteController::class,'nba_accreditations']);
Route::get('/nba',[App\Http\Controllers\WebsiteController::class,'nba']);
Route::get('/makaut-affiliations',[App\Http\Controllers\WebsiteController::class,'makaut']);
Route::get('/organisational-structure',[App\Http\Controllers\WebsiteController::class,'organisational']);
Route::get('/Syllabus',[App\Http\Controllers\WebsiteController::class,'syllabus_collage']);
Route::get('/external-collaborations',[App\Http\Controllers\WebsiteController::class,'external_collaborations']);
Route::get('/scholarships',[App\Http\Controllers\WebsiteController::class,'scholarships']);
Route::get('/admission-cell',[App\Http\Controllers\WebsiteController::class,'admission_cell']);
Route::get('/cultural-activities',[App\Http\Controllers\WebsiteController::class,'cultural_activities']);
Route::get('/games-and-sports',[App\Http\Controllers\WebsiteController::class,'games']);
Route::get('/achievements',[App\Http\Controllers\WebsiteController::class,'achievements']);
Route::get('/mckvie-rotaract-club',[App\Http\Controllers\WebsiteController::class,'rotaract']);
Route::get('/seminars-workshops',[App\Http\Controllers\WebsiteController::class,'workshop']);
Route::get('/technotica',[App\Http\Controllers\WebsiteController::class,'technotica']);
Route::get('/student-chapters',[App\Http\Controllers\WebsiteController::class,'chapters']);
Route::get('/svcpt',[App\Http\Controllers\WebsiteController::class,'svcpt']);
Route::get('/alumni-mckvie',[App\Http\Controllers\WebsiteController::class,'alumni_mckvie']);
Route::get('/recruiters',[App\Http\Controllers\WebsiteController::class,'placement_recruiters']);
Route::get('/social-media',[App\Http\Controllers\WebsiteController::class,'social']);
Route::get('/emerging-tech-labs',[App\Http\Controllers\WebsiteController::class,'tech_lab']);
Route::get('/nirf',[App\Http\Controllers\WebsiteController::class,'nirf']);
Route::get('/nisp',[App\Http\Controllers\WebsiteController::class,'nisp']);
Route::get('/ariia',[App\Http\Controllers\WebsiteController::class,'ariia']);
Route::get('/iqac',[App\Http\Controllers\WebsiteController::class,'iqac']);
Route::get('/mandatory-disclosure',[App\Http\Controllers\WebsiteController::class,'disclosure']);
Route::get('/unnat-bharat-abhiyan',[App\Http\Controllers\WebsiteController::class,'uba']);
Route::get('/annual_reports',[App\Http\Controllers\WebsiteController::class,'annual_report']);
Route::get('/audit-statement',[App\Http\Controllers\WebsiteController::class,'audit_statement']);
Route::get('/holiday-list',[App\Http\Controllers\WebsiteController::class,'holiday']);
Route::get('/faculty-contribution-automobile-engineering',[App\Http\Controllers\WebsiteController::class,'facultycontribution_ae']);
Route::get('/faculty-contribution-data-science',[App\Http\Controllers\WebsiteController::class,'facultycontribution_data']);
Route::get('/faculty-contributions-cse',[App\Http\Controllers\WebsiteController::class,'facultycontribution_cse']);
Route::get('/faculty-contributions-cse-ai',[App\Http\Controllers\WebsiteController::class,'facultycontribution_cse_ai']);
Route::get('/faculty-contributions-ece',[App\Http\Controllers\WebsiteController::class,'facultycontribution_ece']);
Route::get('/faculty-contributions-ee',[App\Http\Controllers\WebsiteController::class,'facultycontribution_ee']);
Route::get('/faculty-contributions-me',[App\Http\Controllers\WebsiteController::class,'facultycontribution_me']);
Route::get('/faculty-contributions-it',[App\Http\Controllers\WebsiteController::class,'facultycontribution_it']);
Route::get('/faculty-contributions-mba',[App\Http\Controllers\WebsiteController::class,'facultycontribution_mba']);
Route::get('/faculty-contributions-bba',[App\Http\Controllers\WebsiteController::class,'facultycontribution_bba']);
Route::get('/ev-lab',[App\Http\Controllers\WebsiteController::class,'ev_lab']);
Route::get('/3d-printing',[App\Http\Controllers\WebsiteController::class,'printing']);
Route::get('/intel-unnati-ai-lab',[App\Http\Controllers\WebsiteController::class,'intel_ai_lab']);
Route::get('/ug-courses-syllabus',[App\Http\Controllers\WebsiteController::class,'ug_courses_syllabus']);
Route::get('/pg-courses-syllabus',[App\Http\Controllers\WebsiteController::class,'pg_courses_syllabus']);
Route::get('/b-voc-courses-syllabus',[App\Http\Controllers\WebsiteController::class,'bvoc_courses_syllabus']);
Route::get('/it-student-chapter',[App\Http\Controllers\WebsiteController::class,'it_chapters']);
Route::get('/iif-student-chapter',[App\Http\Controllers\WebsiteController::class,'iif_chapters']);
Route::get('/sae-student-chapter',[App\Http\Controllers\WebsiteController::class,'sae_chapters']);
Route::get('/ieee-student-chapter',[App\Http\Controllers\WebsiteController::class,'ieee_chapters']);
Route::get('/iete-student-chapter',[App\Http\Controllers\WebsiteController::class,'iete_chapters']);
Route::get('/iet-uk-student-chapter',[App\Http\Controllers\WebsiteController::class,'ietuk_chapters']);
Route::get('/student-achievement/{slug}',[App\Http\Controllers\WebsiteController::class,'student_achievements']);
Route::get('/nptel-swayam-local-chapter',[App\Http\Controllers\WebsiteController::class,'nptel']);
Route::get('/green-campus-clean-campus',[App\Http\Controllers\WebsiteController::class,'green_campus']);
Route::get('/startup-club',[App\Http\Controllers\WebsiteController::class,'startup_club']);

Route::get('/spic-macay-heritage-club',[App\Http\Controllers\WebsiteController::class,'heritage_club']);
Route::get('/iic',[App\Http\Controllers\WebsiteController::class,'iic']);

Route::get('/aqar-supplimentary-docs',[App\Http\Controllers\WebsiteController::class,'aqar_supplimentary']);

Route::get('/faculty-contribution-basic-science-and-humanities',[App\Http\Controllers\WebsiteController::class,'facultycontribution_basic_science']);
Route::get('/course/mtech-ai-datascience',[App\Http\Controllers\WebsiteController::class,'mtech_ai']);

//=========Amarjit===========//

Route::post('/ins_enquiry_form',[App\Http\Controllers\WebsiteController::class,'ins_enquiry']);
Route::post('/get_course',[App\Http\Controllers\WebsiteController::class,'course_render']);
Route::post('/ins_course_enquiry_form',[App\Http\Controllers\WebsiteController::class,'ins_course_enquiry']);
Route::post('/ins_alumni_form',[App\Http\Controllers\WebsiteController::class,'ins_alumni_enquiry']);
Route::post('/ins_grievance_form',[App\Http\Controllers\WebsiteController::class,'ins_grievance_enquiry']);

Route::get('/cache', function()
		   {
			  Artisan::call('cache:clear'); 
		   });

Route::get('/config', function()
		   {
			  Artisan::call('config:clear'); 
		   });
		   
Route::get('/viewclear',function()
{
    Artisan::call('view:clear');
});
Route::get('/clear-cache', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');

    return "Cache cleared successfully!";
});