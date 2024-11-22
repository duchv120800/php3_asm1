

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    @section('content')
    
<div class="container">
    <div class="card">
        <div class="card-body">
          
                <h3>Tất cả các sách</h3>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <ul class="navbar-nav">
                         @foreach ($categories as $cate )
                         <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('list',$cate->id)}}">{{$cate->name}}</a>
                          </li>
                         @endforeach
                        </ul>
                  </nav>
            
            <div class="row">
                <div class="row g-3 gap-3 ml-5">
                
                  @foreach ($posts as $post)
                  <div class="card" style="width: 18rem;">
                    <img src="{{$post->thumbnail}}" class="card-img-top" alt="..." width="60" height="200">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title}}</h5>
                      <p class="card-text">Tác giả: {{$post->author}}</p>
                      <p class="card-text text-danger">Giá bán: {{$post->price}}</p>
                      <div class="">
                        <a href="{{route('detail', $post->id)}}" class="btn btn-primary">Chi tiết</a>
                      <a href="#" class="btn btn-warning">Add to card</a>
                      </div>
                    </div>
                  </div> 
                  @endforeach        
                </div>
        </div>
    </div>
</div>

</body>
</html>