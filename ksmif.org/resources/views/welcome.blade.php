@extends('layout.app')

@section('content')
    <style>
        #arrow-scroll{
            animation: lompat 1s;
            animation-iteration-count: infinite;
        }
        @keyframes lompat{
            0%      {transform: translateY(0);}
            100%    {transform: translateY(-30px);}
        }

        .text-focus-in {
        -webkit-animation: text-focus-in 1.5s ease-in-out ;
                animation: text-focus-in 1.5s ease-in-out ;
        }

    @-webkit-keyframes text-focus-in {
        0% {
            -webkit-filter: blur(12px);
                    filter: blur(12px);
            opacity: 0;
        }
        100% {
            -webkit-filter: blur(0px);
                    filter: blur(0px);
            opacity: 1;
        }
    }

    @keyframes text-focus-in {
        0% {
            -webkit-filter: blur(12px);
                    filter: blur(12px);
            opacity: 0;
        }
        100% {
            -webkit-filter: blur(0px);
                    filter: blur(0px);
            opacity: 1;
        }
    }
    </style>

    {{-- HEADER --}}
    <div class="h-screen justify-center-safe place-items-center grid sm:mt-[5%] font-['Jersey10'] mt-[20%]">
        <div id="header" class="grid justify-center place-items-center">
            <iframe src="images/icon/ksmHytam.svg" type="image/svg+xml"></iframe>
            <h3 class="sm:text-3xl sm:mt-3 text-2xl">Kelompok Studi Mahasiswa Informatika</h3>
            <h3 class="sm:text-3xl text-2xl">UNIVERSITAS SURABAYA</h3>
            <h1 class="sm:text-6xl text-4xl">"We Not Me"</h1>

            <div class="flex text-3xl mt-14">
                <a class="mr-16 text-white bg-black p-3 pr-4 rounded-2xl" href="">Join Us</a>
                <a class="p-3 rounded-2xl border-2 backdrop-blur-sm" href="">About Us</a>
            </div>
        </div>

        <div id="arrow-scroll" class="text-2xl mt-9">
            <p>Scroll This Page</p>
            <img class="ml-11 w-10 relative" src="images/icon/arrow.svg" type="image/svg+xml">
        </div>
    </div>

    {{-- NAVBAR --}}
    @include ('layout.mainNavbar')

    <h1>pp</h1>
    <h1>pp</h1>
    <h1>pp</h1>
    
</body>
<script>
    setTimeout(() => {
        $('#header').addClass('text-focus-in');
    }, 2000);
</script>
@endsection