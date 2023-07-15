@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Update Section</h2>
        </header>

        <div class="session_view_link mt-5 ml-4 mb-2">
            <a href="{{ Route('add-section')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <a href="{{route('section-view',$section_data->id)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </div>

        <div class="branch_edit">
            <form method="post" action="{{route('update-section')}}">
                @csrf
                <input type="hidden" name="section_id" value="{{ $section_data->id}}">
                    <div class="row">

                <div class="col-md-10 mb-3">
                    <label for="">Class Name <span>*</span></label>
                    <select name="class_name" id="">

                        @foreach($all_medium as $medium)
                             <option value="{{ $medium->medium_code }} class="bold_text" disabled>{{ $medium->medium_name }}</option>
                                @foreach($all_class as $item)
                                @if($item->medium_name == $medium->medium_code)
                                <option value="{{$item->class_code}}" {{ $item->class_code == $section_data->class_name ?'selected':'' }} class="bold_text">{{$item->class_name}}</option>
                                @endif
                                @endforeach
                        @endforeach

                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Shift Name <span>*</span></label>
                    <select name="shift_name" id="">
                    @foreach($all_shift as $item)
                        <option value="{{$item}}" {{$item == $section_data->shift_name? "selected":""}}>{{$item}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Name <span>*</span></label>
                    <input type="text" placeholder="A"  name="name" id="" value="{{$section_data
                    ->name}}">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Status <span>*</span></label>
                       <select name="status" id="">
                         <option value="active"{{ $section_data->status == 'active' ? 'selected' : '' }}>Active</option>
                         <option value="inactive"{{ $section_data->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                     </select>
                 </div>

                <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                     <a href="{{ route('all-section') }}" class="btn  cancel_btn border-0 text-white">Cancel</a>
                     </p>
                 </div>

            </div>
            </form>
        </div>
    </div>
</section>

    </div>
</div>

@endsection
