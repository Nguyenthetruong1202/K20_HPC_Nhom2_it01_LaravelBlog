@extends('admin.main')


@section('content')

<a class="btn btn-dark" href="{{route('admin.add')}}">Thêm người dùng</a>

@error('msg')
<div class="alert alert-danger text-center">
      {{ $message }}
</div>
@enderror

<table class="table table-bordered">
      <thead>
            <tr>
                  <th width="5%">STT</th>
                  <th>Tên</th>
                  <th>Email</th>
                  <th width="20%">Thời gian</th>
                  <th width="5%">Sửa</th>
                  <th width="5%">Xóa</th>


            </tr>
      </thead>


      <tbody>
            @foreach($usersList as $user =>$item)
            <tr>
                  <td>{{$item ->id}}</td>
                  <td>{{$item ->fullname}}</td>
                  <td>{{$item ->email}}</td>
                  <td>{{$item ->create_at}}</td>

                  <td><a class="btn btn-danger " href="{{route('admin.edit',['id'=>$item->id])}}">Sửa</a></td>
                  <td><a class="btn btn-warning " href="{{route('admin.delete',['id'=>$item->id])}}">Xóa</a></td>
            </tr>
            @endforeach

      </tbody>

</table>

@endsection