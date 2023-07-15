@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h3 class="text-white mb-0">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" onclick="institue()">Institue Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:void(0)" onclick="general()">General
                                Information</a>
                        </li>
                    </ul>
                </h3>
            </header>

            <div class="card-body" id="institue">
                <form action="{{route('institute.input')}}" method="POST" class="es-form es-add-form">
                    @csrf
                    <div class="row">

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">Facebook Page</label>
                            <input type="text" name="facebook" id="">
                            @error('facebook')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">Facebook Page</label>
                            <input type="text" name="facebook" id="">
                            @error('facebook')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">Youtube Video</label>
                            <input type="text" name="youtube">
                            @error('youtube')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Admin Theme <span>*</span></label>
                            <select id="day" name="adminTheme" class="es-add-select">
                                <option value="Dark_Cyan">Dark Cyan</option>
                                <option value="Sky_Blue">Sky Blue</option>
                                <option value="Sea_Green">Sea Green</option>
                                <option value="Dark_Yellow">Dark Yellow</option>
                            </select>
                            @error('adminTheme')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Website Theme <span>*</span></label>
                            <select id="day" name="websiteTheme" class="es-add-select">
                                <option value="Defult_Theme">Defult Theme</option>
                                <option value="Theme_1">Theme 1</option>
                                <option value="Theme_2">Theme 2</option>
                                <option value="Theme_3">Theme 3</option>
                            </select>
                            @error('websiteTheme')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Website Theme <span>*</span></label>
                        <select id="day" name="websiteTheme" class="es-add-select">
                            <option value="Defult_Theme">Defult Theme</option>
                            <option value="Theme_1">Theme 1</option>
                            <option value="Theme_2">Theme 2</option>
                            <option value="Theme_3">Theme 3</option>
                        </select>
                        @error('websiteTheme')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <p>
                        <button type="submit" class="btn bg-gradient border-0 text-white">Submit</button>
                        <button type="reset" class="btn bg-danger  border-0 text-white">Cancel</button>
                    </p>
                    </div>
            </div>


            </form>
        </div>

        <div class="card-body" id="general">
            <form action="{{route('ganarel.input')}}" method="post" enctype='multipart/form-data'
                class="es-form es-add-form">
                @csrf
                <div class="row">

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="subject">EIIN No</label>
                        <input type="text" placeholder="edu_" name="eiin_no" id="">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="subject">Institue Name: <span>*</span></label>
                        <input type="text" placeholder="Campus Library" name="institute_name" id="">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Slogan</label>
                        <input type="text" name="slogan">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Email <span>*</span></label>
                        <input type="text" name="email">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label>Favicon</label>
                        <img id="image-container" width="200px" height="100px" class="mb-3" class="logo" alt="">
                        <input type="file" id="files" name="favicon">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Banner</label>
                        <img id="image-container1" src="Logo _ Icon/logo.png" width="100px" height="100px" class="mb-3"
                            class="logo" alt="">
                        <input type="file" id="files1" name="banner">

                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Logo</label>
                        <img id="image-container2" src="Logo _ Icon/logo.png" width="100px" height="100px" class="mb-3"
                            class="logo" alt="">
                        <input type="file" id="files2" name="logo">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Short Description <span>*</span></label>
                        <textarea class="ckeditor" id="editor1" name="short_des"></textarea>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Why Choose Institute ?</label>
                        <textarea class="ckeditor" id="editor1" name="choosen_des"></textarea>
                    </div>

                </div>

                <p>
                    <button type="submit" class="btn bg-gradient border-0 text-white">Submit</button>
                    <button type="reset" class="btn bg-danger  border-0 text-white">Cancel</button>
                </p>

            </form>
        </div>

    </section>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@endsection
