@if(session()->has('errorMsg'))
  <div class="alert alert-danger lkasdkasdas">
      <ul style="text-align: center;">
          {{session('errorMsg')}}
      </ul>
  </div>
@endif
@if(session()->has('successMsg'))
  <div class="alert alert-success">
      <ul style="text-align: center;">
          {{session('successMsg')}}
      </ul>
  </div>
@endif
@if ($errors->any())
  <div class="alert alert-danger  col-12">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif 