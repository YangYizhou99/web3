@extends('layout.app')

@section('title', 'home')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>

    </style>
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid px-0">
        <div class="container text-center text-white">
            <h4 class="display-6">news project</h4>
            <p class="lead">news project</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        @foreach(range(1, 10) as $v)
                            <div class="article-body">
                                <div>
                                    <span class="article-author">mike</span>
                                    <span class="article-time">6 moneth ago</span>
                                </div>
                                <h2 class="font-weight-bold my-3 article-title">
                                    <a href="{{route('news.show',1)}}">newsnewsnewsnewsnewsnewsnewsnews</a>
                                </h2>
                                <div class="article-des">newsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnewsnews</div>
                                <div>
                                    <a href="#" class="badge badge-warning mt-3 article-category">php</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <nav class="d-flex justify-content-center mt-4">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-0">
                @include('common.right-card', [
                    'imgUrl' => 'https://cdn2.lmonkey.com/Fl5bGoCQYm7i0G7yk3vatG5sok7K',
                    'title' => 'news',
                    'content' => 'laravel',
                    'count' => '121',
                ])
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection
