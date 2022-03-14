@extends('layouts.backend.backend')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Page List</h1>
            </div>
            
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <form action="{{route('pages.index')}}" method="get" class="m-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$request['name'] ?? ''}}" />
                </div>
                <div class="col-md-3 mt-4 pt-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{route('product.index')}}" class="btn btn-primary">Reset</a>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pages as $key => $value)
                                <tr>
                                    <td>{{$value->title ?? '-'}}</td>
                                    <td>
                                        <a href="{{route('pages.edit', ['id' => $value->id])}}"><i class="fas fa-edit"></i></a>
                                        <form method="POST" action="{{route('product.delete')}}" class="d-inline delete-confirm">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="id" value="{{$value->id}}">
                                            <button type="submit" class="btn text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-danger">No Page !</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </div>
                    </table>
                    <!-- /.card-body -->
                    <div class="mt-3 d-flex justify-content-center">
                        {!! $pages->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection