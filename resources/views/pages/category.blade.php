@extends('layouts/'.$template)

@section('main_content')
<div id="main"><div class="container">  
  
   
    <div class="bl-tb container-tb">
    <div class="bl-cell al-top bl-center">
       
      
      
    <h1>{{$category->name}}</h1>
    <p style="margin-bottom: 15px;">{{$category->description}}</p>
    <div id="search_form_cat" class="block_search pos-rel">
    <div class="btn btn-default colsearch visible-xs" data-toggle="collapse" data-target="#colsearch">Все параметры</div>
    <div id="colsearch" class="collapse in"><form id="block_search" name="block_search" method="GET" action="/search/">
    <div class="block_search_ajax"><div class="row search_fields bl-table yamm">     
      
    
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">           
        <select size="1" name="f_4" id="bs_4" class="form-control">
            <option value="">Год выпуска</option>
            <option value="330">2022</option>
            <option value="329">2021</option>
            <option value="328">2020</option>
            <option value="327">2019</option>
            <option value="326">2018</option>
            <option value="153">2017</option>
            <option value="154">2016</option>
            <option value="155">2015</option>
            <option value="156">2014</option>
            <option value="157">2013</option>
            <option value="158">2012</option>
            <option value="159">2011</option>
            <option value="160">2010</option>
            <option value="161">2009</option>
            <option value="162">2008</option>
            <option value="163">2007</option>
            <option value="164">2006</option>
            <option value="165">2005</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">            
        <select size="1" name="f_6" id="bs_6" class="form-control">
            <option value="">Тип двигателя</option>
            <option value="173">Бензин</option>
            <option value="174">Дизель</option>
            <option value="175">Гибрид</option>
            <option value="176">Электро</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">            
        <select size="1" name="f_6" id="bs_6" class="form-control">
            <option value="">Цена</option>
            <option value="173">По возрастанию</option>
            <option value="174">По убыванию</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">            
        <select size="1" name="f_6" id="bs_6" class="form-control">
            <option value="">Все</option>
            <option value="173">От магазинов</option>
            <option value="174">Частные</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">            
        <select size="1" name="f_6" id="bs_6" class="form-control">
            <option value="">Состаяние</option>
            <option value="173">Новое</option>
            <option value="174">Б/У</option>
        </select>
    </div>
    
    
    
    </div></div>
    <div class="text-right search-ajax-btn">
        <a href="/category/{{$category->id}}" class="gotomap btn btn-default def2 btn-block" title="Сбросить">Сбросить</a></a>
        <input type="submit" class="btn btn-primary btn-block" value="Показать">
    </div>
    </form></div></div>
    
    
    
    
    <div class="offerlist">
     
    @foreach($boards as $board)
        @if ($board->status_pub == 1)
            <div class="cl-line pos-rel"></div>
            <div id="message_30" class="offer bl-tb">
                
            <div class="offer-photo bl-cell al-top pos-rel">
            <div class="ov-h br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/storage/img/boards_images/{{$board->images[0]->name}}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <img alt="Диски колесные алюминиевые R17-20" src="/storage/img/boards_images/{{$board->images[0]->name}}"></div>
            <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> {{count($board->images)}} </span></div>  
            
            <div class="offer-title bl-cell al-top pos-rel">
            <h3><a class="f-m a-hov" title="Диски колесные алюминиевые R17-20" href="/board/{{$board->id}}">{{$board->title}}</a></h3>
            <div class="offer-location s13 f-l c-7">{{$board->user->name}}<br> Москва 
            <div class="offer-date"></div></div>
            <div class="magazin-l"><a class="btn btn-default s13" href="/shops/7-zapchasti-all.html" title="Запчасти ALL">{{$board->user->name}}</a></div>  
            </div>
            
            <div class="offer-price bl-cell al-top pos-rel text-right">
            <div class="price bl-inl al-top s16 f-m">
            <span class="currency">₽</span>{{number_format($board->price, 0, '', ' ')}}</div>
            <div class="offer-actions pos-abs">
            <span class="notepad ic-star" data-id="30" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
            </div></div>
            
            </div><!--/bl-tb offer-->
        @endif
    @endforeach
    
    
      
      
    </div><!--/offerlist-->
    <div class="pagination-bar bl-tb">  
        
    </div>
    <div class="promo-subscribe bl-tb hidden-xs" style="display: flex;">
        <div> <img src="/storage/img/cat/{{$category->img}}" alt="Автотранспорт"></div>
        <div class="promo-subscribe-text pull-left" style="padding: 5px 10px;">Получайте новые объявления<br>из категории Автотранспорт</div>
        <div style="padding: 5px 20px;"><a class="btn btn-primary s13 pull-right" href="/users/subscribe/">Подписаться</a></div>
    </div>  
    
    </div>
                    
    <div class="bl-cell al-top bl-right">
    <div class="sidebar_right pos-rel">    
    <div class="block-specials lateral-specials b-f br3">
      
    <div class="block-v pos-rel s15 f-m">VIP-объявления</div>
      
    <div class="bl-specials-offer-slider"><div class="specials-container ov-h"><div class="lSSlideOuter "><div class="lSSlideWrapper usingCss" style="transition-duration: 400ms; transition-timing-function: ease;"><ul class="specials-offer-slider lightSlider lsGrab lSSlide" style="width: 1416px; transform: translate3d(-944px, 0px, 0px); height: 216.4px; padding-bottom: 0%;"><li class="specials-offer pos-rel clone left" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>BRP Ski-Doo Summit 8...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span><span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>1 250 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li>
     
    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sale/12-prodaju-3-h-komnatnuju-kvartiru-80-kv.m.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Продаю 3-х комнатную квартиру, 80 кв.м." src="/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Продаю 3-х комнатную...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span><span class="notepad-fav"><span class="notepad ic-star" data-id="12" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>3 200 000</span>
    <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span></div>
    </li> 
    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Haval Jolion 2021" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Haval Jolion 2021</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 4</span><span class="notepad-fav"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <a href="/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip" data-placement="top" title="" class="magazin-b" data-original-title="АВИЛОН Ford Волгоградский">АВИЛОН Ford Волгоградский</a><div class="sp-now">
    <span class="s15"><span class="currency">₽</span>1 899 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li> 
    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Biznes/sale_and_buying/21-biznes-pod-kljuch-franshiza-studii-manikjura-nailmaker.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Бизнес под ключ/франшиза студии маникюра NailMaker" src="/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Бизнес под ключ/фран...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span><span class="notepad-fav"><span class="notepad ic-star" data-id="21" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span> 120 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li> 
    <li class="specials-offer pos-rel lslide active" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>BRP Ski-Doo Summit 8...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span><span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>1 250 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li><li class="specials-offer pos-rel clone right" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sale/12-prodaju-3-h-komnatnuju-kvartiru-80-kv.m.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Продаю 3-х комнатную квартиру, 80 кв.м." src="/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Продаю 3-х комнатную...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span><span class="notepad-fav"><span class="notepad ic-star" data-id="12" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>3 200 000</span>
    <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span></div>
    </li></ul><div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div></div></div></div>
     
    </div> 
      
    
    <div class="headerblock br3 b-f "><div class="headercontent"><p class="text-center"><a href="https://elite-board.org/dizain.html" target="_blank" title=""><img alt="" src="/images/cat/design.png"></a></p>
    </div></div></div></div>
    </div>
    </div></div>
    @endsection