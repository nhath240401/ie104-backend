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
		
    <div class='product-form'>
        @if(session()->has('message'))
            <div class="alert-sucess">
                {{session()->get('message')}}
            </div>
        @endif  
        <h1 class=''>CẬP NHẬT SẢN PHẨM</h1>
        <form action="{{url('/update_product_confirm', $product->id)}}" method='POST' enctype='multipart/form-data'>
            @csrf
            <div>
                <label>Tên sản phẩm: </label>
                <input type="text" name='title' placeholder='Cà phê sữa' require="" value='{{$product->title}}'>
            </div>
            <div>
                <label>Mô tả: </label>
                <input type="text" name='description' placeholder='Cà phê nguyên chất' require="" value='{{$product->description}}'>
            </div>
            <div>
                <label>Giá: </label>
                <input type="text" name='price' placeholder='50.000' require="" value='{{$product->price}}'>
            </div>
            <div>
                <label>Số lượng: </label>
                <input type="number" name='quantity' min='0' require="" value="{{$product->quantity}}">
            </div>
            <div>
                <label>Giá khuyến mãi: </label>
                <input type="text" name='discount_price' placeholder='35.000' require="" value='{{$product->discount_price}}'>
            </div>
            <div>
                <label>Danh mục: </label>
                <select name="category" require="">
                @foreach($category as $cate)
                    <option value="{{$cate->category_name}}">{{$cate->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Ảnh: </label>
                <input type="file" name='image' require="">
            </div>
            <input type="submit" value='Cập nhật sản phẩm'>
        </form>
    </div>
    
	</section>

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="/admin/script.js"></script>
</body>
</html>