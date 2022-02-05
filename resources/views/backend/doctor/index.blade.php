@extends('layouts.backend.backend')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Doctor List</h1>
            </div>
            <div class="col-sm-6">
                <a href="{{route('doctor.add')}}" class="float-sm-right btn btn-primary"> Add New </a>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Speciality</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($doctors as $key => $value)
                                <tr>
                                    <td>{{$value->name ?? '-'}}</td>
                                    <td>{{$value->email ?? '-'}}</td>
                                    <td>{{$value->mob ?? '-'}}</td>
                                    <td>{{$value->speciality ?? '-'}}</td>
                                    <td>
                                        <a href="{{route('doctor.edit', ['id' => $value->id])}}"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-danger">No Doctor !</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </div>
                    </table>
                    <!-- /.card-body -->
                    <div class="mt-3 d-flex justify-content-center">
                        {!! $doctors->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection