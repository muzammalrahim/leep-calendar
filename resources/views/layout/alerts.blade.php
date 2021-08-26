@if ($errors->any())
  <div class="alert alert-danger">
      <strong>Danger!</strong>
      <ul>
           @foreach ($errors->all() as $error)
                <li >{{ $error }}</li>
            @endforeach
      </ul>
  </div>
@endif
@if(session()->has('error'))
  <div class="alert alert-danger">
    <strong>Danger!</strong> {{session('error')}}
  </div>
@endif
@if(session()->has('success'))
  <div class="alert alert-success">
    <strong>Congrats!</strong> {{session('success')}}
  </div>
@endif