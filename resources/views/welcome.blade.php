@extends('layouts.layout')

@section('title', 'My-Giro')


@section('content')
    <div class="container">
        <div class="wrapper_slider">

            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <div class="slider_content"><img class="image_slider" src="./images/security.png">
                        <p class="slider_content_text">Мы гарантируем вам кочество и целостность товара и доставки.</p>
                    </div>

                    <div class="text">Надежность</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <div class="slider_content"><img class="image_slider" src="./images/usability.png">
                        <p class="slider_content_text">Наши консультанты помогут с любыми вопросами и проблемами.</p>
                    </div>

                    <div class="text">Доступность</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <div class="slider_content"><img class="image_slider" src="./images/using.png">
                        <p class="slider_content_text">Здесь вас ждем удобство выбора и заказа товаров.</p>
                    </div>

                    <div class="text">Удобство</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" id="prew">&#10094;</a>
                <a class="next" id="next">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="content_info_products">
            <div class="card_info_products">
                <div class="img_wrapper_card_info img_wrapper_card_info-1">

                </div>
                <div class="text_info_card_products">
                    <p class="text_card">Выбирайте электросамокат, если: <br>

                        · вы будете ездить по неровному покрытию; <br>
                        · вы хотите ездить быстро; <br>
                        · вам нужно перемещаться на длинные дистанции; <br>
                        · вы не хотите долго учиться управлять устройством.</p>
                </div>
            </div>
            <div class="card_info_products">
                <div class="img_wrapper_card_info img_wrapper_card_info-2">

                </div>
                <div class="text_info_card_products">
                    <p class="text_card"> Выбирайте гироскутер, если: <br>

                        · вы будете ездить по ровной дороге; <br>
                        · вы хотите освоить новый навык; <br>
                        · вы хотите разнообразить свой досуг;</p>
                </div>
            </div>
            <div class="card_info_products">
                <div class="img_wrapper_card_info img_wrapper_card_info-3">

                </div>
                <div class="text_info_card_products">
                    <p class="text_card">
                        Выбирайте сигвей, если: <br>

                        · вы будете ездить по ровной дороге; <br>
                        · вы хотите освоить новый навык; <br>
                        · вы хотите ездить быстро; <br>
                        · вам нужно перемещаться на длинные дистанции.
                    </p>
                </div>
            </div>
        </div>
        <div class="filters">
            <div class="filter__variable-2 filter__variable">
                <div id="myBtnContainer" class="filter__variable-wrapper">
                    <div class="btn_filter" data-f="All"> Show all</div>
                    <div class="btn_filter" data-f="G"> Гироскутеры</div>
                    <div class="btn_filter" data-f="E"> Электросамокаты</div>
                    <div class="btn_filter" data-f="S"> Сигвеи</div>
                </div>
                <hr class="hr-line-filters">
                <div class="card__show">
                    <div class="filter__goods">
                        <div class="card__wrapper">
                            <div class="_product S">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRwpLs97MV2NigUNBGa7amQ08aZrbFXnHkvLzRyvJgpw1-ebk0FXtso2GRzavyLmmp65i79IBVY_6gV_kXbtCLRl5IXbEMbsJ547tuuU-ygfU-kk_gpQV-C&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">MiniRobot MiniPro PRO</div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">2 300 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_product G">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQr2-Jo0kBUj_R3olQy47ojFpxcTF_NAEtkqA6Z240uLk9N5PMhDa3N9zTinAKpcF3mWbzdT1uSSY2yIRnsFfz0NNV24GBgMBTxv9-vkTkY1gDJ_cT-bj0PxA&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">Smart Balance PRO</div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">890 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_product E">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQxoQbqPKaks3CVePIl2fj55yKtCcuEC8jTeq2USTtG61kYfIRVnf6-LB8n_pmjuMa6SZBdZA9MlxYVQXMatimtmfX2qHr8LgCk0lvsbPvZgV10gZ9v2ovcYw&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">Elbike MOPAI CD12L-C</div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">7 000 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_product G">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTdyOemFxvOTT6HnwE7qTTFdMw3cIYCHe-R0tPcecrqD5WupCIL2AlQNc5itmQk03CwpP0mvhgHKtQ47Ky9Fpau-xiRsX3UNzoELgAKtJpLsCKytDIbkV85SQ&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">Smart Balance SUV 10</div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">1 100 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_product G">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTgiGdKPGSrjW_0IsrWRYGJxcjGvsJvOpF-tiPVSAdCubh-yK-F40-_0J3LzLmenQvKTTFd1-woyDcIh5kVIzk1SVtDpecPWQxcjuIGTinlP1wU-urtRg8d&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">Smart Balance PRO </div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">300 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_product S">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcR3HPfzvKZND2I7sTpGu0Z7Og2Sqae1bjqPvxhu6-IUiEDsqLMtvIPSzXaKfnu4UpypKMdxrQt_15eYkr4XFONwYoDbemjKsHif5oZB1DVt4QffAGoTxnfQ&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">Mini Robot Pro 36V</div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">1 900 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_product E">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSAg4leUuY_uRP66J7PTnA97nRKph8QP8-YJKeKcgrcopMsQfGa4NFh6J61jl9dBZWdyGaofOQt70MrA2Xl7KfGKMzI2HgYqg&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">Электросамокат X pro</div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">800 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_product S">
                                <div class="card">
                                    <a href="/one-goods">
                                        <div class="card__favorite">
                                            <img src="" alt="">
                                        </div>
                                        <div class="card__content">
                                            <div class="card__goods-img">
                                                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSmLDq6lgGNt52j7u0hA6S6lrjjiWI3EU-CEHu-Gpq87ZeTXAqP8XcBAu4_xlIdQarR1g8hYLqfmFMIVo7VXkdyvC_cfzE0tnuSeEt-V9WGlgeJU2IcnRxn&usqp=CAE"
                                                    alt="">
                                            </div>
                                            <div class="card__goods-info">Акция! <span>Новинки</span></div>
                                            <div class="card__goods-name">Мини-сигвей MiniRobot</div>
                                            <hr class="card__line">
                                            <div class="card__goods-prise">
                                                <span class="card_price">3 100 $</span>
                                                <hr class="hr-line">
                                                <span>шт.</span>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cards__hub">
                        <div class="more__goods"><a href="">Показать еще товары</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blok_info">
            <div class="box">
                <p>Вы можете обратиться в поддержку, если не нашли нужного товара или его нет на складе, наши консультанты
                    подскажут вам, когда его можно будет заказать и будет ли он ещё привозиться в наш магазин. <br> <br> С
                    радостью
                    поможем
                    вам в любых вопросах и интересующих вас вещах</p>
            </div>
        </div>


    @endsection
