@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Career View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{route('add_career')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('career.edit', $findId->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Title</th>
                                <td>{{$findId->title}}</td>
                            </tr>
                            <tr>
                                <th>Deadline</th>
                                <td>{{$findId->dadline}}</td>
                            </tr>
                            <tr>
                                <th>Details</th>
                                <td>{!!$findId->details!!}</td>
                            </tr>
                            <tr>
                                <th>File</th>
                                <td>{{$findId->file}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$findId->status}}</td>
                            </tr>
                        </tbody>
                    </table>

                <!---- /session View table ----->
            </form>
        </div>

    </div>
</section>

    </div>
@endsection