@extends('layouts.backend.backend')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Headquarter List</h1>
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
        <form action="{{route('headquarter.index')}}" method="get" class="m-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$request['name'] ?? ''}}" />
                </div>
                <div class="col-md-3 mt-4 pt-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{route('headquarter.index')}}" class="btn btn-primary">Reset</a>
                </div>
            </div>
            
        </form>
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
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($headquarters as $key => $value)
                                <tr>
                                    <td>{{$value->name ?? '-'}}</td>
                                    <td>{{$value->is_active ? 'Active' : 'Inactive'}}</td>
                                    <td>
                                        <a href="{{route('headquarter.edit', ['id' => $value->id])}}"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-danger">No Headquarter !</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </div>
                    </table>
                    <!-- /.card-body -->
                    <div class="mt-3 d-flex justify-content-center">
                        {!! $headquarters->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection