@extends('layouts/'.$template)

@section('main_content')



<div id="main">
    <div class="container">


        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">


                <div class="text-center">
                    <h1 class="ind-h1 s24">Доска Объявлений</h1>
                    <p class="s17 c-4">Предложения от частных лиц и организаций
                        в Москве
                        !</p>
                </div>

                <div class="categories bltree-ind">
                    <ul class="row tree4 wrapper-scroll-tree4">

                        @foreach ($categories as $category)
                            <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="/category/{{$category->id}}" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/storage/img/cat/{{$category->img}}" alt="{{$category->name}}"></span> <span class="name-cat b-f pos-rel">{{$category->name}}</span>
                                <span class="count-tree c-7 s13 b-f">{{count($category->boards)}}</span></a>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
                
                <div class="list-block-ind row">

                    <div class="title-name s19 col-sm-12">VIP-объявления</div>

                    <div class="wrapper-scroll">
                        <div class="wrapper-scroll-bl">

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Haval Jolion 2021" href="" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Haval Jolion 2021" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 4</span>
                                        <a href="/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip" data-placement="top" title="АВИЛОН Ford Волгоградский" class="magazin-b">АВИЛОН Ford Волгоградский</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Haval Jolion 2021" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">Haval Jolion 2021</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 899 000</span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="BRP Can-Am Spyder Roadster" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="BRP Can-Am Spyder Roadster" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Can-Am Spyder Roadster" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">BRP Can-Am Spyder Roadster</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span> 870 000</span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Бизнес под ключ/франшиза студии маникюра NailMaker" href="https://easy.elite-board.org/Russia/Moscow/Biznes/sale_and_buying/21-biznes-pod-kljuch-franshiza-studii-manikjura-nailmaker.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Бизнес под ключ/франшиза студии маникюра NailMaker" src="/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="21" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Бизнес под ключ/франшиза студии маникюра NailMaker" href="https://easy.elite-board.org/Russia/Moscow/Biznes/sale_and_buying/21-biznes-pod-kljuch-franshiza-studii-manikjura-nailmaker.html">Бизнес под ключ/франшиза студии маникюра NailMaker</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span> 120 000</span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="BRP Ski-Doo Summit 850" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Ski-Doo Summit 850" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">BRP Ski-Doo Summit 850</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 250 000</span></div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div id="list_message_block" class="list-block-ind row">

                    <div class="title-name s19 col-sm-12">Свежие объявления <a class="a-all s14 c-5 f-l" href="/allmess/">Все объявления</a></div>
                    <div class="wrapper-scroll">
                        <div class="wrapper-scroll-bl">

                            @foreach ($boards->reverse() as $board)
                                
                           

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_30" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/storage/img/boards_images/{{$board->images[0]->name}}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="{{$board->title}}" href="" style="display: block; width: 100%; height: 100%;">
                                            <img alt="{{$board->title}}" src="/storage/img/boards_images/{{$board->images[0]->name}}" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="30" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> {{count($board->images)}} </span><a href="/shops/7-zapchasti-all.html" data-toggle="tooltip" data-placement="top" title="{{$board->user->name}}" class="magazin-b">{{$board->user->name}}</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="{{$board->title}}" href="">{{mb_strimwidth($board->title, 0, 20, "...")}}</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span> {{number_format($board->price, 0, '', ' ')}}</span></div>

                                    </div>
                                </div>
                            </div>


                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="articles-ind list-block-ind row">
                    <div class="title-name s19 col-md-12">Последние статьи <a class="a-all s14 c-7 f-l" href="/articles/">Все статьи</a></div>

                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Nauka-i-tehnika/Izobreteniya-kotorye-oblegchayut-zhizn">
                                Изобретения которые облегчают жизнь</a>
                            <div class="list-art-cont">Ежедневно ученые изобретают десятки вещей, которые должны облегчать нам жизнь. Большинство из них бессмысленны. Но изобретения которые мы для вас подготовили,... <span>10.02.2022</span></div>
                        </div>
                    </div>
                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Finansy-i-investicii/Bitrubl">
                                Битрубль. Какой надеется быть первая...</a>
                            <div class="list-art-cont">Первая российская криптовалюта надеется стать самой настоящей! Основанной на технологии блокчейн. И законной! Т. е. соответствовать всем законам Российской... <span>02.02.2022</span></div>
                        </div>
                    </div>
                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Zdorove/Glavnye-principy-zdorovogo-obraza-zhizni">
                                Главные принципы здорового образа жизни</a>
                            <div class="list-art-cont">Любой человек, смотря в зеркало, находил недостатки в своей фигуре. В большинстве случаев, эти недостатки связаны с появлением жировых отложений на животе и... <span>25.01.2022</span></div>
                        </div>
                    </div>
                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Puteshestviya/Pochemu-Turciya-tak-populyarna-u-turistov">
                                Почему Турция так популярна у туристов</a>
                            <div class="list-art-cont">Уже более десяти лет самой популярной летней страной для пляжного отдыха россиян, белорусов и украинцев является Турция. Теплое море и мягкий климат,... <span>10.01.2022</span></div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

@endsection