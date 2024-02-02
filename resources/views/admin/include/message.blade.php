@if(Session::has('success'))
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>
            {!!Session::get('success')!!}
        </strong>
    </div>              
@endif
{{-- @if(Session::has('success2'))
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>
            {!!Session::get('success2')!!}
        </strong>
    </div>              
@endif --}}
@if(Session::has('error'))
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>
            {{Session::get('error')}}
        </strong>
    </div>
@endif
@if ($errors->any())
{{-- @dd($errors->all()) --}}
    <div class="alert alert-danger alert-dismissible" style="text-align: center;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif