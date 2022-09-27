@extends('layouts/'.$template)

@section('main_content')
<div id="main"><div class="container">  
    <ol class="breadcrumb s13 f-l bread-product">
        <li><a title="" href="/">Главная</a></li>  
        <li><a title="" href="/category/{{$board->id_category}}">Автотранспорт</a></li>
        <li><span>{{$board->title}}</span></li>
    </ol>  
       
    <div class="bl-tb container-tb">
    <div class="bl-cell al-top bl-center">
       
      
      
      
      
    
    
    <div class="product pos-rel">
       
    <div class="product_header bl-tb b-f">
      
    <div class="bl-cell al-top">
    <div class="s19 f-m"><h1>{{$board->title}}</h1></div>
    <div class="product_header_info">
     
    <div class="product_header_btn bl-inl al-mid"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="" data-original-title="Добавить в избранные"></span>
    <a class="print bl-inl al-mid bd-d3 br3 b-f5-h hidden-xs" data-toggle="tooltip" data-placement="top" title="" href="" onclick="go('/print/29'); return false;" data-original-title="Печать объявления"></a>
    <span class="bl-inl al-mid point" data-toggle="tooltip" data-placement="top" title="Пожаловаться на это объявление"><div data-toggle="modal" data-target="#abuse" class="abuse"></div></span></div>
    </div></div>
      
    <div class="bl-cell al-top text-right bl-cell-price">
    <div class="product_price"><span class="price-item s20 f-m"><span class="currency">₽</span>{{number_format($board->price, 0, '', ' ')}}</span></div>
    <div class="product_header_count c-7 s13"><span data-toggle="tooltip" data-placement="top" title="Добавлено 11.02.2022 в 16:51 – Будет удалено 18.09.2025 в 00:00" class="data">{{$board->created_at}}</span>   
    <span data-toggle="tooltip" data-placement="top" title="Кол-во просмотров объявления" class="views">0</span> <span>ID {{$board->id}}</span></div> 
    </div>
    </div><!--product_header-->
        
    <div class="product_block">
        
    <div class="product_block_header row">
        
    <div class="product_block_fotorama col-xs-12 col-sm-7 col-md-8 text-center">


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="ююююююю" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>




    {{-- <div class="fotorama_container product_fotorama pos-rel bl-inl al-top"><style>.fotorama1664236845229 .fotorama__nav--thumbs .fotorama__nav__frame{
    padding:2px;
    height:64px}
    .fotorama1664236845229 .fotorama__thumb-border{
    height:60px;
    border-width:2px;
    margin-top:2px}</style><div class="fotorama--hidden"></div><div class="fotorama fotorama1664236845229" data-nav="thumbs" data-fit="scaledown" data-thumbwidth="90" data-allowfullscreen="true" data-zoomtofit="false" data-width="100%" data-ratio="858/380" data-maxwidth="858"><div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls" style="width: 100%; min-width: 0px; max-width: 858px;"><div class="fotorama__stage" style="width: 666px; height: 295px;"><div class="fotorama__fullscreen-icon" tabindex="0" role="button"></div><div class="fotorama__stage__shaft" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 666.031px; margin-left: 0px;"><div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active" style="left: 0px;"><img src="/uploads/usr/0/tb_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" class="fotorama__img" style="width: 493.724px; height: 295px; left: 86.1536px; top: 0px;"></div><div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img" style="left: 668.031px;"><img src="/uploads/usr/0/tb_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp" class="fotorama__img" style="width: 393.333px; height: 295px; left: 136.349px; top: 0px;"></div></div><div class="fotorama__arr fotorama__arr--prev fotorama__arr--disabled" tabindex="-1" role="button" disabled="disabled"></div><div class="fotorama__arr fotorama__arr--next" tabindex="0" role="button"></div><div class="fotorama__video-close"></div></div><div class="fotorama__nav-wrap"><div class="fotorama__nav fotorama__nav--thumbs" style="width: 666.031px;"><div class="fotorama__nav__shaft" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);"><div class="fotorama__thumb-border" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 86px;"></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb fotorama__active" tabindex="0" role="button" style="width: 90px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" class="fotorama__img" style="width: 107.113px; height: 64px; left: -8.55649px; top: 0px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 90px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp" class="fotorama__img" style="width: 90px; height: 67.5px; left: 0px; top: -1.75px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 90px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_2.webp" class="fotorama__img" style="width: 90px; height: 67.5px; left: 0px; top: -1.75px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 90px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_3.webp" class="fotorama__img" style="width: 90px; height: 67.5px; left: 0px; top: -1.75px;"></div></div></div></div></div></div></div><span class="img-cover" style="background-image:url('/uploads/usr/0/tb_d57de3451f3ea83bbe97029c7ff300f6_35_3.webp');"></span>
    </div> --}}
    </div><!--product_block_fotorama-->
        
    <div class="product_block_sidebar col-xs-12 col-sm-5 col-md-4">
    <div class="product_block_user">
    <span class="user-avatar text-up text-center bl-inl al-top br100 c-f f-m" id="avatar">А</span>
    <div class="user-info"><a class="c-20 a-hov" data-toggle="tooltip" data-placement="top" title="Перейти в профиль" href="/userinfo/9/"><span class="user-info-name f-m s16" id="name">Анна</span></a><div class="product_region s13 c-7">{{$board->address}}</div></div></div>
    <div class="product_block_contacts"><a class="contact_modal btn btn-default def3 s15 c-20 bl-bl" href="/sendmail/?messageid=29&amp;userid=9" title="">Написать</a>
    <a class="btn-phone btn btn-primary s15 bl-bl" href="#" id="f_32_29"><span>Показать <span>Телефон</span>
    </span></a></div> 
    <div class="text-center"><div class="product-services bl-inl al-mid"><a class="premium_modal us-col bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=m&amp;message_id=29" data-toggle="tooltip" data-placement="top" title="Выделить цветом"></a>
    <a class="premium_modal us-top bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=r&amp;message_id=29" data-toggle="tooltip" data-placement="top" title="Топ-объявление"></a>
    <a class="premium_modal us-bl bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=b&amp;message_id=29" data-toggle="tooltip" data-placement="top" title="Vip-объявление"></a>
    </div></div> 
    </div><!--product_block_sidebar-->
    </div><!--product_block_header-->
        
    <div class="product_block_body">
    
    <div class="product_params"><div class="product_params_title s15 f-m">Параметры объявления</div><ul class="product_params_list row">
                   
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Марка:</span> <a class="c-20 a-hov" title="" href="/sort/?f_2=53">Haval</a></li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Год выпуска:</span> <a class="c-20 a-hov" title="" href="/sort/?f_4=329">2021</a></li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Тип кузова:</span> <a class="c-20 a-hov" title="" href="/sort/?f_5=169">Внедорожник</a></li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Тип двигателя:</span> <a class="c-20 a-hov" title="" href="/sort/?f_6=173">Бензин</a></li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Пробег:</span> <a class="c-20 a-hov" title="" href="/sort/?f_7=177">&lt; 5 000</a></li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">КПП:</span> <a class="c-20 a-hov" title="" href="/sort/?f_8=184">Автомат</a></li>               
                   
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Материал салона:</span> <a class="c-20 a-hov" title="" href="/sort/?f_10=191">Кожа</a></li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Цвет салона:</span> <a class="c-20 a-hov" title="" href="/sort/?f_11=194">Светлый</a></li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Торг:</span> 
        @if ($board->auction_status)
        <a class="c-20 a-hov" title="" href="/sort/?f_30=318">Возможен</a>
        @else
        <a class="c-20 a-hov" title="" href="/sort/?f_30=318">Не возможен</a>
        @endif
    </li>                  
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Обмен:</span> 
        @if ($board->exchange_status)
        <a class="c-20 a-hov" title="" href="/sort/?f_30=318">Возможен</a>
        @else
        <a class="c-20 a-hov" title="" href="/sort/?f_30=318">Не возможен</a>
        @endif
    </li>               
    <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">Место осмотра (адрес):</span> {{$board->address}}</li>               
    </ul>  
    {{-- <div class="product_shop"><a data-toggle="tooltip" data-placement="top" title="Магазин" class="btn btn-default text-left" href="/shops/6-avilon-ford-volgogradskij.html">АВИЛОН Ford Волгоградский</a></div></div>   --}}
      
    <div class="product_description"><div class="product_description_title s15 f-m">Описание продавца</div>
    <div class="product_description_text">{{$board->description}}  
    </div>  
    </div><!--product_description-->
      
    <div class="product_map"><div class="product_map_title s17 f-m">Местоположение на карте</div>
    <div id="map"><iframe scrolling="no" src="/yamaps/?field=f_34&amp;point=55.755798942755575,37.642572021484334,10&amp;message"></iframe></div>
    </div>  
      
    <div id="comments" class="blogs-comments-area text-center pos-rel">
      
    <div class="add-comment br3 b-f5"><span class="bl-inl al-top">Нет комментариев</span></div>
      
    <div class="blogs-comment-respond" id="respond">
      
    <div class="bl-inl" id="add-comment"><div class="comment-avtoris pos-abs" data-toggle="tooltip" data-placement="top" title="Оставлять комментарии могут только зарегистрированные пользователи!"></div>
    </div>
      
    
            
    </div>
    </div>  
      
    </div><!--product_block_body_container-->
    </div><!--product_block-->
      
      
      
      
    </div><!--product-->
    <iframe id="premium_iframe" src=""></iframe></div></div></div>
    <script type="text/javascript">var stringToColor=function(a){},name="Анна",letter=name.substr(0,1),elementAvatar=document.getElementById("avatar"),elementName=document.getElementById("name");elementName.innerHTML=name;elementAvatar.innerHTML=letter;</script>   
    <script type="text/javascript">function go(addr) {window.open(addr,"MyWin", "scrollbars=yes,menubar=yes,width=700,height=668");}</script>
    </div>
                    
    
    </div>
    </div></div>
    @endsection