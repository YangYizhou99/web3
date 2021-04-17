@extends('layout.app')

@section('title', 'login')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row pt-4">
            <div class="card col-lg-4 offset-4 mb-3 mt-5">
                <div class="card-body">

                    @include('auth.nav-top',['nav'=>'login'])
                    <hr>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="fs-14 font-weight-bold">email</label>
                            <input type="email" class="form-control form-control-sm"
                                   id="exampleInputEmail1"
                                   placeholder="input email"
                                   name="email"
                                   aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="fs-14 font-weight-bold">password</label>
                            <input type="password"
                                   name="password"
                                   placeholder="password" class="form-control form-control-sm" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm w-100 mt-4 bg-blue text-white">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection
