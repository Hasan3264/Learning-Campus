@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Session</h2>
            </header>
            <div class="session_add">
                <div class="row">
                    
                   <form action="{{ route('insertsession') }}" method="POST">
                    @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p style="color:red;">{{$error}}</p>
                                @endforeach
                            @endif
                        <div class="col-md-10 mb-3">
                            <label for="">Name <span>*</span></label>
                            <input type="text" placeholder="" value="{{ old('name') }}"  name="name" id="">
                        </div>
        
                        <div class="col-md-10 mb-3">
                            <label for="">Short Code <span>*</span></label>
                            <input type="text" placeholder=" " value="{{ old('short_code') }}"  name="short_code" id="">
                        </div>
        
        
                        <div class="col-md-10 mb-3">
                            <label for="">Fiscal Year ? <span>*</span></label>
                        <p class="rad_text">
                            <input type="radio"  placeholder="Education" name="physical_year" value="yes" id="check"> 
                            <b>Yes</b> 
                            </p> &nbsp; &nbsp; 
                            <p class="rad_text">
                                <input type="radio" placeholder="Education" value="no" name="physical_year" id="check"> 
                                <b>No</b> 
                            </p> 
                        </div>
        
                        <div class="col-md-10 mb-3">
                            <label for="">Current Session ?<span>*</span></label>
                        <p class="rad_text">
                            <input type="radio" placeholder="Education" value="yes" name="current_session" id="check"> 
                            <b>Yes</b> 
                            </p> &nbsp; &nbsp; 
                            <p class="rad_text">
                                <input type="radio" placeholder="Education" value="no" name="current_session" id="check"> 
                                <b>No</b> 
                            </p> 
                        </div>
        
                        <div class="col-md-12 mb-3">
                            <label for="">Result Type ?<span>*</span></label>
                        <p class="rad_text">
                            <input type="checkbox" placeholder="Education" name="percentageterms" id="check"> 
                            <b>Percentage (Terms) </b> 
                            </p> &nbsp; &nbsp; 
                            <p class="rad_text">
                                &nbsp; <input type="checkbox" placeholder="Education" name="averageterms" id="check"> 
                                <b>Average (Terms)</b> 
                            </p>
                            <p class="rad_text">
                                &nbsp;  <input type="checkbox" placeholder="Education" name="averagesubject" id="check"> 
                                <b>Average (Subjects)</b> 
                            </p>  
                        </div>
        
                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="">
                                <option value="active" @if(old('status')=='active') selected @endif>Active</option>
                                <option value="inactive" @if(old('status')=='inactive') selected @endif>Inactive</option>
                            </select> 
                        </div>
        
                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                            <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>        
                            {{-- <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>          --}}
                            </p>
                        </div>
                    </form> 
                </div>
            </div>
        </div>    
    </section>                
</div>
@endsection
