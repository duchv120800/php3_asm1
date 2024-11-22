@extends('User/layout')

@section('title', 'Trang chủ')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner my-3">
    <div class="carousel-item active">
      <img src="https://thietkelogo.edu.vn/uploads/images/thiet-ke-do-hoa-khac/banner-sach/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHmEkbbZMBynrL6yRXtaH9vfxHNIB3LbmFug&s" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    {{-- <div class="row"> --}}
    <div class="row mx-1">
        @foreach ($books as $book)
            <div class="card col-4 mb-2 p-2">
                <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}" style="object-fit: contain" width="60"
                    height="200">
                <div class="card-body">
                  <hr>
                    <h4 class="card-title text-uppercase">{{ $book->title }}</h4>
                    <h5 class="card-text"><span class="text-info">Tác giả: </span>{{ $book->author }}</h5>
                    <h5 class="text-info">Giá bán : <span class="card-text text-danger">{{ $book->price }}đ</span></p>
                        <div class="row">
                            <a href="{{ route('detail', $book->id) }}" class=" col-4 btn btn-info">Chi tiết</a>
                            <form action="#" method="book" class="col-8">
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
@endsection
