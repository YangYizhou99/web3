@extends('layout.app')

@section('title', 'registration')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row pt-4">
            <div class="card col-lg-4 offset-4 mb-3 mt-5">
                <div class="card-body">
                    @include('auth.nav-top',['nav'=>'register'])
                    <hr>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName" class="fs-14 font-weight-bold">username</label>
                            <input name="name" type="text" placeholder="username" class="form-control form-control-sm" id="exampleInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail" class="fs-14 font-weight-bold">email</label>
                            <input name="email" type="email" placeholder="emal" class="form-control form-control-sm" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="fs-14 font-weight-bold">password</label>
                            <input name="password" type="password" placeholder="password" class="form-control form-control-sm" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2" class="fs-14 font-weight-bold">repeat password</label>
                            <input name="password_confirmation" dtype="password" placeholder="password" class="form-control form-control-sm" id="exampleInputPassword2">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm w-100 mt-4 bg-blue text-white">registration</button>
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

