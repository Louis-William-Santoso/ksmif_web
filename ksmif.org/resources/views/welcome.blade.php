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

    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, debitis atque velit aut doloribus maiores in voluptate, perspiciatis error consectetur commodi itaque laudantium, dicta dolores delectus similique officia. Hic, iste.
    Quia, eos! Laudantium nihil quasi maxime, harum ducimus ipsum saepe debitis dicta officiis, itaque voluptatem ratione inventore quia quam ullam iste, maiores quaerat illo eos qui. Corporis molestiae pariatur eveniet.
    Quidem magni aliquam cumque perferendis cum quasi distinctio maiores itaque animi quas odio mollitia, corrupti quis ratione sint. Laudantium ratione, fugiat eligendi recusandae unde dignissimos. Commodi dolorem voluptatem a corrupti.
    Deleniti rerum odit repellat autem laudantium maxime est! Quisquam voluptate sequi, consectetur inventore facere adipisci perspiciatis natus tempore. Cumque, saepe? Vel ducimus laboriosam aliquam enim itaque architecto quas totam et!
    Nobis accusamus, repellendus, ab quaerat sit esse odit iste velit reprehenderit ea ipsum assumenda inventore ad distinctio! Dolorum fugit magni numquam odit, incidunt temporibus est hic consequuntur quidem. Amet, quisquam!
    Dolor, aliquid maxime mollitia, voluptate ducimus voluptatem nulla minima quaerat iusto quo adipisci pariatur fugit vel placeat praesentium error debitis facilis sed? Vero eum excepturi eius mollitia necessitatibus, consectetur voluptas.
    Laudantium, aliquid. Officiis pariatur numquam molestias suscipit rem esse velit veritatis facere aliquid consectetur omnis ex aut sit alias, repellendus corporis minus excepturi maiores delectus. Blanditiis dolores asperiores deserunt quis.
    Velit vitae sequi aspernatur placeat eveniet tempora inventore. Odio porro labore quo omnis ratione laboriosam? Et reprehenderit adipisci reiciendis quasi suscipit beatae, corporis enim optio voluptatum natus consequuntur dolorum dolore.
    Voluptatem obcaecati nostrum sunt cumque aliquam? Explicabo, voluptate. Suscipit mollitia rem sequi nesciunt facere, quae reiciendis velit culpa maiores corrupti libero atque? Unde provident praesentium atque voluptatem, nemo facere similique!
    Amet reprehenderit sunt dolores cum tempore sint. Dolores ratione ab architecto placeat tempore quidem esse, vel eveniet eaque, voluptates illo? Assumenda ea eveniet, perferendis fuga quidem similique mollitia maiores impedit!</h1>
    <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores eligendi voluptatum repellendus unde libero. Id sit mollitia eum, voluptas eius suscipit tempora fugiat sapiente quasi. Accusamus ut odit placeat dolorem!
    Saepe accusamus veritatis laudantium deleniti perferendis vero inventore, natus laborum delectus, eaque molestiae quisquam explicabo quae reiciendis non dolores. Deleniti dignissimos enim quia. Quasi beatae autem quidem voluptate velit tempora.
    Perferendis eum dignissimos ad eaque est enim quam aperiam. Nulla aperiam numquam laborum? Laudantium incidunt itaque iste et distinctio. Quasi enim amet numquam dignissimos unde omnis! Temporibus quam maiores magnam.
    Eaque nesciunt sit error tempore, tempora iusto quaerat praesentium rem neque rerum laborum hic optio quidem sunt minus dolore natus a architecto veritatis provident perferendis iure? Modi praesentium pariatur quaerat.
    Cupiditate saepe voluptatem ipsa, non molestiae obcaecati assumenda voluptatibus maiores consequuntur hic sunt eius asperiores minus, accusamus rerum illum consectetur at eaque odit sapiente? Quasi natus obcaecati maxime minima magnam?
    Minima commodi sed aliquam praesentium dolorum tenetur impedit corporis a modi repudiandae ea, necessitatibus exercitationem placeat fugiat delectus natus. Error deserunt, natus nemo at nihil labore voluptatum soluta nostrum repellat.
    Commodi, eaque similique? Voluptate, delectus assumenda, maiores blanditiis magnam debitis pariatur doloremque aut iusto accusantium nam sed rem quas impedit asperiores magni, repudiandae aliquam atque? Incidunt reprehenderit dolorem dolore! Ipsum.
    Praesentium quae quasi vero officiis consequatur blanditiis mollitia aliquam nam temporibus. Sed vero reprehenderit, voluptatem atque illum, quis mollitia tenetur magnam doloremque reiciendis doloribus culpa ipsum, alias fuga rerum voluptatum.
    Aliquid dicta provident possimus magni, facilis distinctio totam enim ullam amet excepturi nobis sit laboriosam, deleniti eos dolores? Soluta repudiandae saepe asperiores ab doloremque officia quia ipsam consequuntur eveniet enim?
    Exercitationem accusamus eos natus eveniet maiores dolorem iste quo esse illum blanditiis quisquam numquam minus dolores, laudantium corrupti dicta error? Voluptas, officia voluptatem! Nobis quod odit voluptatum, facilis autem officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque veniam voluptate quidem fugiat est quam esse quisquam quis, cum, nobis beatae. Accusamus et quos ad, adipisci optio aspernatur mollitia.
    Distinctio perferendis, asperiores sunt molestiae dolore excepturi reprehenderit rerum cumque accusamus, fugiat ipsum? Ratione provident dignissimos, voluptate sapiente iste odit perspiciatis cumque consequatur aliquam consectetur! Rerum ut voluptatum deleniti molestiae.
    Corporis beatae assumenda magni voluptas ullam veniam laborum, dicta ipsam iusto optio quae expedita mollitia deleniti atque, quas magnam qui voluptate cum! Rerum dolorum ad provident, dignissimos cumque impedit modi!
    Culpa suscipit iste placeat minus sit ipsam obcaecati eum non quas illo omnis, tempore vitae, deleniti repellendus harum dolore, recusandae earum perferendis qui magni libero! Qui incidunt optio enim accusamus?</h1>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eum omnis pariatur autem ad. Esse, dolorum in enim minima voluptatem ipsum, molestias dicta inventore, nemo doloremque nostrum magni autem deserunt.
    Quam doloribus nisi dolor culpa eveniet corporis quod iusto nemo in, facere incidunt consequuntur nihil non quis aliquid at labore amet et placeat ea dicta minima? Vel fugiat ut fugit.
    Itaque nobis ducimus culpa non asperiores numquam iusto minima ipsa nihil natus accusamus fugiat, fuga, illo voluptates? Nesciunt neque ducimus fugit id velit, non dolore hic, cumque, eum dolor ea.</h1>
    
</body>
<script>
    setTimeout(() => {
        $('#header').addClass('text-focus-in');
    }, 2000);
</script>
@endsection