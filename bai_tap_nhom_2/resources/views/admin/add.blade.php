@extends('admin.main')
@section('content')
<h3>Thêm người dùng</h3>

<form method="post" action="{{ route('admin.postAdd') }}">
      @error('msg')
      <div class="alert alert-danger text-center">
            {{ $message }}
      </div>
      @enderror


      <div class="mb-3">
            <label for="">Họ và Tên </label>
            <input name="fullname" type="text" class="form-control" value="{{old('fullname')}}"
                  placeholder="nhập họ và tên ...">
            {{-- hiển thị thông báo khi có lỗi  --}}
            @error('fullname')
            <span style="color: red ">{{$message}}</span>
            @enderror
      </div>


      <div class="mb-3">
            <label for="">địa chỉ</label>
            <input name="address" type="text" class="form-control" value="{{old('address')}}"
                  placeholder="nhập họ và tên ...">
            {{-- hiển thị thông báo khi có lỗi  --}}
            @error('address')
            <span style="color: red ">{{$message}}</span>
            @enderror
      </div>


      <div class="mb-3">
            <label for="">email</label>
            <input name="email" type="text" class="form-control" value="{{old('email')}}" placeholder="email...">
            {{-- hiển thị thông báo khi có lỗi  --}}
            @error('email')
            <span style="color: red ">{{$message}}</span>
            @enderror
      </div>

      <div class="mb-3">
            <label for="">Số điện thoại</label>
            <input name="phone" type="int" class="form-control" value="{{old('phone')}}"
                  placeholder="nhập họ và tên ...">
            {{-- hiển thị thông báo khi có lỗi  --}}
            @error('phone')
            <span style="color: red ">{{$message}}</span>
            @enderror


      </div>


      <button type="submit" class="btn btn-primary">Thêm mới</button>


      <a href="{{route('admin.index')}}" class="btn btn-danger"> Quay lại</a>
      @csrf
</form>

@endsection