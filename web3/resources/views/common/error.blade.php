@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $errors)
            {{$errors}}<br>
        @endforeach
    </div>
@endif
