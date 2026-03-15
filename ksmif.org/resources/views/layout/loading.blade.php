<div id="loading" class="h-screen justify-center-safe place-items-center sticky bg-white top-0 z-10">
    <p id="loading-percent" class="font-['Bitcount'] text-7xl sm:pt-[20%] pt-[50%]"></p>
    <div style="width:250px; height: 20px; border: 2px black dashed; border-radius: 15px; padding:1px;">
        <div id="loading-param" style="height:14px; background-color:black; border-radius:10px;"></div>
    </div>
</div>
<style>
    .slide-in-top {
        -webkit-animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) reverse both;
        animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) reverse both;
    }
    @-webkit-keyframes slide-in-top {
        0% {
            -webkit-transform: translateY(-1000px);
                    transform: translateY(-1000px);
            opacity: 0;
        }
        100% {
            -webkit-transform: translateY(0);
                    transform: translateY(0);
            opacity: 1;
        }
    }
    @keyframes slide-in-top {
        0% {
            -webkit-transform: translateY(-1000px);
                    transform: translateY(-1000px);
            opacity: 0;
        }
        100% {
            -webkit-transform: translateY(0);
                    transform: translateY(0);
            opacity: 1;
        }
    }
</style>
<script>
    onload = function(){
        let percent=0;
        let loaded = setInterval(() => {
            percent++;
            $('#loading-percent').text(percent + '%');
            $('#loading-param').css('width', `${percent}%`);
        }, 20);
        setTimeout(() => {
            clearInterval(loaded);
            $('#loading-param').css('width', `100%`);
            $('#loading-percent').text('100%');
            $('#loading').addClass('slide-in-top');
            setTimeout(() => {
                $('#loading').attr('hidden', 'true');
            }, 550);
        }, 2000);
    }
</script>