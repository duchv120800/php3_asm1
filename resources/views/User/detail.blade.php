@extends('User/layout')

@section('title', $book->title)

@section('content')

    <div class="my-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" width="100%">
                        <h3 class="text-center">{{ $book->title }}</h3>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <h4><span class="text-secondary">Tác giả :</span> {{ $book->author }}</h4>
                        </div>
                        <div class="d-flex">
                            <h4><span class="text-secondary">Nhà xuất bản :</span> {{ $book->publisher }}</h4>
                        </div>
                        <div class="d-flex">
                            <h4><span class="text-secondary">Ngày xuất bản :</span> {{ $book->publication }}</h4>
                        </div>
                        <div class="d-flex">
                            <h4><span class="text-secondary">Giá bán :</span> {{ $book->price }}</h4>
                        </div>
                        <div class="d-flex">
                            <h4><span class="text-secondary">Số lượng :</span> {{ $book->quantity }}</h4>
                        </div>
                        <div>
                            <h4><span class="text-secondary">Thể loại :</span> {{ $book->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <h3 class="text-info">Sản phẩm liên quan</h3>
            @foreach ($book_relations as $book_relation)
            <div class="card col-3 mb-2 p-2">
                <img src="{{ $book_relation->thumbnail }}" class="card-img-top" alt="{{ $book_relation->title }}" style="object-fit: contain" width="60"
                    height="200">
                <div class="card-body">
                    <h4 class="card-title text-uppercase">{{ $book_relation->title }}</h4>
                    <h5 class="card-text"><span class="text-info">Tác giả: </span>{{ $book_relation->author }}</h5>
                    <h5 class="text-info">Giá bán : <span class="card-text text-danger">{{ $book_relation->price }}đ</span></p>
                        <div class="row">
                            <a href="{{ route('detail', $book_relation->id) }}" class=" col-4 btn btn-info">Chi tiết</a>
                            <form action="{{ route('cart.addtocart', $book_relation->id) }}" method="book_relation" class="col-8">
                                @csrf
                                <input type="hidden" name="id" value="{{ $book_relation->id }}">
                                <input type="hidden" name="thumbnail" value="{{ $book_relation->thumbnail }}">
                                <input type="hidden" name="title" value="{{ $book_relation->title }}">
                                <input type="hidden" name="author" value="{{ $book_relation->author }}">
                                <input type="hidden" name="price" value="{{ $book_relation->price }}">
                                <input type="submit" name="addtocart" value="Add to Cart" class="btn btn-danger">
                            </form>

                        </div>
                </div>
            </div>
        @endforeach
        </div>
        <a href="{{route('home')}}" class="btn btn-outline-primary my-3">Quay lại trang chủ</a>
    </div>

@endsection
