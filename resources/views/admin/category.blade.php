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
		
    <div class='category-form '>
        @if(session()->has('message'))
            <div class="alert-sucess">
                {{session()->get('message')}}
            </div>
        @endif
        <h1 class=''>THÊM DANH MỤC</h1>
        <form action="{{url('/add_category')}}" method='POST'>
            @csrf
            <label for="">Tên danh mục</label>
            <input type="text" name='category' class='category_name'>
            <input type="submit" value='Thêm' class='category_submit'>
        </form>

        <table>
            <tr>
                <td>Tên danh mục</td>
                <td>Hành động</td>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->category_name}}</td>
                <td>
                    <a onClick="return confirm('Bạn có chắc muốn xóa!')" href="{{url('delete_category', $data->id)}}">Xóa</a>
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