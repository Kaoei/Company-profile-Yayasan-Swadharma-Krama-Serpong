<nav>
    <div class="container flex justify-between items-center text-xs md:text-sm py-3 px-2 md:px-5 font-medium">
        <div class="logo-title flex items-center space-x-3">
            <img src="{{ asset('img/logoyayasan.png') }}" class="w-12" alt="logo">
            <p>YAYASAN SWADHARMA KRAMA SERPONG</p>
        </div>
        <div class="navComponent text-sm md:block hidden">
            <ul class="flex space-x-5">
                <li><a href="">TENTANG KAMI</a></li>
                <li><a href="">VISI MISI</a></li>
                <li><a href="">KEGIATAN</a></li>
                <li><a href="">BERITA</a></li>
                <li><a href="">KONTAK</a></li>
            </ul>
        </div>

        <div class="navComponentMobile md:hidden flex">
            <button><span class="text-black"><i class="fa-solid fa-bars"></i></span></button>
        </div>
    </div>

    <div class="navbarShow md:hidden flex bg-red-700">
        <li><a href="">TENTANG KAMI</a></li>
        <li><a href="">VISI MISI</a></li>
        <li><a href="">KEGIATAN</a></li>
        <li><a href="">BERITA</a></li>
        <li><a href="">KONTAK</a></li>
    </div>
</nav>
