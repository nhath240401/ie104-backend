<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="/admin/style.css">
	<title>Dashboard TCH</title>
</head>
<body>
	
    @include('admin.sidebar')

	<section id="content">

    @include('admin.navbar')
		
    <div class='product-list'>
        <h1>Danh sách sản phẩm</h1>
        <table>
            <tr>
                <td>Tên sản phẩm</td>
                <td>Ảnh</td>
                <td>Danh mục</td>
                <td>Mô tả</td>
                <td>Số lượng</td>
                <td>Giá</td>
                <td>Giá khuyễn mãi</td>
                <td>Hành động</td>
            </tr>
            @foreach($product as $pro)
            <tr>
                <td>{{$pro->title}}</td>
                <td>
                    <img src="/product/{{$pro->image}}" alt="">
                </td>
                <td>{{$pro->category}}</td>
                <td>{{$pro->description}}</td>
                <td>{{$pro->quantity}}</td>
                <td>{{$pro->price}}</td>
                <td>{{$pro->discount_price}}</td>
                <td class='last-row'>
                    <a href="{{url('update_product', $pro->id)}}" class='edit'>Sửa</a>
                    <a href="{{url('delete_product', $pro->id)}}" onClick="return confirm('Bạn có chắc muốn xóa!')" class='delete'>Xóa</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="/admin/script.js"></script>
</body>
</html>