@extends('layouts/'.$template)

@section('main_content')


<div id="main" style="width: 100vw"><div class="container">  
    <ol class="breadcrumb s13 f-l bread-product">
        <li><a title="" href="/">Главная</a></li>  
        <li><a title="" href="/category/{{$board->id_category}}">{{$board->category->name}}</a></li>
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


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="margin: 10px 0">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              @if (count($board->images) > 1)
                  @for ($i = 1; $i < count($board->images); $i++)
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" aria-label="Slide {{$i+1}}"></button>
                  @endfor
              @endif
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div style="width: 100%; height: 50vh; background: black; overflow: hidden; display: flex; justify-content: space-between;">
                <img src="/storage/img/boards_images/{{$board->images[0]->name}}" class="d-block" alt="..." style="margin: 0 auto; height: 100%">
              </div>
              </div>
              @if (count($board->images) > 1)
                @for ($i = 1; $i < count($board->images); $i++)
                  <div class="carousel-item">
                    <div style="width: 100%; height: 50vh; background: black; overflow: hidden; display: flex; justify-content: space-between;">
                    <img src="/storage/img/boards_images/{{$board->images[$i]->name}}" class="d-block " alt="..." style="margin: 0 auto; height: 100%">
                    </div>
                  </div>
                @endfor
              @endif
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
    </div><!--product_block_fotorama-->
        
    <div class="product_block_sidebar col-xs-12 col-sm-5 col-md-4">
    <div class="product_block_user">
    <span class="user-avatar text-up text-center bl-inl al-top br100 c-f f-m" id="avatar">{{$board->user->name}}</span>
    <div class="user-info"><a class="c-20 a-hov" data-toggle="tooltip" data-placement="top" title="Перейти в профиль" href="/userinfo/9/"><span class="user-info-name f-m s16">{{$board->user->name}}</span></a><div class="product_region s13 c-7">{{$board->address}}</div></div></div>
    <div class="product_block_contacts"><a class="contact_modal btn btn-success def3 s15 c-20 bl-bl" href="/sendmail/?messageid=29&amp;userid=9" title="">Написать</a>
      <br>


      <div class="btn-group" style="width: 100%">
        <button type="button" class="contact_modal btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%">
          Показать телефон
        </button>
        <ul class="dropdown-menu" style="width: 100%">
          <li style="width: 100%"><span class="dropdown-item">{{$board->user->phone_number}}</span></li>
        </ul>
      </div>



    </span></a></div> 
    <div class="text-center"><div class="product-services bl-inl al-mid"><a class="premium_modal us-col bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=m&amp;message_id=29" data-toggle="tooltip" data-placement="top" title="Выделить цветом"></a>
    <a class="premium_modal us-top bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=r&amp;message_id=29" data-toggle="tooltip" data-placement="top" title="Топ-объявление"></a>
    <a class="premium_modal us-bl bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=b&amp;message_id=29" data-toggle="tooltip" data-placement="top" title="Vip-объявление"></a>
    </div></div> 
    </div><!--product_block_sidebar-->
    </div><!--product_block_header-->
        
    <div class="product_block_body">
    
    <div class="product_params"><div class="product_params_title s15 f-m">Параметры объявления</div><ul class="product_params_list row">
    @foreach ($board->parameters as $item)
        <li class="col-xs-12 col-sm-6 col-md-6"><span class="f-l">{{$item->name}}:</span> <span class="c-20" style="color: black;" title="">{{$item->value}}</span></li>    
    @endforeach           
           
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
      <br>
    <div class="product_description"><div class="product_description_title s15 f-m">Описание продавца</div>
    <div class="product_description_text">{{$board->description}}  
    </div>  
    </div><!--product_description-->
    <br>
    <div class="product_description"><div class="product_description_title s15 f-m">Местоположение на карте</div>
    <div id="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaca98dfe90a61fe7fddc93490aff46e975cf7f0413ad756103623441fc0f9f17&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script></div>
      
    
            
    </div>
    </div>  
      
    </div><!--product_block_body_container-->
    </div><!--product_block-->
      
      
      
      
    </div><!--product-->
    </div></div></div>
    <script type="text/javascript">function go(addr) {window.open(addr,"MyWin", "scrollbars=yes,menubar=yes,width=700,height=668");}</script>
    </div>
                    
    
    </div>
    </div></div>
    @endsection