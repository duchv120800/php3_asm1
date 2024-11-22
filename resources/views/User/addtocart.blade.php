@extends('layout')

@section('title', 'Giỏ hàng')

@section('content')

<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (isset($message))
        <div class="alert alert-warning">
            {{ $message }}
        </div>
    @endif

    <h2>Giỏ hàng của bạn</h2>

    @if (!empty($cart))
        <table class="table">
            <thead>
                <tr>
                    <th>Ảnh bìa sách</th>
                    <th>Tiêu đề sách</th>
                    <th>Tác giả</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as  $item)
                    <tr>
                        <!-- Hiển thị ảnh bìa sách -->
                        <td><img src="{{ $item['thumbnail']}}" alt="{{ $item['title'] }}" width="50"></td>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['author'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Giỏ hàng của bạn hiện đang trống.</p>
    @endif
</div>

@endsection
