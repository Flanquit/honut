@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-denger">
            {{$error}}
        </div>
    @endforeach    
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@else

@endif

@if (session('error'))
    <div class="alert alert-denger">
            {{session('error')}}
    </div>


    
@endif