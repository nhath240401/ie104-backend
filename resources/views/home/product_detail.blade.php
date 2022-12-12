<!DOCTYPE html>
<html lang="en">
    @include('home.head')
<body>
    @include('home.navbar')

    <div class="product-detail  m-5">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Menu</a></li>
            <li class="breadcrumb-item"><a href="#">{{$product->category}}</a></li>
            <li class="breadcrumb-item active">{{$product->title}}</li>
        </ul>

        <div class="top my-3 d-lg-flex flex-column flex-md-row">
            <img 
            src="/product/{{$product->image}}" 
            alt="Caramel Macchiato"
            class="img-fluid"
            >
            <div class="title">
                <h3>{{$product->title}}</h3>
                <h4>{{$product->price}} đ</h4>
                <h5>Số lượng: {{$product->quantity}}</h5>
                <div class="my-3">
                    <span>Chọn size (bắt buộc)</span>
                </div>
                <div class="size">
                    <div class="size-item"><i class="fa fa-mug-saucer"></i>Nhỏ + 0 đ</div>
                    <div class="size-item"><i class="fa fa-mug-saucer"></i>Lớn + 6.000 đ</div>
                </div>
                <div class="my-3">
                    <span class="">Topping</span>
                </div>
                <div class="topping">
                    <div class="topping-item">Kem phô mai Macchiato + 10.000 đ</div>
                    <div class="topping-item">Shot Espresso + 10.000 đ</div>
                    <div class="topping-item">Trân châu trắng + 10.000 đ</div>
                    <div class="topping-item">Sốt Caramel + 10.000 đ</div>
                    <div class="topping-item">Thạch cà phê + 10.000 đ</div>
                </div>
                <button><i class="fa fa-truck-fast"></i> Đặt giao tận nơi</button>
            </div>
        </div>
        <hr />
        <div class="desc">
            <h4>Mô tả sản phẩm</h4>
            <p>{{$product->description}}</p>
        </div>
        <hr />
        <div class="relate">
            <h4>Sản phẩm liên quan</h4>
            <div class="relate-container">
                <div class="relate-item">
                    <img src="/home/assets/images/products/cloudfee-1.jpg" alt="relate img">
                    <h4>CloudFee Hạnh Nhân Nướng</h4>
                    <p>49.000 đ</p>
                </div>
                <div class="relate-item">
                    <img src="/home/assets/images/products/hitea-8.jpg" alt="relate img">
                    <h4>Hi-tea Đá tuyết Yuzu Vải</h4>
                    <p>49.000 đ</p>
                </div>
                <div class="relate-item">
                    <img src="/home/assets/images/products/fruit-2.jpg" alt="relate img">
                    <h4>Trà sữa dừa</h4>
                    <p>49.000 đ</p>
                </div>
                <div class="relate-item">
                    <img src="/home/assets/images/products/hitea-3.jpg" alt="relate img">
                    <h4>Hi-tea Xoài</h4>
                    <p>49.000 đ</p>
                </div>
                <div class="relate-item">
                    <img src="/home/assets/images/products/home-9.jpg" alt="relate img">
                    <h4>Trà Oolong Túi Lọc Tearoma</h4>
                    <p>28.000 đ</p>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="home/main.js"></script>
  </body>
</html>