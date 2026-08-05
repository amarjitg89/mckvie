@if ($Get_Course->isNotEmpty())    
<select class="form-select doctor_search_select rounded-0" aria-label="Default select example" name="course_slug">
    <option value="">Courses Interested in*</option>
    @foreach ($Get_Course as $course)
       <option value="{{$course->course_slug}}">{{$course->course_name}}</option> 
    @endforeach
  
  
</select>

@else
<select class="form-select doctor_search_select rounded-0" aria-label="Default select example" name="course_slug">
  <option value="">Courses Interested in*</option>
  
</select>


@endif
