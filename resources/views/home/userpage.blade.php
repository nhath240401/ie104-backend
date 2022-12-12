<!DOCTYPE html>
<html lang="en">
    @include('home.head')
<body>
    @include('home.navbar')

    @include('home.slider')

    <div class="product my-5">
        <div class="d-flex justify-content-center align-items-center">
            <img src="home/assets/images/coffee.png" class="mx-3 product-image" alt="icon">
            <h1 class="fs-3 fw-bolder">Sản phẩm từ Nhà</h1>
        </div>
        
        <div class="categories d-flex justify-content-center align-items-center">
                  <div class="container-product d-flex justify-content-center row row-cols-4 gap-3">
                    @foreach($product as $product)
                    <div class="product col p-2 d-flex flex-column justify-content-center align-items-center shadow-lg">
                        <a href="{{url('product_detail', $product->id)}}">
                          <img src="/product/{{$product->image}}" alt="product_img">
                        </a>
                        <h4 class="fs-6 mt-2">{{$product->title}}</h4>
                        <h6>{{$product->price}} đ</h6>
                        <button class="btn btn-outline-warning add-cart">Đặt hàng</button>
                    </div>
                    @endforeach
                  </div>
        </div>
              <a href="Order.html" class="mt-5 d-flex justify-content-center align-items-center text-warning text-decoration-none">
                Xem tất cả
                <i class="fa-solid fa-arrow-right mx-2"></i>
              </a>
    </div>

    @include('home.littlenews')

    @include('home.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="home/main.js"></script>
  </body>
</html>