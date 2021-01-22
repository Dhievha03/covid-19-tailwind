<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div x-data="{ scrolAtTop: true }" class="flex flex-col-reverse">
        <div class="p-4 bg-white md:flex items-center justify-between md:px-10 fixed top-0 w-full z-10"
            :class="{ 'bg-purple-700 transition ease-linear duration-500 shadow-2xl' : !scrolAtTop }"
            @scroll.window="scrolAtTop = (window.pageYOffset > 1) ? false : true">
            <div class="flex justify-between">
                <div class=" flex items-center">
                    <img src="https://cdn2.iconfinder.com/data/icons/icontober/64/Inkcontober_Trail-512.png" alt="logo" width="50" class="mr-2">
                    <a href="" class="font-bold text-purple-400 md:text-xl md:ml-4 ml-2 uppercase text-lg hover:text-purple-300 transition ease-out duration-500">Informasi Covid-19</a>
                </div>
                <div class="px-4 cursor-pointer md:hidden flex items-center" id="burger">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </div>
            </div>

            <div class="hidden md:flex" id="menu">
                <ul class="text-center md:flex md:flex-row">
                    <li class="py-2"><a href="#" class="text-purple-400 hover:text-purple-300 p-2 font-semibold transition ease-out duration-500 pengertian">Pengertian</a></li>
                    <li class="py-2"><a href="#" class="text-purple-400 hover:text-purple-300 p-2 font-semibold transition ease-out duration-500 penularan">Penularan</a></li>
                    <li class="py-2"><a href="#" class="text-purple-400 hover:text-purple-300 p-2 font-semibold transition ease-out duration-500 pencegahan">Pencegahan</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="md:flex px-10 py-20 items-center md:mt-20 mt-10">
        <div class="md:w-1/2 mb-6 md:mb-0">
            <img src="{{asset('image/dokter.png')}}" alt="" class="w-full">
        </div>

        <div class="md:w-1/2 md:text-left text-center md:ml-20">
            <div class="sm:text-2xl lg:text-4xl mb-6 text-l tracking-widest font-bold">
                <span class="md:block">
                    Selamat Datang di
                </span>
                <span>
                    Informasi Seputar Covid-19
                </span>
            </div>            
            <p class="mb-6 md:text-xl font-semibold">Yang Anda cari ada disini</p>
            <div class="flex md:justify-end md:mr-10 justify-center">
                <div class="bg-purple-700 sm:w-10 sm:h-10 flex items-center justify-center rounded-full animate-bounce w-7 h-7">
                    <svg class="sm:w-6 sm:h-6 w-4 h-4 text-white rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
            
                
        </div>
    </div>

    @foreach ($data as $d)
        <div class="md:px-20 px-4 md:py-20 py-4">
            <div class="grid md:grid-cols-4 md:gap-10 grid-cols-2 gap-5">
                <div class="bg-yellow-400 p-5 flex flex-col text-white items-center justify-center rounded shadow-xl">
                    <svg class="w-14 h-14 flex items-center animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    
                    <div class="font-bold text-center">
                        <p>Positif</p>
                        <p>{{$d['positif']}}</p>
                    </div>
                </div>

                <div class="bg-blue-500 p-5 flex flex-col text-white items-center justify-center rounded shadow-xl">
                    <div class="">
                        <svg class="w-14 h-14 flex items-center animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    
                    <div class="font-bold text-center">
                        <p>Dirawat</p>
                        <p>{{$d['dirawat']}}</p>
                    </div>
                </div>
        
                <div class="bg-red-500 p-5 flex flex-col text-white items-center justify-center rounded shadow-xl">
                    <svg class="w-14 h-14 flex items-center animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    
                    <div class="font-bold text-center">
                        <p>Meninggal</p>
                        <p>{{$d['meninggal']}}</p>
                    </div>
                </div>
        
                <div class="bg-green-600 p-5 flex flex-col text-white items-center justify-center rounded shadow-xl">
                    <svg class="w-14 h-14 flex items-center animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>            
                    <div class="font-bold text-center">
                        <p>Sembuh</p>
                        <p>{{$d['sembuh']}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="md:px-20 md:py-10 px-4 py-4 space-y-2">
        <div id="pengertian-1">
            <div class="md:text-4xl sm:text-2xl text-xl font-bold text-purple-900 border-b border-purple-400 p-6">
                Apa Itu Covid-19?
            </div>
            <div class="p-6 md:text-xl sm:text-lg text-md">
                <p class="font-semibold">
                    COVID-19 adalah penyakit yang disebabkan oleh virus severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan gangguan sistem pernapasan, mulai dari gejala yang ringan seperti flu, hingga infeksi paru-paru, seperti pneumonia.
                    Kasus pertama penyakit ini terjadi di kota Wuhan, Cina, pada akhir Desember 2019. Setelah itu, COVID-19 menular antarmanusia dengan sangat cepat dan menyebar ke puluhan negara, termasuk Indonesia, hanya dalam beberapa bulan.
                    Penyebarannya yang cepat membuat beberapa negara menerapkan kebijakan untuk memberlakukan lockdown untuk mencegah penyebaran virus Corona. Di Indonesia, pemerintah menerapkan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.
                </p>
    
                <span class="text-gray-400 font-italic hover:underline hover:text-purple-900">
                    <a href=" https://www.alodokter.com/covid-19">Sumber : https://www.alodokter.com/covid-19</a>
                </span>
            </div>
        </div>
    
        <div id="penularan-1">
            <div class="md:text-4xl sm:text-2xl text-xl font-bold text-purple-900 border-b border-purple-400 p-6">
                Penularan
            </div>
            <div class="p-6 md:text-xl sm:text-lg text-md">
                <p class="font-semibold">
                    Virus Corona dapat menginfeksi siapa saja, tetapi efeknya akan lebih berbahaya atau bahkan fatal bila terjadi pada orang lanjut usia, ibu hamil, orang yang memiliki penyakit tertentu, perokok, atau orang yang daya tahan tubuhnya lemah, misalnya pada penderita kanker. Karena mudah menular, virus Corona juga berisiko tinggi menginfeksi para tenaga medis yang merawat pasien COVID-19. Oleh karena itu, para tenaga medis dan orang-orang yang memiliki kontak dengan pasien COVID-19 perlu menggunakan alat pelindung diri (APD). Seseorang dapat tertular COVID-19 melalui berbagai cara, yaitu :
                </p>
                <ul class="list-disc list-outside font-semibold space-y-3">
                    <li class="mt-2">Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin</li>
                    <li>Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19</li>
                    <li>Kontak jarak dekat dengan penderita COVID-19</li>
                </ul>
                <span class="text-gray-400 font-italic hover:underline hover:text-purple-900">
                    <a href=" https://www.alodokter.com/covid-19">Sumber : https://www.alodokter.com/covid-19</a>
                </span>
            </div>
        </div>
    
        <div id="pencegahan-1">
            <div class="md:text-4xl sm:text-2xl text-xl font-bold text-purple-900 border-b border-purple-400 p-6">
                Pencegahan
            </div>
            <div class="p-6 md:text-xl sm:text-lg text-md">
                <p class="font-semibold">
                    Saat ini, vaksin untuk mencegah infeksi virus Corona atau COVID-19 sudah mulai disebarkan. Namun, bukan berarti dengan ada vaksin ini kita bebas dari virus tersebut. Kita harus tetap mematuhi protokol kesehatan yang berlaku.
                    Berikut ini cara pencegahan yang terbaik adalah dengan menghindari faktor-faktor yang bisa menyebabkan Anda terinfeksi virus ini, yaitu:
                </p>
                <ul class="list-disc list-outside font-semibold space-y-3">
                    <li class="mt-2">Terapkan physical distancing, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak.</li>
                    <li>Gunakan masker saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi berbelanja bahan makanan dan mengikuti ibadah di hari raya, misalnya Idul Adha.</li>
                    <li>Rutin mencuci tangan dengan air dan sabun atau hand sanitizer yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum.</li>
                </ul>
                <span class="text-gray-400 font-italic hover:underline hover:text-purple-900">
                    <a href=" https://www.alodokter.com/covid-19">Sumber : https://www.alodokter.com/covid-19</a>
                </span>
            </div>
        </div>
    </div>

    <div class="w-full flex justify-center items-center px-10 py-4 bg-gray-300 font-semibold text-gray-700">
        Arya Dhievha Rusdiana | RPL XII-3
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    const burger = document.querySelector('#burger');
    const menu = document.querySelector('#menu');

    burger.addEventListener('click', ()=>{
        if(menu.classList.contains('hidden')){
            menu.classList.remove('hidden')
        }else{
            menu.classList.add('hidden');
        }
    })
</script>

<script>
    $(".pengertian").click(function() {
        $('html,body').animate({
            scrollTop: $("#pengertian-1").offset().top},
            'slow');
    });

    $(".penularan").click(function() {
        $('html,body').animate({
            scrollTop: $("#penularan-1").offset().top},
            'slow');
    });

    $(".pencegahan").click(function() {
        $('html,body').animate({
            scrollTop: $("#pencegahan-1").offset().top},
            'slow');
    });

</script>
</html>