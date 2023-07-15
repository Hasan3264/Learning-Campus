@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">



    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Subject</h2>
            </header>
            <div class="session_add">
                <form action="{{route('store.subject')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="">Medium Name <span>*</span></label>
                            <select name="medium_id" id="medium" required>
                                <option value="">Select Class</option>
                                @foreach ($all_medium as $item)
                                <option value="{{$item->medium_code}}">{{$item->medium_name}}</option>
                                @endforeach
                            </select>
                            @error('medium_id')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="">Class Name <span>*</span></label>
                            <select name="class_id" id="class">
                                {{-- <option value="">Select Class</option> --}}
                                {{-- @foreach($casses as $class)
                                <option value="{{$class->id}}">{{$class->class_name}}</option>
                                @endforeach --}}

                            </select>
                            @error('class_id')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Subject Name <span>*</span></label>
                            <input type="text" placeholder=" " name="name" id="">
                            @error('name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Combined With <span>*</span></label>
                            <select name="combine_name" id="">
                                <option value="">Select Subject</option>
                            </select>
                            @error('combine_name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Subject Code <span>*</span></label>
                            <input type="number" placeholder=" " name="code" id="">
                            @error('code')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Full Marks <span>*</span></label>
                            <input type="number" placeholder="100" name="full_mark" id="">
                            @error('full_mark')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Result Type ? <span>*</span></label>
                            <p class="rad_text">
                                <input type="radio" placeholder="Education" name="result_type" value="0" id="check">
                                <b>Percentage (Terms)</b>
                            </p> &nbsp; &nbsp;
                            <p class="rad_text">
                                <input type="radio" placeholder="Education" name="result_type" value="1" id="check">
                                <b>Average (Terms)</b>
                            </p>
                            <p class="rad_text">
                                <input type="radio" placeholder="Education" name="result_type" value="3" id="check">
                                <b>Average (Subjects)</b>
                            </p>
                            @error('result_type')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            @error('Status')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                            </p>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </section>

</div>


@endsection
@section('fotter_js')
<script>
    $('#medium').change(function () {
        var medium_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getclassbymedium')}}",
            data: {
                'medium_id': medium_id
            },
            success: function (data) {
                $('#class').html(data);
            }
        });
    });

</script>
@endsection
