@extends('layout.master-template')

@section('title','Affiliations Accreditations Approvals - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

   <!--##########  Affiliations Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
   <div class="row g-4">
            <!-- AICTE -->
            <div class="col-md-6">
               <a href="{{url('/aicte-approvals')}}" class="text-dark"> <div class="accreditation-card border-green">
                    <div class="icon-box bg-green-soft">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <div class="card-info">
                        <div class="card-subtitle">Recognition</div>
                        <h4 class="card-title">AICTE</h4>
                    </div>
                    <i data-lucide="external-link" size="18" class="text-muted opacity-50"></i>
                </div></a>
            </div>

            <!-- NBA -->
            <div class="col-md-6">
               <a href="{{url('/nba-accreditations')}}" class="text-dark"> <div class="accreditation-card border-orange">
                    <div class="icon-box bg-orange-soft">
                        <i data-lucide="award"></i>
                    </div>
                    <div class="card-info">
                        <div class="card-subtitle">Accreditation</div>
                        <h4 class="card-title">NBA</h4>
                    </div>
                    <i data-lucide="external-link" size="18" class="text-muted opacity-50"></i>
                </div></a>
            </div>

            <!-- MAKAUT -->
            <div class="col-md-6">
               <a href="{{url('/makaut-affiliations')}}" class="text-dark"> <div class="accreditation-card border-orange">
                    <div class="icon-box bg-orange-soft">
                        <i data-lucide="book-open"></i>
                    </div>
                    <div class="card-info">
                        <div class="card-subtitle">Affiliation</div>
                        <h4 class="card-title">MAKAUT</h4>
                    </div>
                    <i data-lucide="external-link" size="18" class="text-muted opacity-50"></i>
                </div></a>
            </div>

            <!-- NAAC -->
            <div class="col-md-6">
               <a href="{{url('/naac')}}" class="text-dark"> <div class="accreditation-card border-green">
                    <div class="icon-box bg-green-soft">
                        <i data-lucide="graduation-cap"></i>
                    </div>
                    <div class="card-info">
                        <div class="card-subtitle">Assessment</div>
                        <h4 class="card-title">NAAC</h4>
                    </div>
                    <i data-lucide="external-link" size="18" class="text-muted opacity-50"></i>
                </div></a>
            </div>

            <!-- UGC Autonomous -->
            <div class="col-12">
                <a href="{{asset('pdf/ugc_autonomous.pdf')}}" target="_blank" class="text-dark"><div class="accreditation-card border-blue featured-card">
                    <div class="icon-box bg-blue-soft">
                        <i data-lucide="landmark"></i>
                    </div>
                    <div class="card-info">
                        <div class="card-subtitle">University Grants Commission</div>
                        <h4 class="card-title">UGC Autonomous Status</h4>
                    </div>
                   
                </div></a>
            </div>
        </div>         
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Affiliations End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection