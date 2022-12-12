<!DOCTYPE html>
<html lang="en">
    @include('home.head')
<body>
    <x-app-layout>

    </x-app-layout>

    <div class="container-fluid news pt-5">
        <br>
        <br>
        <br>
        <div class="title d-flex justify-content-center align-items-center">
          <img src="/home/assets/newspaper.svg"  alt="img" class="mx-2">
          <h1 class="fs-2">Tin tức mới nhất</h1>
        </div>
        <div class="mx-auto" style="width: 600px">
          <br>
          <div class="badge rounded-pill bg-light" style="width: 600px">
            <ul class="nav nav-pills mx-auto p-1 justify-content-center " role="tablist">
              <li class="nav-item">
                <a class="nav-link active " data-bs-toggle="pill" href="#uudai" style="width:120px">ƯU ĐÃI </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-bs-toggle="pill" href="#capnhat" style="width:120px">CẬP NHẬT </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-bs-toggle="pill" href="#coffee" style="width:120px">#COFFEE</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-content">
          <div id="uudai" class="tab-pane container active"><br>
            <div class="mt-5 d-flex justify-content-center align-items-center news-container row row-cols-4 gap-3">
              <div class="col news shadow-lg d-flex flex-column align-items-end">
                  <img src="home/assets/images/news1.jpg" alt="">
                  <h4 class="heading mt-2 text-center me-3">Chốt 5 đơn nhà, săn quà trên mây</h4>
                  <button type="button" class="btn btn-warning me-3 mt-3 text-white">Đọc tiếp</button>
              </div>
              <div class="col news shadow-lg d-flex flex-column align-items-end">
                  <img src="home/assets/images/news2.jpg" alt="">
                  <h4 class="heading mt-2 text-center me-3">Chính sách ưu đãi phi giao hàng mới cho thành viên ...</h4>
                  <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
              </div>
              <div class="col news shadow-lg d-flex flex-column align-items-end">
                  <img src="home/assets/images/news3.jpg" alt="">
                  <h4 class="heading mt-2 text-center me-3">Chốt 5 đơn nhà, nhận quà trung thu</h4>
                  <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
              </div>
              <div class="col news shadow-lg d-flex flex-column align-items-end">
                  <img src="home/assets/images/news4.jpg" alt="">
                  <h4 class="heading mt-2 text-center me-3">cloudfee confession: kể chuyện cà phê - nhận quà</h4>
                  <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
              </div>
              <div class="col news shadow-lg d-flex flex-column align-items-end">
                <img src="home/assets/images/News/NOTI--8-.jpg" alt="">
                <h4 class="heading mt-2 text-center me-3">Ngày nhẹ như mây - săn deal 0Đ ngay</h4>
                <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
            </div>
            <div class="col news shadow-lg d-flex flex-column align-items-end">
              <img src="assets/images/News/noti--2-.jpg" alt="">
              <h4 class="heading mt-2 text-center me-3">Hi-tea Healthy : 0Đ chờ chi</h4>
              <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
          </div>
          <div class="col news shadow-lg d-flex flex-column align-items-end">
            <img src="home/assets/images/News/Noti.jpg" alt="">
            <h4 class="heading mt-2 text-center me-3">Tiên cày task - hậu mời deal</h4>
            <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
        </div>
        <div class="col news shadow-lg d-flex flex-column align-items-end">
          <img src="home/assets/images/News/NOTI--1-.jpg" alt="">
          <h4 class="heading mt-2 text-center me-3">Ghé mang đi nhà lì xì</h4>
          <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
        </div>
          </div>
          </div>
          <div id="capnhat" class="tab-pane container fade"><br>
            <div class="mt-5 d-flex justify-content-center align-items-center news-container row row-cols-4 gap-3">
              <div class="col news shadow-lg d-flex flex-column align-items-end">
                <img src="home/assets/images/news5.jpg" alt="">
                <h4 class="heading mt-2 text-center me-3">top 120 người chơi xuất sắc nhất đã chính thức lộ diện</h4>
                <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
            </div>
            <div class="col news shadow-lg d-flex flex-column align-items-end">
                <img src="home/assets/images/news6.jpg" alt="">
                <h4 class="heading mt-2 text-center me-3">cloudfee go!!! trổ tài pha chế, nhận quà phủ phê</h4>
                <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
            </div>
            <div class="col news shadow-lg d-flex flex-column align-items-end">
                <img src="home/assets/images/news7.jpg" alt="">
                <h4 class="heading mt-2 text-center me-3">Hành trình mới nhà 178 hậu giang - Quận 06</h4>
                <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
            </div>
            <div class="col news shadow-lg d-flex flex-column align-items-end">
                <img src="home/assets/images/news8.jpg" alt="">
                <h4 class="heading mt-2 text-center me-3">Bà con ơi! nhà mới vincom mỹ tho tới rồi đây</h4>
                <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
            </div>
            <div class="col news shadow-lg d-flex flex-column align-items-end">
              <img src="home/assets/images/News/NOTI--9-.jpg" alt="">
              <h4 class="heading mt-2 text-center me-3">Nhóm to giá nhỏ giảm giá đến 70k</h4>
              <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
          </div>
          <div class="col news shadow-lg d-flex flex-column align-items-end">
            <img src="home/assets/images/News/noti--10-.jpg" alt="">
            <h4 class="heading mt-2 text-center me-3">Áp dụng mã code - giảm giá </h4>
            <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
        </div>
        <div class="col news shadow-lg d-flex flex-column align-items-end">
          <img src="home/assets/images/News/MOBILE-VER.jpg" alt="">
          <h4 class="heading mt-2 text-center me-3">CloudFee - Êm mượt như mây</h4>
          <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
      </div>
      <div class="col news shadow-lg d-flex flex-column align-items-end">
        <img src="home/assets/images/News/noti--11-.jpg" alt="">
        <h4 class="heading mt-2 text-center me-3">Creamy đi tỉnh rồi tính - mua 1 tặng 1</h4>
        <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
    </div>
            </div>
            </div>
          <div id="coffee" class="tab-pane container fade"><br>
            <div class="mt-5 d-flex justify-content-center align-items-center news-container row row-cols-4 gap-3">
              <div class="col news shadow-lg d-flex flex-column align-items-end">
                <img src="/home/assets/images/phache.jpg" alt="">
                <h4 class="heading mt-2 text-center me-3">Nghệ thuật pha chế -V60</h4>
                <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
            </div>
            <div class="col news shadow-lg d-flex flex-column align-items-end">
              <img src="home/assets/images/phache2.jpg" alt="">
              <h4 class="heading mt-2 text-center me-3">Nghệ thuật pha chế - Kalita Wave</h4>
              <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
          </div>
          <div class="col news shadow-lg d-flex flex-column align-items-end">
            <img src="home/assets/images/phache3.jpg" alt="">
            <h4 class="heading mt-2 text-center me-3">Nghệ thuật pha chế - Cold Brew</h4>
            <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
        </div>
        <div class="col news shadow-lg d-flex flex-column align-items-end">
          <img src="home/assets/images/phache4.jpg" alt="">
          <h4 class="heading mt-2 text-center me-3">Nghệ thuật pha chế - Espresso</h4>
          <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
      </div>
      <div class="col news shadow-lg d-flex flex-column align-items-end">
        <img src="assets/images/News/img_8280_grande.jpg" alt="">
        <h4 class="heading mt-2 text-center me-3">Nghệ thuật pha chế - pha phin</h4>
        <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
    </div>
    <div class="col news shadow-lg d-flex flex-column align-items-end">
      <img src="assets/images/News/img_8527_grande-1.jpg" alt="">
      <h4 class="heading mt-2 text-center me-3">Nghệ thuật pha chế - Latte</h4>
      <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
  </div>
  <div class="col news shadow-lg d-flex flex-column align-items-end">
    <img src="assets/images/News/img_8538_grande.jpg" alt="">
    <h4 class="heading mt-2 text-center me-3">Nghệ thuật pha chế - Capuchino</h4>
    <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
</div><div class="col news shadow-lg d-flex flex-column align-items-end">
  <img src="assets/images/News/kv_TCHS_1x1.jpg" alt="">
  <h4 class="heading mt-2 text-center me-3">Hương vị Signature tại nhà</h4>
  <button type="button" class="btn btn-warning me-3 mt-3 text-white ">Đọc tiếp</button>
</div>
            </div>
          </div>
      </div>
      </div>
      
    <!--End main news-->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    @include('home.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="home/main.js"></script>
  </body>
</html>