@extends('Admin/layout')

@section('title', 'Thêm mới')

@section('content')
     <div>
       <form action="{{route('store')}}" method="post">
        @csrf
         <div class="b-3">
            <label for=""> Tiêu đề</label>
            <input type="text" name="title" class="form-control">
         </div>
         <div class="b-3">
          <label for=""> Ảnh mô tả</label>
          <input type="text" name="thumbnail" class="form-control" >
       </div>
       <div class="b-3">
        <label for=""> Tác giả</label>
        <input type="text" name="author" class="form-control">
     </div>
     <div class="b-3">
      <label for="">Nhà xuất bản</label>
      <input type="text" name="publisher" class="form-control">
   </div>
   <div class="b-3">
    <label for="">Ngày xuất bản</label>
    <input type="date" name="publication" class="form-control">
 </div>
 <div class="b-3">
  <label for="">Giá bán</label>
  <input type="text" name="price" class="form-control">
</div>
<div class="b-3">
  <label for="">Số lượng</label>
  <input type="text" name="quantity" class="form-control">
</div>
<div class="b-3">
    <select name="category_id" id="category_id" class="form-select" required>
        <option value="">--Chọn danh mục--</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
         <button type="submit" class="btn btn-primary">Thêm mới</button>
         <a href="{{route('index')}}" class="btn btn-success">Quay lại</a>
       </form>
     </div>
@endsection