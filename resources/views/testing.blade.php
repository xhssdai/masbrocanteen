<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-red-500">
        <div class="container mx-auto py-5 flex justify-between">
            <div class="bg-primary">
                <h1>MealQ</h1>
            </div>
            <ul class="flex gap-3 justify-center">
                <li class="rounded-lg  px-3 py-1 hover:bg-red-400">Home</li>
                <li class="rounded-lg  px-3 py-1 hover:bg-red-400">About</li>
                <li class="rounded-lg  px-3 py-1 hover:bg-red-400">App</li>
                <li class="rounded-lg  px-3 py-1 hover:bg-red-400">Contact</li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="flex items-center justify-around mx-auto py-20 container">
            <div class="">
                <img src="{{asset("images/makan.png")}}" alt="BELUM ADA BOSS" class="w-full aspect-auto">
            </div>
            <div class="w-2/5">
                <p class="text-4xl font-bold my-3">Kantin lebih efisien <br>dengan MealQ</p>
                <p class="my-5">Nikmati makanan enak tanpa harus merasa kesal menunggu</p>
                <button class="rounded-full bg-red-200 px-5 py-2 hover:bg-red-500 items-center"><a href="" class="text-xl font-bold">Download <span>&#11166</span></a></button>
            </div>
        </div>
    </section>

    <section class="bg-red-100 py-10">
        <div class=" flex flex-col items-center justify-center">
            <p class="text-4xl font-bold my-3">About Us</p><br>
            <p>Sebuah Aplikasi pemesanan makanan di Kantin PENS untuk mengurangi antrian yang panjang</p>
        </div>
        <div class="flex items-center justify-center mt-5">
            <div class="card">
                <div class="w-full">
                    <i class="fas fa-chalkboard-teacher fa-5x"></i>
                </div>
            </div> 
        </div>
    </section>
</body>
</html>