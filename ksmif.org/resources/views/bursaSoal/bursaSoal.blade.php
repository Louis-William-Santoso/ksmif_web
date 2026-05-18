@extends('../layout.app')

@section('content')
<style>
.typewriter{
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  animation: 
    typing 1s steps(18, end);
}
.blink{
    animation: blink-caret .75s step-end infinite;
}
/* The typing effect */
@keyframes typing {
  from { width: 0; border-right: .15em solid rgb(0, 0, 0);}
  to { width: 100%; border-right: .1em solid transparent;}
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent;  }
  50% { border-right: 0.1em solid rgba(0, 0, 0, 0.536);}
}
</style>

<div class="font-['Jersey10'] grid xl:grid-cols-2 md:mx-24 mx-16 my-16 min-h-72">
    <div id="title" class="w-fit min-h-44 m-0">
        <p class="text-4xl hidden">WELCOME TO</p>
        <p class="xl:text-9xl text-7xl hidden">BURSA SOAL</p>
        <p style="margin:0;" class="xl:text-7xl text-5xl hidden w-fit">KSM-IF</p>
    </div>
    
    <form id="formSearch" class="xl:text-4xl text-3xl md:my-8 my-1">
        <div class="mb-0">
            <p class="text-5xl">Cari Soal:</p>
            <input type="text" name="search" id="search" class="border-b" placeholder="cth: Quiz OOP">
        </div>

        <div>
            <label for="year">Tahun:</label>
            <select name="year">
                <option value="tes1">tes1</option>
                <option value="tes2">tes2</option>
            </select>

            <label for="matkul">Matkul:</label>
            <select name="matkul">
                <option value="tes1">tes1</option>
                <option value="tes2">tes2</option>
            </select>
        </div>
    </form>
</div>

<div class="mx-1.5 border-2 border-dashed grid grid-cols-7 bg-[#ffffff99] backdrop-blur-xs mb-4 rounded-2xl">
    
    <div class="grid grid-rows-4 max-h-72 max-w-52 bg-white shadow-black shadow-2xl mx-4 rounded-b-2xl my-4">
        <div class="row-span-3 overflow-hidden">
            <img src="https://i.pinimg.com/originals/97/8e/04/978e043544b65dbf818ea9ff95faaa3d.jpg" alt="gambarSoal" class="w-full h-full object-cover">
        </div>
        <div class="mx-2">
            <p>tess</p>
            <p class="text-zinc-600">Matkul:</p>
        </div>
    </div>

</div>

<script>
let title = $('#title > p');
title.eq(0).removeClass('hidden');

for(let i=0; i < title['length']; i++){
    let timeout = 1500 * (i+1);
    setTimeout(() => {
        title.eq(i).removeClass('hidden');
        title.eq(i).addClass('typewriter');
    }, timeout);

    if((title['length']-1) == i){
        setTimeout(()=>{
            title.eq(i).addClass('blink');
        }, 4000);
    }
}

$('#formSearch').on('submit', function(e){
    e.preventDefault();

    $.ajax({
    type: "GET",
    url: "/bursa-soal/by",
    success: function (res) {
        console.log(res);
    }
});
});

</script>
@endsection