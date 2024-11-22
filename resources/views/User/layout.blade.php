<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="../css/app.css"> --}}
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-info mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <h4>Home</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('list-book', 0) }}">
                              <h5>Tất cả sách</h5>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('list-book', $category->id) }}"><h5>{{ $category->name }}</h5></a>
                            </li>
                        @endforeach
                    </ul>
                    <form class="d-flex" action="{{ route('search') }}" method="GET" role="search">
                        <input style="width: 270px;"
                            class="form-control me-2" type="search" name="keyword"
                            placeholder="Nhập tên sách hoặc tên tác giả" aria-label="Search">
                        <button class="btn btn-success" type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </nav>

        <div style="width:100%">
          @yield('content')
        </div>

        <footer>
          <div class="bg-dark text-info text-center">
            <div class="py-5">
              <h1 class="display-5 fw-bold text-white">Không có gì có thể thay thế văn hóa đọc</h1>
              <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">"Có hai cách để hạnh phúc. Một là dùng tiền mua những thứ có thể khiến bạn hạnh phúc. Hai là dùng tri thức để biết hạnh phúc với những gì mình đang có."</p>
                {{-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                  <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
                  <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button>
                </div> --}}
              </div>
            </div>
          </div>
        </footer>
    </div>
</body>

</html>
