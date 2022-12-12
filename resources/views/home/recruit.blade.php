<!DOCTYPE html>
<html lang="en">
    @include('home.head')
<body>
    <x-app-layout>

    </x-app-layout>

    <nav class="recruit navbar navbar-expand-lg navbar-light px-4 py-3 d-flex justify-content-between align-items-center position-sticky top-0 w-100">
        <img src="https://hr.thecoffeehouse.com/img/logo.bbe8ad9a.svg" alt="logo" class="mx-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Về The Coffee House<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Khối cửa hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Khổi văn phòng
              </a>
            </li>
          </ul>
        </div>
        <form class="d-none d-sm-flex justify-content-between align-items-center">
          <a href="#">
            Tra cứu kết quả
        </a>
          <button><i class="fa-solid fa-magnifying-glass"></i> Tìm việc</button>
        </form>
      </nav>

    <div class="banner">
        <img src="https://partner.thecoffeehouse.com/hr/files/banners/1624978619019.jpeg" alt="banner">
        <div class="desc">
            <h2>Hãy trở thành</h2>
            <span>phiên bản tốt nhất của chính bạn</span>
        </div>
    </div>
    
    <div class="position-container">
        <h4>Bạn muốn ứng tuyển vị trí nào?</h4>
        <div class="d-flex">
            <div class="position">Barista</div>
            <div class="position">
                Tiếp đón khách hàng <br>
                <span>(Bảo vệ nội bộ)</span>
            </div>
        </div>
        <a href="#">Các vị trí khác (5)</a>
    </div>

    <div class="store-block">
        <div class="store-block_item block1">
            <img src="https://images.unsplash.com/photo-1503249023995-51b0f3778ccf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=360&q=80" alt="store image">
            <div class="desc">
                <h3>Khối cửa hàng</h3>
                <div class="row row-cols-2">
                    <span class="col my-2">Quản lý cửa hàng</span>
                    <span class="col my-2">Giám sát ca</span>
                    <span class="col my-2">Tiếp đón khách hàng <br>(Bảo vệ)</span>
                    <span class="col my-2">Barista</span>
                </div>
                <a href="#">Xem thêm</a>
            </div>
        </div>
        <div class="store-block_item block2">
            <img src="https://plus.unsplash.com/premium_photo-1664368832504-8997b72c6af3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="store image">
            <div class="desc">
                <h3>Khối văn phòng</h3>
                <div class="row row-cols-2">
                    <span class="col my-2">Product Marketing</span>
                    <span class="col my-2">Executive</span>
                </div>
                 <a href="#">Xem thêm</a>
            </div>
        </div>
    </div>

    <div class="invite">
        <!-- <h2>Bạn xứng đáng với những quyền lợi thiết thực</h2>
        <p>Chúng tôi tin rằng xây dựng được hạnh phúc, chú trọng con đường sự nghiệp cho nhân viên, sự hài lòng trong công việc và môi trường tích cực sẽ là nền tảng lâu dài cho sự phát triển bền vững của The Coffee House. Hãy đến với chúng tôi khi nhận thấy những giá trị này phù hợp với bạn!</p>
        <div class="invite-container">
            <div class="invite-item invite1">a</div>
            <div class="invite-item invite2">b</div>
            <div class="invite-item invite3">c</div>
            <div class="invite-item invite4">d</div>
            <div class="invite-item invite5">e</div>
        </div> -->
    </div>


    <footer class="recruit-footer">
        <img src="https://hr.thecoffeehouse.com/img/logo.bbe8ad9a.svg" alt="logo">
        <p>86 - 88 Cao Thang, Ward 4, District 3, Ho Chi Minh, Vietnam.</p>
        <p>Head Office: 195/10E Dien Bien Phu, Ward 15, Binh Thanh District, Ho Chi Minh, Vietnam</p>
        <div class="socials">
          <div class="social-item"><i class="fa-solid fa-phone"></i></div>
          <div class="social-item"><i class="fa-solid fa-envelope"></i></div>
          <div class="social-item"><i class="fa-brands fa-facebook-f"></i></div>
        </div>
        <p>Copyright © 2020 The Coffee House. All rights reserved.</p>
        <ul>
          <li>Terms of Use</li>
          <li>Privacy Policy</li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="home/main.js"></script>
  </body>
</html>