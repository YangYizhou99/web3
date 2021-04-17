@extends('layout.app')

@section('title', 'edit info')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3">
                @include('common.user-menu', ['nav' => 'info'])
            </div>
            <div class="col-sm-9 p-0">
                <div class="card">
                    <div class="card-header bg-white fs-14">
                        edit info
                    </div>
                    <div class="card-body">
                        <form class="col-md-6 offset-3">
                            <div class="form-group">
                                <label for="exampleInputName" class="fs-14 font-weight-bold">username</label>
                                <input type="text" value="{{auth()->user()->name}}" placeholder="username" class="form-control form-control-sm" id="exampleInputName" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail" class="fs-14 font-weight-bold">email</label>
                                <input type="email" value="{{auth()->user()->email}}" placeholder="email" class="form-control form-control-sm" id="exampleInputEmail" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm w-100 mt-4 bg-blue text-white">edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection
