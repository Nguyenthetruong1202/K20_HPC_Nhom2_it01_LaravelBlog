@extends('admin.main')
@section('content')
<h3>{{$title}}</h3>

<form method="post" action="{{ route('admin.postEdit') }}">
   @if(session('msg'))
<div>
      <div class="alert alert-success ">{{session('msg')}}</div>
</div>
@endif


      <div class="mb-3">
            <label for="">Họ và Tên </label>
            <input name="fullname" type="text" class="form-control" value="{{old('fullname') ?? $userDetail-> fullname}}"
                  placeholder="nhập họ và tên ...">
            {{-- hiển thị thông báo khi có lỗi  --}}
            @error('fullname')
            <span style="color: red ">{{$message}}</span>
            @enderror


      </div>
      <div class="mb-3">
            <label for="">email</label>
            <input name="email" type="text" class="form-control" value="{{old('email') ?? $userDetail-> email}}  " placeholder="email..."  >
            {{-- hiển thị thông báo khi có lỗi  --}}


            @error('email')
            <span style="color: red ">{{$message}}</span>
            @enderror
      </div>

      <button type="submit" class="btn btn-primary">Cập nhật</button>


      <a href="{{route('admin.index')}}" class="btn btn-danger"> Quay lại</a>
      @csrf
</form>

@endsection