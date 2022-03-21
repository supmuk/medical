@extends('layouts.backend.backend')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Direct Allowance</h1>
            </div>
             {{-- <div class="col-sm-6">
                <a href="{{route('fare_amount.directAllowanceCreate')}}" class="float-sm-right btn btn-primary"> Add New </a>
            </div> --}}
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
                                    <th>HQ</th>
                                    <th>Ex-HQ</th>
                                    <th>Outstation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($directAllowance as $key => $value)
                                <tr>
                                    <td>{{ $value->hq }}</td>
                                    <td>{{ $value->ehq }}</td>
                                    <td>{{ $value->outstation }}</td>
                                    <td>
                                        <a href="{{ route('fare_amount.directAllowanceEdit', ['id'=>$value->id]) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-danger">No DA Found !</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </div>
                    </table>
                    <!-- /.card-body -->
                    <div class="mt-3 d-flex justify-content-center">
                        {!! $directAllowance->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection