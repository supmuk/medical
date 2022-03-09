@extends('layouts.backend.backend')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tour Program List</h1>
            </div>
            <div class="col-sm-6">
                <a href="{{route('employee.tour-program')}}" class="float-sm-right btn btn-primary"> Add New </a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="m-3">
                        {!! displayAlert() !!}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Date of tour</th>
                                    <th>Place</th>
                                    <th>Working with</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tourProgram as $key => $value)
                                <tr>
                                    <td>{{$value->date_of_tour ?? '-'}}</td>
                                    <td>{{$value->place ?? '-'}}</td>
                                    <td>
                                        @if(!empty($value->working_with))
                                            @foreach(explode(',',$value->working_with) as $key1 => $val1)
                                                <span class="badge badge-primary"> {{fetchingSingleValue('users', 'id', $val1, 'name')}} </span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('employee.tour-program', ['id' => $value->id])}}"><i class="fas fa-edit"></i></a>
                                        <form method="POST" action="{{route('employee.tour-program-delete')}}" class="d-inline delete-confirm">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="id" value="{{$value->id}}">
                                            @if(auth()->user()->is_admin)
                                            <button type="submit" class="btn text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-danger">No Toue Program Found !</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </div>
                    </table>
                    <!-- /.card-body -->
                    <div class="mt-3 d-flex justify-content-center">
                        {!! $tourProgram->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection