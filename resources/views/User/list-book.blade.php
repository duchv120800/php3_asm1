@extends('User.layout')

@section('title', 'Danh sách')

@section('content')

    <div class="row m-1">
        @foreach ($books as $book)
            <div class="card col-3 mb-2 p-2">
                <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}" style="object-fit: contain" width="60" height="200">
                <div class="card-body">
                    <hr>
                    <h4 class="card-title text-uppercase">{{ $book->title }}</h4>
                    <h5 class="card-text"><span class="text-info">Tác giả: </span>{{ $book->author }}</h5>
                    <h5 class="text-info">Giá bán : <span class="card-text text-danger">{{ $book->price }}đ</span></p>
                        <div class="row">
                            <a href="{{ route('detail', $book->id) }}" class=" col-4 btn btn-info">Chi tiết</a>
                            <form action="#" method="POST" class="col-8">
                                @csrf
                                <input type="hidden" name="id" value="{{ $book->id }}">
                                <input type="hidden" name="thumbnail" value="{{ $book->thumbnail }}">
                                <input type="hidden" name="title" value="{{ $book->title }}">
                                <input type="hidden" name="author" value="{{ $book->author }}">
                                <input type="hidden" name="price" value="{{ $book->price }}">
                                <input type="submit" name="addtocart" value="Add to Cart" class="btn btn-danger">
                            </form>

                        </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $books->links() }}
    <a href="{{route('home')}}" class="btn btn-outline-primary mb-3">Quay lại trang chủ</a>
@endsection
