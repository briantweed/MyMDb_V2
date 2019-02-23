@if(count($errors))
    <div class="alert alert-danger" role="alert">
        <h6 class="alert-heading font-weight-bold">There are errors with your form.</h6>
        <ul class="mb-0">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif