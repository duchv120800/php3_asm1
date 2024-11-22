@extends('Admin/layout')

@section('title', 'Cập nhật')

@section('content')
     <div>
       <form action="{{route('update', $book->id)}}" method="post">
        @csrf
        @method('PUT')
         <div class="b-3">
            <label for=""> Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="{{$book->title}}">
         </div>
         <div class="b-3">
          <label for=""> Ảnh mô tả</label>
          <input type="text" name="thumbnail" class="form-control" value="{{$book->thumbnail}}">
       </div>
       <div class="b-3">
        <label for=""> Tác giả</label>
        <input type="text" name="author" class="form-control" value="{{$book->author}}" >
     </div>
     <div class="b-3">
      <label for="">Nhà xuất bản</label>
      <input type="text" name="publisher" class="form-control" value="{{$book->publisher}}">
   </div>
   <div class="b-3">
    <label for="">Ngày xuất bản</label>
    <input type="datetime-local" name="publication" class="form-control" value="{{$book->publication }}">
 </div>
 <div class="b-3">
  <label for="">Giá bán</label>
  <input type="text" name="price" class="form-control" value="{{$book->price}}">
</div>
<div class="b-3">
  <label for="">Số lượng</label>
  <input type="text" name="quantity" class="form-control" value="{{$book->quantity}}">
</div>
<div class="b-3">
    <select name="category_id" id="category_id" class="form-select" required>
        <option value="">--Chọn danh mục--</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
              @if ($category->id === $book->category_id)
                selected
              @endif
              >{{ $category->name }}</option>
        @endforeach
    </select>
</div>
        <input type="hidden" name="id" value="{{$book->id}}">
         <button type="submit" class="btn btn-primary">Cập nhật</button>
         <a href="{{route('index')}}" class="btn btn-success">Quay lại</a>
       </form>
     </div>
@endsection