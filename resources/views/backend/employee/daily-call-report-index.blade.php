@extends('layouts.backend.backend')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daily Call Report List</h1>
            </div>
            <div class="col-sm-6">
                <a href="{{route('headquarter.create')}}" class="float-sm-right btn btn-primary"> Add New </a>
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
                                    <th>Place of working</th>
                                    <th>Working with</th>
                                    <th>Visited doctor name</th>
                                    <th>Visited chemist name</th>
                                    <th>POB</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dailyCallReports as $key => $value)
                                <tr>
                                    <td>{{$value->place_of_working ?? '-'}}</td>
                                    <td>{{$value->working_with ?? '-'}}</td>
                                    <td>{{$value->visited_doctor_name ?? '-'}}</td>
                                    <td>{{$value->visited_chemist_name ?? '-'}}</td>
                                    <td>{{$value->pob ?? '-'}}</td>
                                    <td>
                                        <a href="{{route('headquarter.edit', ['id' => $value->id])}}"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-danger">No Daily Report Found !</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </div>
                    </table>
                    <!-- /.card-body -->
                    <div class="mt-3 d-flex justify-content-center">
                        {!! $dailyCallReports->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection