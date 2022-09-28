@extends('layouts/'.$template)

@section('main_content')
<div id="main">
    <div class="container page-add text-center">


        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">



                <h1>Добавить объявление</h1>

                @if(session('success'))

                <div class="alert alert-success alert-dismissible show" role="alert">
                    {{ session('success') }}
                </div>

                @endif

                @if(session('error'))

                <div class="alert alert-danger alert-dismissible show" role="alert">
                    {{ session('error') }}
                </div>

                @endif

                @if($errors->any())

                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible show" role="alert">
                    {{ $error }}
                </div>
                @endforeach

                @endif


                <script>
                    var form_id = 'bdb13447f2879f7923f55d84f36ca29b';
                </script>

                <script>


                </script>
                <div class="text-center">
                    <div class="bl-inl text-left form-add">





                        <form action="/add_board_handle" method="post" id="main_form">
                            @csrf
                            <!-- <input type="hidden" name="form_id" id="form_id" value="bdb13447f2879f7923f55d84f36ca29b"><input type="hidden" name="add_cat" id="add_cat" value=""><span class="visible-xs item-tooltip heading-pager last"></span>
                            <input type="hidden" name="add_region" id="add_region" value="3"><input name="post_filter" type="hidden" value="false"> -->

                            <div class="section-title f-m s15">Личные данные</div>
                            <div class="bl-tb add-tb pos-rel" style="margin-bottom: 15px">
                                <div class="bl-celln bl-cell al-mid"><label for="name">Ваше имя</label></div>
                                <div class="bl-cellf bl-cell al-top" style="width: 400px"><input name="name" value="" class="form-control" type="text">
                                    <span class="icon-info" data-original-title="Представьтесь, пожалуйста" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>

                            <div class="bl-tb add-tb pos-rel">
                                <div class="bl-celln bl-cell al-mid"><label for="email">Ваш e-mail</label></div>
                                <div class="bl-cellf bl-cell al-top" style="width: 400px"><input name="email" value="" class="form-control" type="email">
                                    <span class="icon-info" data-original-title="Будет использоваться в качестве логина для входа в систему На этот адрес будут приходить ответы на Ваше объявление. Адрес будет защищён от спам-ботов." data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>

                            <!-- <div class="bl-tb add-tb pos-rel">
                                <div class="bl-celln bl-cell al-top"><label for="password1">Пароль</label></div>
                                <div class="bl-cellf bl-cell al-top">
                                    <div class="pos-rel"><input name="password1" id="password1" value="" class="form-control show-pas1" required="" type="password"><span class="masked1 bl-bl pos-abs point"></span></div>
                                    <div class="pos-rel"><input name="password2" id="password2" value="" class="form-control password2 show-pas2" placeholder="Повторите пароль" required="" type="password" style="display:none;"><span class="masked2 bl-bl pos-abs point"></span></div>
                                    <div class="alert alert-success text-center form-alert" style="display: none;" id="password_success">Пароли совпали!</div>
                                    <div class="alert alert-warning text-center form-alert" style="display: none;" id="password_warning">Пароли не совпадают!</div>
                                    <div class="alert alert-info form-alert" style="display: none;" id="password_info">Пароль слишком короткий!</div>
                                    <span class="icon-info" data-original-title="Укажите пароль для регистрации, не меньше 6-ти символов" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div> -->

                            <div class="section-title f-m s15">Размещение объявления</div>
                            <div class="bl-tb add-tb pos-rel" style="margin-bottom: 15px">
                                <div class="bl-celln bl-cell al-mid"><label class="control-label" for="title">Заголовок объявления</label></div>
                                <div class="bl-cellf bl-cell al-top " style="width: 400px"><input value="" maxlength="100" name="title" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters" type="text">
                                    <span class="icon-info" data-original-title="Сформулируете кратко основную тему сообщения" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>
                            <div class="bl-tb add-tb pos-rel" style="margin-bottom: 15px">
                                <div class="bl-celln bl-cell al-mid"><label class="control-label" for="title">Цена</label></div>
                                <div class="bl-cellf bl-cell al-top " style="width: 400px;"><input value="" maxlength="100" name="price" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters" type="number">
                                    <span class="icon-info" data-original-title="Сформулируете кратко основную тему сообщения" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>
                            <div class="bl-tb add-tb pos-rel" style="margin-bottom: 15px">
                                <div class="bl-celln bl-cell al-mid"><label class="control-label" for="title">Адрес</label></div>
                                <div class="bl-cellf bl-cell al-top " style="width: 400px;"><input value="" maxlength="100" name="address" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters" type="text">
                                    <span class="icon-info" data-original-title="Сформулируете кратко основную тему сообщения" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>

                            <!-- <div class="bl-tb add-tb pos-rel">
                                <div class="bl-celln bl-cell al-mid"><label for="timing">Срок публикации</label></div>
                                <div class="bl-cellf bl-cell al-top"><select size="1" name="timing" class="form-control" required="">
                                        <option>[ Ваш выбор ]</option>
                                        <option value="11">1 неделя</option>
                                        <option value="10">1 месяц</option>
                                        <option value="9">1 год</option>
                                    </select>
                                    <span class="icon-info" data-original-title="Выберите срок размещения объявления. Если объявление не потеряет своей	актуальности, Вы сможете продлить его размещение до окончания этого срока." data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div> -->
                            <!-- <div class="bl-tb add-tb pos-rel multiselect_cont">
                                <div class="bl-celln bl-cell al-top"><label>Выберите регион</label></div>
                                <div class="bl-cellf bl-cell al-top">
                                    <div class="multiselect" data-action="" data-name="region" data-default="3">
                                        <p class="text-info">Москва <a class="btn btn-warning btn-xs" href="#">Изменить</a></p>
                                    </div>
                                    <div class="alert alert-success text-center form-alert" id="alert_region_success" style="display: none;">[ Выбрано ]</div>
                                    <div class="alert alert-warning text-center form-alert" id="alert_region_warning" style="display: none;">Продолжите выбор</div>
                                    <span class="icon-info" data-original-title="Выберите регион, к которому относится Ваше объявление" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div> -->

                            <div class="bl-tb add-tb pos-rel multiselect_cont">
                                <div class="bl-celln bl-cell al-top" style="margin-bottom: 15px"><label>Выберите рубрику</label></div>
                                <div class="bl-cellf bl-cell al-top" style="width: 400px;">
                                    <div class="multiselect" data-action="load" data-name="cat" data-default="">
                                        <div><select class="form-control" name="category" size="1">
                                                <option value="">[ Ваш выбор ]</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                @endforeach
                                            </select></div>
                                    </div>
                                    <!-- <div class="alert alert-success text-center form-alert" id="alert_cat_success" style="display: none;">[ Выбрано ]</div>
                                    <div class="alert alert-warning text-center form-alert" id="alert_cat_warning" style="display: none;">Продолжите выбор</div> -->
                                    <span class="icon-info" data-original-title="Выберите категорию, к которой относится Ваше объявление" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>

                            <div id="fields"></div>

                            <div class="add-tb pos-rel">
                                <div class="section-title_2 f-m s15">Описание объявления</div>
                                <div class="text_field bl-cellf pos-rel">
                                    <textarea maxlength="2000" class="form-control calcletters" name="description" rows="5"></textarea>
                                    <span class="icon-info" data-original-title="Максимум символов в сообщении: 2000" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>

                            <!-- <div class="add-tb">
                                <div class="section-title_2 f-m s15">Теги быстрого поиска</div>
                                <div class="pos-rel tag-ic">
                                    <div class="bl-cellf"><input name="tagsinput" type="text" value="" id="tagsinput" class="form-control"></div>
                                    <div id="tag_block"></div>
                                    <span class="icon-info" data-original-title="Введите через запятую ключевые слова соответствующие тематике Вашего объявления или выберите из списка ниже. Вы можете использовать до 10 ключевых слов или словосочетаний. Длина каждого слова или словосочетания не должна превышать 30 символов." data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div> -->


                            <!-- <div style="background:#f3f4f4;padding:10px;margin:21px 0 0 0;">В демо-версии шаблона подача объявлений для неавторизованных пользователей отключена.</div> -->



                            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Добавить объявление</button>
                        </form>

                    </div>
                </div>
                <link href="/templates/easy/style.css " rel="stylesheet">
            </div>

            <div class="bl-cell al-top bl-right">
                <div class="sidebar_right pos-rel">
                    <div class="headerblock br3 b-f ">
                        <div class="headercontent">
                            <div class="bl-ad1 pos-rel br3">
                                <div class="bl-ad1-tit s18 f-m text-up">Как продать быстрее</div>

                                <ul class="bl-ad1-cont s13">
                                    <li>Указывайте разумную цену</li>
                                    <li>Добавьте фотографии</li>
                                    <li>Добавьте видео</li>
                                    <li>Подробно опишите товар</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection