@extends('layout.app')

@section('title', 'diteal')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/markdown.css') }}">
    <style>
        .replay:last-child {
            border-bottom: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h3 class="font-weight-light text-center mb-3">trump</h3>
                        <div class="text-center fs-14 text-muted">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            <span class="mr-2">5month ago</span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                            <span class="mr-2">416</span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            <span></span>2
                        </div>
                        <hr>
                        <div class="markdown" id="content">

                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-white fs-14">
                        number
                    </div>
                    <div class="card-body">
                        <div class="media mb-3 border-bottom pb-3 replay">
                            <img width="50" height="50" src="https://cdn.learnku.com/uploads/avatars/14265_1490928350.jpeg!/both/100x100" class="mr-3 rounded-pill" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body pb-2">
                        <div class="alert alert-warning" role="alert">
                            please login
                            <a href="#" class="btn btn-primary btn-sm py-1 px-4 ml-3">login</a>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body pb-2">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-sm px-5">reply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-0">
                @include('common.right-card', [
                      'imgUrl' => 'https://cdn2.lmonkey.com/Fl5bGoCQYm7i0G7yk3vatG5sok7K',
                      'title' => 'PHP',
                      'content' => 'news',
                      'count' => '12',
                  ])
            </div>
        </div>
    </div>

    <div id="markdown" style="display: none">{{"## Trump

Donald Trump said a New York law enabling Congress to ask for his state tax returns no longer applies because he isn’t president.

The law, known as the Trust Act, allows the state to share the president’s tax information with a congressional committee that asks for it.Trump sued the House and Ways and Means Committee to block it from requesting information.

“While the Trust Act is not the clearest statute, the best reading is that it does not apply to former presidents,” Trump’s lawyers wrote in a report to U.S. District Judge Carl J. Nichols in Washington, asking that he accept their interpretation.


Trump had also sued the New York attorney general’s office and the New York State Department of Taxation and Finance to block them from handing over the information to Congress.

Trump’s lawyers had argued that New York enacted the state financial-disclosure law to punish him for his speech and political views.

Read More: Trump Stumbles in Fight to Keep N.Y. Taxes From U.S. House

Nichols dismissed the case against the New York defendants, saying he had no jurisdiction over them, but said that Trump could file his lawsuit in that state. The case against the House Ways and Means Committee was allowed to go on.

“The committee is still pursuing plaintiff’s financial information, the committee won’t concede that the Trust Act is limited to current presidents, the committee won’t promise not to invoke the Trust Act against plaintiff, and the committee won’t agree to give plaintiff advance notice before it invokes the Trust Act,” Trump’s lawyers said in their filing Monday.

But the committee lawyers say Trump has it wrong.

“The chairman and the committee have taken no action at all with regard to the New York state statute or plaintiff Donald J. Trump’s New York state tax returns, nor threatened to take any such action,” the committee’s lawyers said.

They urged the judge, who was appointed by Trump, to dismiss the lawsuit and let Trump pursue whatever remedies he wishes in an appropriate court.
```
[test@ubuntu: ~]$ crontab -r
```"}}</div>
@endsection

@section('script')
    <script src="{{ asset('js/showdown.min.js') }}"></script>
    <script src="{{ asset('js/showdown-table.min.js') }}"></script>
    <script>
        function convert(){
            var text = $('#markdown').html();
            var converter = new showdown.Converter({extensions: ['table'] });
            var html = converter.makeHtml(text);
            $('#content').html(html)
            $('#content > table').addClass('table table-bordered');
        }
        convert();
    </script>
@endsection

