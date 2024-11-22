@extends('Admin/layout')

@section('title', 'Trang chủ')

@section('content')

<div>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('create') }}" class="btn btn-primary">Thêm mới</a>
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>title</th>
                    <th>thumbnail</th>
                    <th>author</th>
                    <th>publisher</th>
                    <th>Publication</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category_id</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($posts as $index => $post )
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $post->title}}</td>
                            <td><img src="{{$post->thumbnail}}" alt="" width="100" height="100"></td>
                            <td>{{ $post->author}}</td>
                            <td>{{ $post->publisher}}</td>
                            <td>{{ $post->publication}}</td>
                            <td>{{ $post->price}}</td>
                            <td>{{ $post->quantity}}</td>
                            <td>{{ $post->name}}</td>
                            <td>
                                <a href="{{route('edit', $post->id)}}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('destroy', $post->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection