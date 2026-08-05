<?php

namespace App\Http\Controllers;

use App\Models\AlumniRegistration;
use App\Models\CorporateTieUp;
use App\Models\Course;
use App\Models\CourseEnquiry;
use App\Models\Department;
use App\Models\Enquiry;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\Faculty;
use App\Models\GrievanceRedressal;
use App\Models\Lab;
use App\Models\Notice;
use App\Models\Recruiter;
use App\Models\StudentAcheivement;
use App\Models\SuccessStories;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $Notice=Notice::where("active",'1')->where("show_on_home","1")->orderBy("created_at","asc")->get();
        $department=Department::where('active','1')->orderBy("department_name","asc")->get();
        
        return view('home',compact('Notice','department'));
    }
    public function ins_enquiry(Request $request)
    {
        $request->validate(
            [
                'enquirer_name'=>'required',
                'enquirer_contact'=>'required|digits:10',
                'enquirer_email'=>'required|email',
                'department_slug'=>'required',
                'course_slug'=>'required',
        ],
        [
            'enquirer_name.required'=>' * Please Enter Your Name.',
            'enquirer_contact.required'=>' * Please Enter Your Mobile No.',
            'enquirer_contact.digits'=>' * Mobile No. Cannot Be Less Than 10 Digits.',
            'enquirer_email.required'=>' * Please Enter Your Email Id.',
            'enquirer_email.email'=>' * Please Enter A Valid Email Id.',
            'department_slug.required'=>' * Please Select A Department.',
            'course_slug.required'=>' * Please Select A Course.',
        ]
        );

        $Enquiry_Data=new Enquiry;

        $Enquiry_Data->enquirer_name=$request->enquirer_name;
        $Enquiry_Data->enquirer_contact=$request->enquirer_contact;
        $Enquiry_Data->enquirer_email=$request->enquirer_email;
        $Enquiry_Data->department_slug=$request->department_slug;
        $Enquiry_Data->course_slug=$request->course_slug;
        
        $Enquiry_Data->save();

        return redirect('/')->with('message','Enquiry Has Been Successfully Submitted.');
    }
    public function course_render(Request $request)
    {
        if($request->Dept!='')
            {
            $Dept=$request->Dept;
            }
        if($request->Dept_Mob!='')
            {
            $Dept=$request->Dept_Mob;
            }

        $Get_Course=Course::where('department_slug',$Dept)->where('active','1')->orderBy("course_name","asc")->get();

        $Cont=view('render_departmentwise_course',compact('Get_Course','Dept'))->render();

        return response()->json(['htmlcont'=>$Cont]);
    }
     public function cse_dept(Request $request)
    {        
        $banner_img='CSE-department.webp';
        $banner_img_mob='CSE-department-mob.webp';
        $banner_heading='Computer Science & Engineering';
        $banner_subheading='Departments & Programmes / Computer Science & Engineering';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('department',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 

     public function cse_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
        $banner_img='CSE-department.webp';
        $banner_img_mob='CSE-department-mob.webp';
        $banner_heading='B.TECH Computer Science & Engineering';
        $banner_subheading='Departments & Programmes / Computer Science & Engineering / B.Tech Computer Science & Engineering';
        return view('computer-science-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    } 


     public function cse_datascience_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
        $banner_img='CSE-data-science.webp';
        $banner_img_mob='CSE-data-science-mobile.webp';
        $banner_heading='B.Tech Computer Science and Engineering (Data Science)';
        $banner_subheading='Departments & Programmes / Computer Science & Engineering / B.Tech Computer Science and Engineering (Data Science)';
        return view('computer-science-engineering-data-science',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }

     public function cse_ai_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
        $banner_img='CSE(AI&ML) Page Banner {Desktop 1450 x 330 px}.webp';
        $banner_img_mob='CSE-ai-mobile.webp';
        $banner_heading='B.Tech in Computer Science and Engineering (Artificial Intelligence & Machine Learning)';
        $banner_subheading='Departments & Programmes / Computer Science & Engineering / B.Tech in Computer Science and Engineering (Artificial Intelligence & Machine Learning)';
        return view('computer-science-engineering-ai',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }


    public function automobile_dept(Request $request)
    {
        $banner_img='automobile-banner.webp';
        $banner_img_mob='automobile-banner-mob.webp';
        $banner_heading='Automobile Engineering';
        $banner_subheading='Departments & Programmes / Automobile Engineering';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('automobile-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 

    public function automobile_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
        $banner_img='automobile-banner.webp';
        $banner_img_mob='automobile-banner-mob.webp';
        $banner_heading='Automobile Engineering';
        $banner_subheading='Departments & Programmes / Automobile Engineering';
        return view('course-automobile-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }


    public function electrical_dept(Request $request)
    {
        $banner_img='electrical-banner.webp';
        $banner_img_mob='electrical-banner-mob.webp';
        $banner_heading='Electrical Engineering';
        $banner_subheading='Departments & Programmes / Electrical Engineering';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('electrical-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 

    public function electrical_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
        $banner_img='electrical-banner.webp';
        $banner_img_mob='electrical-banner-mob.webp';
        $banner_heading='Electrical Engineering';
        $banner_subheading='Departments & Programmes / Electrical Engineering';
        return view('course-electrical-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }

     public function mechanical_dept(Request $request)
    {
        $banner_img='mechanical-banner.webp';
        $banner_img_mob='mechanical-banner-mob.webp';
        $banner_heading='Mechanical Engineering';
        $banner_subheading='Departments & Programmes / Mechanical Engineering';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('mechanical-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 


public function mechanical_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
        $banner_img='mechanical-banner.webp';
        $banner_img_mob='mechanical-banner-mob.webp';
        $banner_heading='Mechanical Engineering';
        $banner_subheading='Departments & Programmes / Mechanical Engineering';
        return view('course-mechanical-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }


    public function electronics_dept(Request $request)
    {
        $banner_img='communication-banner.webp';
        $banner_img_mob='communication-banner-mob.webp';
        $banner_heading='Electronics and Communications Engineering';
        $banner_subheading='Departments & Programmes / Electronics and Communications Engineering';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('communication-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 


    public function btech_electronics_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
       $banner_img='Banner.webp';
        $banner_img_mob='Banner-mob.webp';
        $banner_heading='B.Tech in Electronics and Communications Engineering';
        $banner_subheading='Departments & Programmes / Electronics and Communications Engineering / B.Tech in Electronics and Communications Engineering';
        return view('course-btech-communication-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }

        public function mtech_electronics_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
       $banner_img='communication-banner.webp';
        $banner_img_mob='communication-banner-mob.webp';
        $banner_heading='M.Tech in Electronics and Communications Engineering';
        $banner_subheading='Departments & Programmes / Electronics and Communications Engineering / M.Tech in Electronics and Communications Engineering';
        return view('course-mtech-communication-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }

public function it_dept(Request $request)
    {
        $banner_img='it-banner.webp';
        $banner_img_mob='it-banner-mob.webp';
        $banner_heading='Information Technology';
        $banner_subheading='Departments & Programmes / Information Technology';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('information-technology',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 


      public function it_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
       $banner_img='it-banner.webp';
        $banner_img_mob='it-banner-mob.webp';
        $banner_heading='Information Technology';
        $banner_subheading='Departments & Programmes / Information Technology';
        return view('course-information-technology',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }

    public function management_dept(Request $request)
    {
        $banner_img='management-banner.webp';
        $banner_img_mob='management-banner-mob.webp';
        $banner_heading='Management';
        $banner_subheading='Departments & Programmes / Management';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('management',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 


  public function mba_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
       $banner_img='management-banner.webp';
        $banner_img_mob='management-banner-mob.webp';
        $banner_heading='MBA';
        $banner_subheading='Departments & Programmes / Management / MBA';
        return view('course-mba',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }

 public function bba_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
       $banner_img='management-banner.webp';
        $banner_img_mob='management-banner-mob.webp';
        $banner_heading='BBA';
        $banner_subheading='Departments & Programmes / Management / BBA';
        return view('course-bba',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }


     public function humanities_dept(Request $request)
    {
        $banner_img='humaniti-banner.webp';
        $banner_img_mob='humaniti-banner-mob.webp';
        $banner_heading='Basic Science & Humanities';
        $banner_subheading='Departments & Programmes / Basic Science & Humanities';
        $path = $request->path();
        $slug = basename($path);
        $Notice=Notice::where("active",'1')->where("department_slug",$slug)->orderBy("created_at","asc")->get();
        return view('basic-science',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','Notice'));
    } 

    public function humanities_cour(Request $request)
    {
        $path = $request->path();
        $slug = basename($path);
        $get_faculty=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","0")->OrderBy('sequence','asc')->get();
        $get_hod=Faculty::where("course_slug",$slug)->where("active",'1')->where("hod","1")->first();
        $get_corporate=CorporateTieUp::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_recruiter=Recruiter::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_lab=Lab::where("course_slug",$slug)->where("active",'1')->get();
        $get_event=Event::where("course_slug",$slug)->where("active",'1')->orderBy("sequence","asc")->get();
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->limit(3)->get();
        $get_success_stories=SuccessStories::where("course_slug",$slug)->where("active",'1')->get();
       $banner_img='humaniti-banner.webp';
        $banner_img_mob='humaniti-banner-mob.webp';
        $banner_heading='Basic Science & Humanities';
        $banner_subheading='Departments & Programmes / Basic Science & Humanities';
        return view('course-basic-science',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','slug','get_faculty','get_hod','get_corporate','get_recruiter','get_lab','get_event','get_acheivement','get_success_stories'));
    }




  public function abot()
    {
        $banner_img='about-banner.webp';
        $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='ABOUT MCKV Institute of Engineering';
        $banner_subheading='About Us / About MCKV Institute of Engineering';
        return view('about',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 


    public function  organisational()
    {
        $banner_img='about-banner.webp';
        $banner_img_mob='about-mobile-banner.webp';
        $banner_heading=' Organisational Structure';
        $banner_subheading='About Us /  Organisational Structure';
        return view('organisational-structure',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

    public function inspire()
    {
        $banner_img='Our-inspiration-banner.webp';
        $banner_img_mob='Our-inspiration-mobile-banner.webp';
        $banner_heading='Our Inspiration';
        $banner_subheading='About Us / Our Inspiration';
        return view('inspiration',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

     public function princi()
    {
        $banner_img='principal-address-banner.webp';
        $banner_img_mob='principal-address-mobile-banner.webp';
        $banner_heading='Principal’s Desk';
        $banner_subheading='About Us / Principal’s Desk';
        return view('principal',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

    public function visiting()
    {
        $banner_img='campus.607x0-is.webp';
        $banner_img_mob='visit-mobile-banner.webp';
        $banner_heading='Visiting MCKVIE';
        $banner_subheading='About Us / Visiting MCKVIE';
        return view('visit',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

     public function trust()
    {
        $banner_img='trust.webp';
        $banner_img_mob='trust-mobile-banner.webp';
        $banner_heading='The Trust';
        $banner_subheading='About Us / The Trust';
        return view('trust',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

     public function vision()
    {
        $banner_img='mission-vision-banner.webp';
        $banner_img_mob='mission-vision-mobile-banner.webp';
        $banner_heading='Vision and Mission';
        $banner_subheading='About Us / Vision and Mission';
        return view('vision',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

    public function quality()
    {
        $banner_img='quality-policy-banner.webp';
        $banner_img_mob='quality-policy-mobile-banner.webp';
        $banner_heading='Quality Policy';
        $banner_subheading='About Us / Quality Policy';
        return view('quality',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

    public function privacy()
    {
        $banner_img='privacy-policy-banner.webp';
        $banner_img_mob='privacy-policy-mobile-banner.webp';
        $banner_heading='Privacy Policy';
        $banner_subheading='About Us / Privacy Policy';
        return view('privacy',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

    public function rules()
    {
        $banner_img='rules-banner.webp';
        $banner_img_mob='rules-mobile-banner.webp';
        $banner_heading='Rules and Regulations';
        $banner_subheading='About Us / Rules and Regulations';
        return view('rules',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function promotion()
    {
        $banner_img='rules-banner.webp';
        $banner_img_mob='rules-mobile-banner.webp';
        $banner_heading='Policy for Promotion of Research';
        $banner_subheading='Rules / Policy for Promotion of Research';
        return view('promotion',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

     public function facilities()
    {
        $banner_img='facility-banner.webp';
        $banner_img_mob='facility_mobile_banner.webp';
        $banner_heading='Facilities';
        $banner_subheading='Academics / Facilities';
        return view('facilities',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function affiliations()
    {
        $banner_img='affiliations-banner.webp';
         $banner_img_mob='affiliations-mobile-banner.webp';
        $banner_heading='Affiliations, Accreditations, Approvals';
        $banner_subheading='About Us / Affiliations, Accreditations, Approvals';
        return view('affiliations',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function counselling()
    {
        $banner_img='student-counselling-banner.webp';
         $banner_img_mob='student-counselling-mobile-banner.webp';
        $banner_heading='Student Counselling';
        $banner_subheading='Campus Life / Student Counselling';
        return view('counselling',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function cultural_activities()
    {
        $banner_img='event-calender.webp';
         $banner_img_mob='event-calender-mobile.webp';
        $banner_heading='Cultural Activities';
        $banner_subheading='Campus Life / Cultural Activities';
        return view('cultural-activities',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function games()
    {
        $banner_img='sports-banner.webp';
         $banner_img_mob='sports-banner-mobile.webp';
        $banner_heading='Games & Sports';
        $banner_subheading='Campus Life / Games & Sports';
        return view('games-and-sports',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function achievements()
    {
        $banner_img='achievements-banner.webp';
         $banner_img_mob='achievements-banner-mobile.webp';
        $banner_heading='Achievements';
        $banner_subheading='Campus Life / Achievements';
        return view('student-achievements',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function rotaract()
    {
        $banner_img='rotary-club-banner.webp';
         $banner_img_mob='rotary-club-banner-mobile.webp';
        $banner_heading='MCKVIE Risers Club';
        $banner_subheading='Campus Life / MCKVIE Risers Club';
        return view('rotaract-club',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function workshop()
    {
        $banner_img='seminars-banner.webp';
         $banner_img_mob='seminars-banner-mobile.webp';
        $banner_heading='Seminars & Workshops';
        $banner_subheading='Campus Life / Seminars & Workshops';
        return view('seminars-workshops',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function technotica()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Technical Events';
        $banner_subheading='Campus Life / Technical Events';
        return view('technotica',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function chapters()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='Student Chapters';
        $banner_subheading='Campus Life / Student Chapters';
        return view('student-chapters',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function svcpt()
    {
        $banner_img='svcpt-banner.webp';
         $banner_img_mob='svcpt-banner-mobile.webp';
        $banner_heading='Swami Vivekananda Centre for Positive Thinking (SVCPT)';
        $banner_subheading='Campus Life / SVCPT';
        return view('svcpt',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }


    public function alumni_mckvie()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Alumni MCKVIE';
        $banner_subheading='Campus Life / Alumni MCKVIE';
        $department=Department::where('active','1')->orderBy("department_name","asc")->get();
        return view('alumni-mckvie',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','department'));
    }

    public function library()
    {
        $banner_img='library-banner.webp';
         $banner_img_mob='library-mobile-banner.webp';
        $banner_heading='Library';
        $banner_subheading='Library';
        return view('library',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function placement()
    {
        $banner_img='placement-banner.webp';
         $banner_img_mob='placement-mobile-banner.webp';
        $banner_heading='Placements';
        $banner_subheading='Placements';
        return view('placement',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function placement_recruiters()
    {
        $banner_img='placement-banner.webp';
         $banner_img_mob='placement-mobile-banner.webp';
        $banner_heading='Recruiters';
        $banner_subheading='Placements / Recruiters';
        return view('recruiters',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function academic()
    {
        $banner_img='about-banner.webp';
         $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='Academic Calendar';
        $banner_subheading='Academics / Academic Calendar';
        return view('academiccalender',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

     public function syllabus_collage()
    {
        $banner_img='about-banner.webp';
         $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='Syllabus';
        $banner_subheading='Academics / Syllabus';
        return view('syllabus',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function external_collaborations()
    {
        $banner_img='about-banner.webp';
         $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='External Collaborations';
        $banner_subheading='Academics / External Collaborations';
        return view('external-collaborations',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function scholarships()
    {
        $banner_img='about-banner.webp';
         $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='Scholarships';
        $banner_subheading='Academics / Scholarships';
        return view('scholarships',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

     public function eventcalen()
    {
        $banner_img='event-calender.webp';
         $banner_img_mob='event-calender-mobile.webp';
        $banner_heading='Event Calendar';
        $banner_subheading='Academics / Event Calendar';
        return view('eventcalender',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function feedback()
    {
        $banner_img='feedback.webp';
         $banner_img_mob='feedback-mobile.webp';
        $banner_heading='Feedback';
        $banner_subheading='Academics / Feedback';
        return view('feedback',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

 public function event($event_id)
    {
        $banner_img='event-banner.webp';
         $banner_img_mob='event-banner-mobile.webp';
        $banner_heading='Event';
        $banner_subheading='Departments & Programmes / Event';
        $get_event=Event::where("event_slug",$event_id)->first();
        $get_event_image=EventImage::where("event_slug",$event_id)->where("active","1")->orderBy("sequence","asc")->get();


        return view('event',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','get_event','get_event_image'));
    }

    public function admission()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Admission';
        $banner_subheading='Admission';
        return view('admission',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function admission_cell()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Admission Cell';
        $banner_subheading='Admission / Admission Cell';
        return view('admission-cell',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function procedure()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Admission Procedure';
        $banner_subheading='Admission / Admission Procedure';
        return view('admissionprocedure',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function admissionnotice()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Direct Admission Notice';
        $banner_subheading='Admission / Direct Admission Notice';
        return view('admissionnotice',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function fees()
    {
        $banner_img='fees-structure-banner.webp';
         $banner_img_mob='fees-structure-banner-mobile.webp';
        $banner_heading='Fees Structure';
        $banner_subheading='Admission / Fees Structure';
        return view('feesstructure',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function contact()
    {
        $banner_img='contact-banner.webp';
         $banner_img_mob='contact-banner-mobile.webp';
        $banner_heading='Contact Us';
        $banner_subheading='Contact Us';
        return view('contactus',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }


    public function research()
    {
        $banner_img='rules-banner.webp';
         $banner_img_mob='rules-mobile-banner.webp';
        $banner_heading='Research';
        $banner_subheading='Research';
        return view('research',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function placementsupport()
    {
        $banner_img='placement-banner.webp';
         $banner_img_mob='placement-mobile-banner.webp';
        $banner_heading='Placement Support';
        $banner_subheading='Placements / Placement Support';
        return view('placementsupport',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }


    public function press()
    {
        $banner_img='press-banner.webp';
         $banner_img_mob='press-banner-mobile.webp';
        $banner_heading='Press & Media';
        $banner_subheading='Press & Media';
        return view('press',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function coverage()
    {
        $banner_img='other-coverage-banner.webp';
         $banner_img_mob='other-coverage-banner-mobile.webp';
        $banner_heading='Other Coverages';
        $banner_subheading='Press & Media / Other Coverages';
        return view('coverage',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

     public function naac()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='NAAC';
        $banner_subheading='NAAC';
        return view('naac',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }


    public function aicte()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='AICTE Approvals';
        $banner_subheading='AICTE Approvals';
        return view('aicte',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function nba_accreditations()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='NBA Accreditations';
        $banner_subheading='NBA Accreditations';
        return view('nba-accreditations',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    public function nba()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='NBA ';
        $banner_subheading='NBA';
        return view('nba',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function makaut()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='MAKAUT Affiliations';
        $banner_subheading='MAKAUT Affiliations';
        return view('makaut',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function grievance()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Grievance Redressal';
        $banner_subheading='Grievance Redressal';
        return view('grievance',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

     public function moocs()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='MOOCs Courses through SWAYAM';
        $banner_subheading='MOOCs Courses through SWAYAM';
        return view('moocs',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

     public function ragging()
    {
        $banner_img='no-ragging-banner.webp';
         $banner_img_mob='no-ragging-banner-mobile.webp';
        $banner_heading='Anti Ragging Committee & Circulars';
        $banner_subheading='Anti Ragging Committee & Circulars';
        return view('ragging',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function career()
    {
        $banner_img='affiliations-banner.webp';
         $banner_img_mob='affiliations-mobile-banner.webp';
        $banner_heading='Careers';
        $banner_subheading='Careers';
        return view('career',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function social()
    {
        $banner_img='social-media-banner.webp';
         $banner_img_mob='social-media-banner-mobile.webp';
        $banner_heading='Social Media';
        $banner_subheading='Press & Media / Social Media';
        return view('social-media',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function tech_lab()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Emerging Tech Labs';
        $banner_subheading='Emerging Tech Labs';
        return view('emerging-tech-labs',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

public function nirf()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='NIRF';
        $banner_subheading='NIRF';
        return view('nirf',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }


public function nisp()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='National Innovation and Start-up Policy (NISP)';
        $banner_subheading='NISP';
        return view('nisp',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

public function ariia()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='ARIIA';
        $banner_subheading='ARIIA';
        return view('ariia',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

 public function iqac()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Internal Quality Assurance Cell (IQAC)';
        $banner_subheading='IQAC';
        return view('iqac',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 
    
    
    public function disclosure()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Mandatory Disclosure';
        $banner_subheading='Mandatory Disclosure';
        return view('mandatory-disclosure',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

     public function uba()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Unnat Bharat Abhiyan (UBA)';
        $banner_subheading='Unnat Bharat Abhiyan (UBA)';
        return view('unnat-bharat-abhiyan',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 


    public function annual_report()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Annual Reports';
        $banner_subheading='Annual Reports';
        return view('annual_reports',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

     public function audit_statement()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Audit Statement';
        $banner_subheading='Audit Statement';
        return view('audit-statement',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 
    
     public function holiday()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='Holiday List';
        $banner_subheading='Holiday List';
        return view('holiday',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 

public function facultycontribution_ae()
    {
        $banner_img='automobile-banner.webp';
        $banner_img_mob='automobile-banner-mob.webp';
        $banner_heading='Faculty Contributions (Automobile Engineering)';
        $banner_subheading='Departments & Programmes / Automobile Engineering / Faculty Contributions';
        return view('faculty-contribution-automobile-engineering',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

      public function facultycontribution_data()
    {
        $banner_img='CSE-data-science.webp';
        $banner_img_mob='CSE-data-science-mobile.webp';
        $banner_heading='Faculty Contributions (Data Science)';
        $banner_subheading='Departments & Programmes / Computer Science & Engineering / B.Tech Computer Science and Engineering (Data Science) / Faculty Contributions';
        return view('faculty-contribution-data-science',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    
       public function facultycontribution_cse()
    {
        $banner_img='CSE-department.webp';
        $banner_img_mob='CSE-department-mob.webp';
        $banner_heading='Faculty Contributions Computer Science & Engineering';
        $banner_subheading='Departments & Programmes / Computer Science & Engineering / B.Tech Computer Science & Engineering  / Faculty Contributions';
        return view('faculty-contributions-cse',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    
     public function facultycontribution_cse_ai()
    {
        $banner_img='CSE(AI&ML) Page Banner {Desktop 1450 x 330 px}.webp';
        $banner_img_mob='CSE-ai-mobile.webp';
        $banner_heading='Faculty Contributions Artificial Intelligence & Machine Learning';
        $banner_subheading='Departments & Programmes / Computer Science & Engineering / Artificial Intelligence & Machine Learning / Faculty Contributions';
        return view('faculty-contributions-cse-ai',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    
    public function facultycontribution_ece()
    {
        $banner_img='Banner.webp';
        $banner_img_mob='Banner-mob.webp';
        $banner_heading='Faculty Contributions Electronics and Communications Engineering';
        $banner_subheading='Departments & Programmes / Electronics and Communications Engineering /   Faculty Contributions';
        return view('faculty-contributions-ece',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    
     public function facultycontribution_ee()
    {
        $banner_img='electrical-banner.webp';
        $banner_img_mob='electrical-banner-mob.webp';
        $banner_heading='Faculty Contributions Electrical Engineering';
        $banner_subheading='Departments & Programmes / Electrical Engineering /   Faculty Contributions';
        return view('faculty-contributions-ee',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    
    public function facultycontribution_me()
    {
        $banner_img='mechanical-banner.webp';
        $banner_img_mob='mechanical-banner-mob.webp';
        $banner_heading='Faculty Contributions Mechanical Engineering';
        $banner_subheading='Departments & Programmes / Mechanical Engineering /   Faculty Contributions';
        return view('faculty-contributions-me',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    public function facultycontribution_it()
    {
        $banner_img='it-banner.webp';
        $banner_img_mob='it-banner-mob.webp';
        $banner_heading='Faculty Contributions Information Technology';
        $banner_subheading='Departments & Programmes / Information Technology /   Faculty Contributions';
        return view('faculty-contributions-it',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    
     public function facultycontribution_mba()
    {
        $banner_img='management-banner.webp';
        $banner_img_mob='management-banner-mob.webp';
        $banner_heading='Faculty Contributions MBA';
        $banner_subheading='Departments & Programmes / Management / MBA / Faculty Contributions';
        return view('faculty-contributions-mba',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
         public function facultycontribution_bba()
    {
        $banner_img='management-banner.webp';
        $banner_img_mob='management-banner-mob.webp';
        $banner_heading='Faculty Contributions BBA';
        $banner_subheading='Departments & Programmes / Management / BBA / Faculty Contributions';
        return view('faculty-contributions-bba',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
    
    
    public function ev_lab()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Emerging Tech Lab (EV Lab)';
        $banner_subheading='Emerging Tech Labs / EV Lab';
        return view('ev-lab',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function printing()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='3D Printing Lab';
        $banner_subheading='Emerging Tech Labs / 3D Printing Lab';
        return view('3d-printing',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

     public function intel_ai_lab()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Intel® Unnati Data-Centric Lab in Emerging Technologies – Artificial Intelligence Lab';
        $banner_subheading='Emerging Tech Labs / Intel® Unnati Data-Centric Lab in Emerging Technologies – Artificial Intelligence Lab';
        return view('intel-ai',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }
    
 public function ug_courses_syllabus()
    {
        $banner_img='about-banner.webp';
         $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='AICTE UG Syllabus under Autonomy and Course Curriculum';
        $banner_subheading='Academics / Syllabus / AICTE UG Syllabus under Autonomy and Course Curriculum';
        return view('ug-courses-syllabus',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

public function pg_courses_syllabus()
    {
        $banner_img='about-banner.webp';
         $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='AICTE PG Syllabus under Autonomy and Course Curriculum';
        $banner_subheading='Academics / Syllabus / AICTE PG Syllabus under Autonomy and Course Curriculum';
        return view('pg-courses-syllabus',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }


public function bvoc_courses_syllabus()
    {
        $banner_img='about-banner.webp';
         $banner_img_mob='about-mobile-banner.webp';
        $banner_heading='BVOC Syllabus under Autonomy';
        $banner_subheading='Academics / Syllabus / BVOC Syllabus under Autonomy';
        return view('b-voc-courses-syllabus',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }  
    
public function it_chapters()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='IT Student Chapter';
        $banner_subheading='Campus Life / Student Chapters / IT Student Chapter';
        return view('it-student-chapter',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function iif_chapters()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='IIF Student Chapter';
        $banner_subheading='Campus Life / Student Chapters / IIF Student Chapter';
        return view('iif-student-chapter',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }


    public function sae_chapters()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='SAE Student Chapter';
        $banner_subheading='Campus Life / Student Chapters / SAE Student Chapter';
        return view('sae-student-chapter',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

    public function ieee_chapters()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='IEEE Student Chapter';
        $banner_subheading='Campus Life / Student Chapters / IEEE Student Chapter';
        return view('ieee-student-chapter',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

public function iete_chapters()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='IETE Student Chapter';
        $banner_subheading='Campus Life / Student Chapters / IETE Student Chapter';
        return view('iete-student-chapter',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }

 public function ietuk_chapters()
    {
        $banner_img='student-chapter-banner.webp';
         $banner_img_mob='student-chapter-banner-mobile.webp';
        $banner_heading='IET-UK Student Chapter';
        $banner_subheading='Campus Life / Student Chapters / IET-UK Student Chapter';
        return view('iet-uk-student-chapter',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 
    
    
    public function student_achievements($slug)
    {
        $get_course=Course::where("course_slug",$slug)->where("active",'1')->first();
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Student Achievements';
        $banner_subheading='Student Achievements /'.$get_course->course_name;
        $get_acheivement=StudentAcheivement::where("course_slug",$slug)->where("active",'1')->get();
        
        return view('student-achievements',compact('banner_img','banner_img_mob','banner_heading','banner_subheading','get_acheivement','get_course'));
    }   
    
    
     public function nptel()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='NPTEL-SWAYAM Local Chapter';
        $banner_subheading='NPTEL-SWAYAM Local Chapter';
        return view('nptel-swayam-local-chapter',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 
    
    public function green_campus()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Green Campus Clean Campus';
        $banner_subheading='Green Campus Clean Campus';
        return view('green-campus-clean-campus',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 
    
    
    public function startup_club()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Startup Club';
        $banner_subheading='Startup Club';
        return view('startup-club',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 
    
    
      public function heritage_club()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Heritage Club of MCKV Institute of Engineering';
        $banner_subheading='Heritage Club of MCKV Institute of Engineering';
        return view('spic-macay-heritage-club',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    } 
    
        public function iic()
    {
        $banner_img='admission-banner.webp';
         $banner_img_mob='admission-banner-mobile.webp';
        $banner_heading='Institution’s Innovation Council (IIC)';
        $banner_subheading='Institution’s Innovation Council (IIC)';
        return view('iic',compact('banner_img','banner_img_mob','banner_heading','banner_subheading'));
    }   
    
    public function ins_course_enquiry(Request $request)
    {
        $request->validate(
            [
                'enquirer_name'=>'required',
                'enquirer_contact'=>'required|digits:10',
                'enquirer_email'=>'required|email',
                'course_enquiry'=>'required'                
        ],
        [
            'enquirer_name.required'=>' * Please Enter Your Name.',
            'enquirer_contact.required'=>' * Please Enter Your Mobile No.',
            'enquirer_contact.digits'=>' * Mobile No. Cannot Be Less Than 10 Digits.',
            'enquirer_email.required'=>' * Please Enter Your Email Id.',
            'enquirer_email.email'=>' * Please Enter A Valid Email Id.',
            'course_enquiry.required'=>' * Please Enter Your Enquiry.'            
        ]
        );

        $Course_Enquiry_Data=new CourseEnquiry;

        $Course_Enquiry_Data->enquirer_name=$request->enquirer_name;
        $Course_Enquiry_Data->enquirer_contact=$request->enquirer_contact;
        $Course_Enquiry_Data->enquirer_email=$request->enquirer_email;
        $Course_Enquiry_Data->course_enquiry=$request->course_enquiry;
        $Course_Enquiry_Data->course_slug=$request->course_slug;
        
        $Course_Enquiry_Data->save();

        return back()->with('course_message','Enquiry Has Been Successfully Submitted.');
    }

   public function ins_alumni_enquiry(Request $request)
   {
        $request->validate(
            [
                'alumni_name'=>'required',
                'alumni_contact'=>'required|digits:10',
                'alumni_email'=>'required|email',
                'department_slug'=>'required',
                'passing_year'=>'required'
            ]
        );

        $Alumni_Enquiry=new AlumniRegistration;

        $Alumni_Enquiry->alumni_name=$request->alumni_name;
        $Alumni_Enquiry->alumni_contact=$request->alumni_contact;
        $Alumni_Enquiry->alumni_email=$request->alumni_email;
        $Alumni_Enquiry->department_slug=$request->department_slug;
        $Alumni_Enquiry->passing_year=$request->passing_year;
        $Alumni_Enquiry->organisation_name=$request->organisation_name;
        $Alumni_Enquiry->location=$request->location;
        $Alumni_Enquiry->designation=$request->designation;

        $Alumni_Enquiry->save();

        return back()->with('alumni_message','Alumni Registration Form Has Been Successfully Submitted.');
   }

   public function ins_grievance_enquiry(Request $request)
   {
        $request->validate(
            [
                'category'=>'required',
                'grievance_name'=>'required',
                'grievance_contact'=>'required|digits:10',
                'grievance_email'=>'required|email',
                'gender'=>'required',
                'complaint_category'=>'required',
                'complaint_details'=>'required',
            ]
        );

        $Grievance_Enquiry=new GrievanceRedressal;

        $Grievance_Enquiry->category=$request->category;
        $Grievance_Enquiry->grievance_name=$request->grievance_name;
        $Grievance_Enquiry->grievance_contact=$request->grievance_contact;
        $Grievance_Enquiry->grievance_email=$request->grievance_email;
        $Grievance_Enquiry->gender=$request->gender;
        $Grievance_Enquiry->complaint_category=$request->complaint_category;
        $Grievance_Enquiry->complaint_details=$request->complaint_details;
        
        $Grievance_Enquiry->save();

        return back()->with('grievance_message','Grievance Redressal Form Has Been Successfully Submitted.');
   }
}

