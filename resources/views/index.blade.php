<!DOCTYPE html>
<html>
@extends('layout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn And Read</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">    
            <div class="header__content">
                <div class="header__content-left">
                    <div class="header__logo">
                        <img src="images/logo1.png"alt="">
                    </div>
                    <nav class="nav">
                        <ul class="nav__items">
                            <li class="nav__item" onclick="news()"><a href="#">{{__('lang.h1')}}</a></li>
                            <li class="nav__item" onclick="services()"><a href="#">{{__('lang.h2')}}</a></li>
                            <li class="nav__item" onclick="stat()"><a href="#">{{__('lang.h3')}}</a></li>
                            <li class="nav__item" onclick="scrolltoTop()"><a href="#">{{__('lang.h4')}}</a></li>
                            <li class="nav__item" onclick="about()"><a href="#">{{__('lang.h5')}}</a></li>
                            <li class="nav__item" onclick="contacts()"><a href="#">{{__('lang.h6')}}</a></li>
                        </ul>
                    </nav>
                    <form class="header__form" action="mail.php" method="POST" class="form">
                        <div class="header__form-question">
                        {{__('lang.ques')}}
                        </div>
                        <div class="header__form-text">
                        {{__('lang.q1')}}
                        </div>
                        <p><input class="header__form-input" type="text" name="user_name" placeholder="{{__('lang.name')}}"></p>
                        <p><input class="header__form-input" type="text" name="user_phone" placeholder="{{__('lang.telephone')}}"></p>
                        <button type="submit" class="header__form-btn">
                        {{__('lang.send')}}
                        </button>   
                    </form>
                </div>
                <div class="header__content-right">
                    <div class="header__content-right-top">
                        <div class="header__text">
                        {{__('lang.header')}} 
                        </div>
                        <div class="header__email">
                            <img src="images/mail.svg" alt="">
                            <span>learnandread@gmail.com</span>
                        </div>
                        <div class="header__phone">
                            <img src="images/phone.svg" alt="">
                            <a href="tel:87784989606">+7 (778) 498 86 08</a>
                        </div>
                    </div>
                    <div class="header__content-right-wrapper">
                        <h1 class="header__title">
                            Learn And Read
                        </h1>
                    </div>
                </div>
                <a id="button"></a>
            </div>
        </div>
    </header>

    <section class="services">
        <div class="container">
            <div class="card" id="card-1">
                <div class="card__wrapper">
                    <div class="card__wrapper-left">
                        <div class="card__wrapper-photo1">
                            <div class="card__img-overlay-green">
        
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper-right">
                        <div> 
                            <img class="close" id="close1" src="images/close.svg" alt="">
                        </div>
                        <div class="card__wrapper-title">
                            <img src="images/services3.svg" alt="">
                            <p>{{__('lang.card1')}}</p>
                        </div>
                        <div class="card__wrapper-advantages">
                            <p><span>✓</span>{{__('lang.card1.1')}}</p>
                            <p><span>✓</span> {{__('lang.card1.2')}}</p>
                            <p><span>✓</span> {{__('lang.card1.3')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="card-4">
                <div class="card__wrapper">
                    <div class="card__wrapper-left">
                        <div class="card__wrapper-photo4">
                            <div class="card__img-overlay-grey">
        
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper-right">
                        <div>
                            <img class="close" id="close2" src="images/close.svg" alt="">
                        </div>
                        <div class="card__wrapper-title">
                            <img src="images/cart-4-logo.svg" alt="">
                            <p>{{__('lang.card2')}}</p>
                        </div>
                        <div class="card__wrapper-advantages">
                            <p><span>✓</span> {{__('lang.card2.1')}}</p>
                            <p><span>✓</span> {{__('lang.card2.2')}}</p>
                            <p><span>✓</span> {{__('lang.card2.3')}}</p>
                            <p><span>✓</span> {{__('lang.card2.4')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="card-3">
                <div class="card__wrapper">
                    <div class="card__wrapper-left">
                        <div class="card__wrapper-photo3">
                            <div class="card__img-overlay-grey">
                                
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper-right">
                        <div>
                            <img class="close" id="close3" src="images/close.svg" alt="">
                        </div>
                        <div class="card__wrapper-title">
                            <img src="images/services2.svg" alt="">
                            <p>{{__('lang.card3')}}</p>
                        </div>
                        <div class="card__wrapper-advantages">
                            <p><span>✓</span> {{__('lang.card3.1')}}</p>
                            <p><span>✓</span> {{__('lang.card3.2')}}</p>
                            <p><span>✓</span> {{__('lang.card3.3')}}</p>
                            <p><span>✓</span> {{__('lang.card3.4')}}</p>
                            <p><span>✓</span> {{__('lang.card3.5')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="card-2">
                <div class="card__wrapper">
                    <div class="card__wrapper-left">
                        <div class="card__wrapper-photo2">
                            <div class="card__img-overlay-green">
        
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper-right">
                        <div>
                            <img class="close" id="close4" src="images/close.svg" alt="">
                        </div>
                        <div class="card__wrapper-title">
                            <img src="images/services1.svg" alt="">
                            <p>{{__('lang.card4')}}</p>
                        </div>
                        <div class="card__wrapper-advantages">
                            <p><span>✓</span>{{__('lang.card4.1')}}</p>
                            <p><span>✓</span> {{__('lang.card4.2')}}</p>
                            <p><span>✓</span> {{__('lang.card4.3')}}</p>
                            <p><span>✓</span>{{__('lang.card4.4')}}</p>
                            <p><span>✓</span> {{__('lang.card4.5')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services__content">
                <div class="services__title-block">
                    <div class="services__title">
                        <p>{{__('lang.h2')}}</p>
                    </div>
                    <div class="vl"></div>
                </div>
            <div class="services__items">
                <div class="services__item services__item-1" onclick="openbox1()">
                    <div    class="img-overlay-green">
                        <div class="services__photo">
                          <img src="images/services1.svg" alt="">
                        </div>
                        <div class="services__text">
                        {{__('lang.card4')}} 
                        </div>
                    </div>
                </div>
                <div class="services__item services__item-2" onclick="openbox2()">
                    <div class="img-overlay-grey">
                        <div class="services__photo">
                          <img src="images/services2.svg" alt="">
                        </div>
                        <div class="services__text">
                        {{__('lang.card3')}}
                        </div>
                    </div>
                </div>
                <div class="services__item services__item-3" onclick="openbox3()">
                    <div class="img-overlay-green">
                        <div class="services__photo">
                          <img src="images/services3.svg" alt="">
                        </div>
                        <div class="services__text">
                        {{__('lang.card1')}}
                        </div>
                    </div>
                </div>
                <div class="services__item services__item-4" onclick="openbox4()">
                    <div class="img-overlay-grey">
                        <div class="services__photo">
                          <img src="images/services4.svg" alt="">
                        </div>
                        <div class="services__text">
                        {{__('lang.card2')}}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="ratings">
        <div class="container">
            <div class="ratings__items">
                <div class="rating__item rating__item-grey">
                    <div class="rating__number rating__number-green">
                        30
                    </div>
                    <div class="rating__text rating__text-black">
                    {{__('lang.p1')}}
                    </div>
                </div>
                <div class="rating__item rating__item-green">
                    <div class="rating__number rating__number-white">
                        8
                    </div>
                    <div class="rating__text rating__text-white">
                    {{__('lang.p2')}}
                    </div>
                </div>
                <div class="rating__item rating__item-grey">
                    <div class="rating__number rating__number-green">
                        5000+
                    </div>
                    <div class="rating__text rating__text-black">
                    {{__('lang.p3')}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="company">
        <div class="container">
            <div class="company__title-block">
                <div class="company__title">
                    <p>{{__('lang.h4')}}</p>
                </div>
                <hr align="right" width="566" size="1" color="#2B2A29" class="hr"/>
            </div>
            <div class="company__items">
                <img src="images/book.jpg" alt="">
                <img src="images/book2.jpg" alt="">
                <img src="images/book3.jpg" alt="">
                <img src="images/book4.jpg" alt="">
                <img src="images/book5.jpg" alt="">
                <img src="images/book6.jpg" alt="">
                <img src="images/book7.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about__title-block">
                <div class="about__title">
                    <p>   {{__('lang.h5')}}</p>
                </div>
                <div class="hl"></div>
            </div>
            <div class="about__content">
                <div class="about__content-left">
                    <p>{{__('lang.p4')}}</p>
                    <p>{{__('lang.p5')}}</p>
                </div>
                <div class="about__content-right">
                    <img src="images/books.jpg" style="max-width:600px" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="news__title-block">
                <div class="news__title">
                    <p class="news__title-text">{{__('lang.h1')}}</p>
                </div>
                <hr align="left" width="599" size="1" color="#2B2A29" class="hr3"/>
            </div>
            <div class="news__items">
                <div class="news__item">
                    <div class="news__img">
                        <img src="https://images.eksmo.ru/upload/iblock/828/coffee_720.jpg" style="max-width:265px" alt="">
                    </div>
                    <div class="news__text">
                        <p class="news__text-1">{{__('lang.p6')}}</p>
                        <p class="news__text-2">{{__('lang.p7')}}

                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__img">
                        <img src="https://images.eksmo.ru/upload/iblock/448/petrushevskaya_720_min.jpg" alt="">
                    </div>
                    <div class="news__text">
                        <p class="news__text-1">{{__('lang.p8')}}</p>
                        <p class="news__text-2">{{__('lang.p9')}}</p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__img">
                        <img src="https://images.eksmo.ru/upload/iblock/097/pic_l_min.jpg" alt="">
                    </div>
                    <div class="news__text">
                        <p class="news__text-1">{{__('lang.p10')}}</p>
                        <p class="news__text-2">{{__('lang.p11')}}
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__img">
                        <img src="https://images.eksmo.ru/upload/iblock/c14/720_min.jpg" alt="">
                    </div>
                    <div class="news__text">
                        <p class="news__text-1">{{__('lang.p12')}}
                        </p>
                        <p class="news__text-2">{{__('lang.p13')}}</p>
                    </div>
                </div>
            </div>
            <div class="news__btn">
                <a href="https://eksmo.ru/news/">{{__('lang.more')}}</a>
            </div>
        </div>
    </section>
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.0831306929267!2d76.66686551532949!3d43.20774568913873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38834f7675d8a6c3%3A0x7b7d14aec270c056!2sSDU!5e0!3m2!1sen!2skz!4v1607261780122!5m2!1sen!2skz" width="100%" height="330" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__items">
                <div class="footer__first-item">
                    <img src="images/footer_logo.png" alt="">
                    <div class="footer__vl"></div>
                </div>
                <div class="footer__second-item">
                    <nav class="footer__nav">
                        <ul>
                            <li onclick="main()">{{__('lang.main')}}</li>
                            <li onclick="services()">{{__('lang.h2')}}</li>
                            <li onclick="stat()">{{__('lang.h3')}}</li>
                        </ul>
                    </nav>
                    <div class="footer__vl2"></div>
                </div>
                <div class="footer__third-item">
                    <nav class="footer__nav">
                        <ul>
                            <li onclick="news()">{{__('lang.h1')}}</li>
                            <li onclick="about()">{{__('lang.h5')}}</li>
                            <li onclick="scrolltoTop()">{{__('lang.h4')}}</li>
                        </ul>
                    </nav> 
                    <div class="footer__vl2"></div> 
                </div>
                <div class="footer__forth-item">
                    <div class="footer__forth-title">
                    {{__('lang.con')}}
                    </div>
                    <div class="footer__address">
                    {{__('lang.add')}}
                    </div>
                    <div class="footer__phone">
                        +7 (778) 498 86 06
                    </div>
                    <div class="footer__email">
                        learnandread@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
@endsection
</html> 
