<div id="loading" class="h-screen sticky top-0 z-10 grid place-items-center bg-white">
    <div id="loading-content" class="grid place-items-center">
        <p id="loading-percent" class="font-['Bitcount'] text-7xl"></p>
        <div class="flex" style="width:250px; border: 2px black dashed; border-radius: 15px; padding: 1px;">
            <div id="loading-param" style="height:10px; background-color:black; border-radius: 8px;"></div>
        </div>
    </div>
</div>
<style>
    .fade {
        animation: fade 0.5s reverse both;
    }

    @keyframes fade {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .slide-in-top {
        animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) reverse both;
    }

    @keyframes slide-in-top {
        0% {
            transform: translateY(-1000px);
        }
        100% {
            transform: translateY(0);
        }
    }

    #loading-param {
        width: 0%;
        transition: width 1.7s cubic-bezier(0.7, 0.2, 0.1, 1.0);
    }
</style>
<script>
    onload = function() {
        let duration = 1700;
        let stepDuration = 40;

        let start = performance.now();

        $('body').css('overflow', 'hidden');
        $('#loading-param').css('width', '100%');

        let loaded = setInterval(() => {
            const progress = Math.min((performance.now() - start) / (duration / 1.675), 1);
            const percent = Math.floor(progress * progress * 100);
            $('#loading-percent').text(`${percent}%`);
        }, stepDuration);

        setTimeout(() => {
            clearInterval(loaded);
            $('#loading-percent').text('100%');
            $('#loading-content').addClass('fade slide-in-top');
            $('#loading').addClass('fade');
            setTimeout(() => {
                $('#loading').attr('hidden', 'true');
                $('body').css('overflow', '');
            }, 550);
        }, duration);
    }
</script>
