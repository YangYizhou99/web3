@extends('layout.app')

@section('title', 'edit news')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="card mb-3 mt-4">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">title</label>
                        <input type="email" class="form-control" value="news" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">categorical</label>
                        <select class="form-control" id="exampleFormControlSelect1">

                            @foreach(categories() as $id=>$name)
                                <option value="{{$id}}">{{$name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">content</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">## test</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-25 offset-4">declare</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection

