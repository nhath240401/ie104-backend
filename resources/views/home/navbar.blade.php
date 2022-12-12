<div class="navbar-laravel relative flex justify-between items-center dark:bg-gray-900 py-4 sm:pt-0">
    @if (Route::has('login'))
    <h4 class='px-5'>THE COFFEE HOUSE</h4>
    <div>
        <a href="{{ url('/news') }}" class="mx-3 text-4xl text-black dark:text-gray-500">TIN TỨC</a>
        <a href="{{ url('/store') }}" class="mx-3 text-4xl text-black dark:text-gray-500">CỬA HÀNG</a>
        <a href="{{ url('/recruit') }}" class="mx-3 text-4xl text-black dark:text-gray-500">TUYỂN DỤNG</a>
    </div>
    <div class="hidden  px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-4xl text-black dark:text-gray-500">Trang chủ</a>
        @else
        <a href="{{ route('login') }}" class="text-4xl text-black dark:text-gray-500">ĐĂNG NHẬP</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-4xl text-black dark:text-gray-500">ĐĂNG KÝ</a>
        @endif
        @endauth
    </div>
    @endif
</div>