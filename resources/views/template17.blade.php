<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('components.header')

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/EedZsKg.png">
    <link rel="manifest" href="https://preview.iwedding.info/templates/template19/images/fav_touch_icons/manifest.json">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&amp;family=Oooh+Baby&amp;family=Bellota+Text&amp;display=swap" rel="stylesheet">

    <link href="{{asset('template17/css/bootstrap.min.css?v=20240713')}}" rel="stylesheet" />
    <link href="{{asset('template17/css/libs.css?v=20240713')}}" rel="stylesheet">

    <link href="{{asset('template17/css/fontawesome-all.min.css?v=20240713')}}" rel="stylesheet" />
    <!--    <link href="https://preview.iwedding.info/templates/template19/css/fontawesome-all.min.css?v=20240713" rel="stylesheet" />-->
    <link href="{{asset('template17/css/neela-icon-set.css?v=20240713')}}" rel="stylesheet" />
    <link href="{{asset('template17/css/owl.carousel.min.css?v=20240713')}}" rel="stylesheet" />
    <link href="{{asset('template17/css/style.css?v=20240713')}}" rel="stylesheet" />
    <link href="{{asset('template17/css/calendar.css?v=20240713')}}" rel="stylesheet">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K9L0ZFE1PJ"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>
</head>
<script type="text/javascript">
    var photoGalleries = [];
</script>
<body>

<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="loading-heart">
        <svg viewBox="0 0 512 512" width="100">
            <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
        </svg>
        <div class="preloader-title">
            {{$logo1}}<br>
            <small>&</small><br>
            {{$logo2}}
        </div>
    </div>
</div>
<!-- END PRELOADER -->


<!-- BEGIN WRAPPER -->
<div id="wrapper">

    <!-- BEGIN HEADER -->
    <header id="header">
        <div class="nav-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="#hero" class="nav-logo d-flex align-items-center h-100"><h1 style="font-size:25px">{{$logo1}}<span class="main-color" ><i class="fa fa-heart" style="margin:5px 5px 5px 10px;" ></i></span>{{$logo2}}</h1></a>

                        <!-- BEGIN MAIN MENU -->
                        <nav class="navbar">

                            <ul class="nav navbar-nav">
                                <li><a href="#couple">{{$custom['menu_cap_doi'] ?? 'Cặp đôi' }}</a></li>

                                @if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
                                <li><a href="#story">{{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}</a></li>
                                @endif

                                @if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
                                <li><a href="#bridesmaids">{{$custom['menu_phu_dau_phu_re'] ?? 'Phù dâu & Phù rể' }}</a></li>
                                @endif

                                @if(isset($websiteInfo['album']) && $websiteInfo['album'])
                                <li><a href="#gallery">{{$custom['menu_album_hinh_cuoi'] ?? 'Album Hình cưới' }}</a></li>
                                @endif

                                @if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
                                <li><a href="#events">{{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}</a></li>
                                @endif

                                @if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
                                <li><a href="#rsvp">{{$custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}</a></li>
                                @endif

                                <li><a href="#donate">{{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}</a></li>
                            </ul>

                            <button id="nav-mobile-btn"><i class="fas fa-bars"></i></button><!-- Mobile menu button -->
                        </nav>
                        <!-- END MAIN MENU -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->


    <!-- BEGIN HERO SECTION -->
    <section id="hero" class="bg-slideshow section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="hero-wrapper v-center">
                        <h2 data-animation-direction="fade" data-animation-delay="600">Save the Date</h2>

                        <h1 class="hero-title light ">
                            <span class="d-block d-sm-inline" data-animation-direction="from-right" data-animation-delay="300">{{$couple['ten_chu_re_ngan_gon'] ?? 'Nguyễn Văn'}}</span>
                            <small class="d-block d-sm-inline" data-animation-direction="from-top" data-animation-delay="300">&</small>
                            <span class="d-block d-sm-inline" data-animation-direction="from-left" data-animation-delay="300">{{$couple['ten_co_dau_ngan_gon'] ?? 'Vũ Hoài'}}</span>
                        </h1>

                        @if (isset($websiteInfo['ngay_cuoi']))
                            <div class="hero-subtitle light" data-animation-direction="fade"
                             data-animation-delay="1000">
                                {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->day}} Tháng {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->month}} {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->year}}</div>
                        @else
                            <div class="hero-subtitle light" data-animation-direction="fade"
                                 data-animation-delay="1000">04 Tháng 4 2024</div>
                        @endif

                        <div data-animation-direction="fade" data-animation-delay="1000">
                            <a href="#" class="btn btn-light scrollto">Ngày Hạnh Phúc</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->


    <!-- BEGIN ABOUT US SECTION -->
    <section id="couple">
        <div class="container">
            <div class="row about-elems-wrapper">
                <div class="element col-md-6 col-xl-4 offset-xl-2" data-animation-direction="from-left"
                     data-animation-delay="300">
                    <div class="image">
                        <img src="{{ $couple['anh_chu_re'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/3b48bc6125ce6d186297a3e90a11085e.jpeg'}}" alt="" width="600" height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>{{$couple['ten_chu_re'] ?? 'Hoàng Kiến Văn'}}<small>The Groom</small></h3>
                                <p>{{substr($couple['gioi_thieu_chu_re'] ?? '', 0, 100)}}...
                                    <a class="button-see"
                                       data-src="{{ $couple['anh_chu_re'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/3b48bc6125ce6d186297a3e90a11085e.jpeg'}}"
                                       data-content="{{$couple['gioi_thieu_chu_re'] ?? ''}}"
                                       data-instagram="https://instagram.com"
                                       data-twitter="https://twitter.com"
                                       data-facebook="https://facebook.com"
                                       data-name="{{$couple['ten_chu_re'] ?? 'Hoàng Kiến Văn'}}"
                                       style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i>
                                    </a>
                                </p>
                                <ul class="sn-icons">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-about-us" data-animation-direction="fade" data-animation-delay="500">
                    <i class="icon-two-hearts"></i>
                </div>

                <div class="element col-md-6 col-xl-4" data-animation-direction="from-right"
                     data-animation-delay="400">
                    <div class="image">
                        <img src="{{ $couple['anh_co_dau'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/59b631f29bfb9f7cd20437d27ddbe4db.jpeg'}}" alt="" width="600" height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>{{$couple['ten_co_dau'] ?? 'Ngô Việt Hoài'}}<small>The Bride</small></h3>
                                <p>{{substr($couple['gioi_thieu_co_dau'] ?? '', 0, 100)}}...
                                    <a class="button-see"
                                       data-src="{{$couple['anh_co_dau'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/59b631f29bfb9f7cd20437d27ddbe4db.jpeg'}}"
                                       data-content="{{$couple['gioi_thieu_co_dau']}}"
                                       data-instagram="https://instagram.com" data-twitter="https://twitter.com"
                                       data-facebook="https://facebook.com"
                                       data-name="{{$couple['ten_co_dau'] ?? 'Ngô Việt Hoài'}}"
                                       style="font-size:14px;cursor: pointer">
                                        Xem thêm
                                        <i class="bi bi-arrow-down-short"></i>
                                    </a>
                                </p>
                                <ul class="sn-icons">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="about-us-desc col-lg-8 offset-lg-2" data-animation-direction="from-bottom" data-animation-delay="300">
                    <h3>We are Getting Married</h3>
                    <p>Thật vui vì được gặp và đón tiếp các bạn trong một dịp đặc biệt như đám cưới của chúng tôi. Chúng tôi muốn gửi đến bạn những lời cảm ơn sâu sắc nhất và để bạn biết chúng tôi rất hạnh phúc khi thấy bạn ở đó. Cảm ơn các bạn rất nhiều vì sự hiện diện cùng những lời chúc tốt đẹp mà bạn đã dành cho chúng tôi!</p>
                    <p class="groom-bride-signature"><span>{{$couple['ten_chu_re_ngan_gon'] ?? 'Nguyễn Văn'}}</span> & <span>{{$couple['ten_co_dau_ngan_gon'] ?? 'Thúy Hoài'}}</span></p>
                    <div class="parent-info-group">
                        <div class="parent-infos">
                            @if ($couple && $couple['ho_ten_bo_co_dau'])
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">{{$couple['ho_ten_bo_co_dau']}}</span></div>
                            @endif

                            @if ($couple && $couple['ho_ten_me_co_dau'])
                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">{{$couple['ho_ten_me_co_dau']}}</span></div>
                            @endif
                        </div>

                        <div class="parent-infos">
                            @if ($couple && $couple['ho_ten_bo_co_dau'])
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">{{$couple['ho_ten_bo_co_dau']}}</span></div>
                            @endif

                            @if ($couple && $couple['ho_ten_me_co_dau'])
                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">{{$couple['ho_ten_me_co_dau']}}</span></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US SECTION -->

    <!-- BEGIN OUR STORY TITLE SECTION -->
    @if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
    <section id="our-story-title"
             class="parallax-background bg-color-overlay section-divider-bottom-2 padding-divider-top"
             style="background-image: url({{$custom['background_cau_chuyen_tinh_yeu'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/d22ce318c91e96e35328d63da2364702.jpg'}})">
        <div class="section-divider-top-1 off-section"></div>
        <!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">{{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END OUR STORY TITLE SECTION -->

    <!-- BEGIN TIMELINE SECTION -->
    <section id="story">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    @if(!count($loveStories))
                        <div class="timeline">
                            <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                                <span class="neela-style">December 12 2015</span>
                            </div>
                            <div class="gallery-container">
                                <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                    <div class="timeline-gallery-del">
                                        <div class="item text-center">
                                            <!--<a class="hover-img" href="https://preview.iwedding.info/templates/template19/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                            <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0f99c255f7aa7714d366ebde51c86d53.jpeg" alt="Bạn có tin vào tình yêu online không?" class="w-100 h-auto" style="max-width:500px;" />
                                        </div>
                                    </div>
                                </div>

                                <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                    <div class="description">
                                        <div class="neela-style">
                                            <h4>Bạn có tin vào tình yêu online không?</h4>
                                            <p>Tôi đã từng không tin vào tình yêu online. Đã từng nghĩ làm sao có thể thích một người chưa từng gặp mặt? Vậy mà giờ đây tôi lại đang như vậy, bây giờ tôi đã hiểu: thế giới ảo tình yêu thật đấy!!! Ngày ấy vu vơ đăng một dòng status trên facebook than thở, vu vơ đùa giỡn nói chuyện với một người xa lạ chưa từng quen. Mà nào hay biết, 4 năm sau người ấy lại là chồng mình.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                                <span class="neela-style">August 04 2016</span>
                            </div>
                            <div class="gallery-container">
                                <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                    <div class="timeline-gallery-del">
                                        <div class="item text-center">
                                            <!--<a class="hover-img" href="https://preview.iwedding.info/templates/template19/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                            <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/be48dcf2522cd4ecfa7dab2dd4ebd3f9.jpeg" alt="Lời tỏ tình dễ thương^^" class="w-100 h-auto" style="max-width:500px;" />
                                        </div>
                                    </div>
                                </div>

                                <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                    <div class="description">
                                        <div class="neela-style">
                                            <h4>Lời tỏ tình dễ thương^^</h4>
                                            <p>Ngày ấy, tôi 21! Một mình giữa phố thị nấp tập. Mỗi chiều cuối tuần thường chạy xe vòng quanh qua những con phố, len lỏi trong từng dòng người tấp nập. Hay thậm chí là ghé vào một quán cà phê ven đường để ngồi đó và cảm nhận về cuộc sống của riêng mình. Đôi khi lạc lõng và hơi cô đơn. Nhưng rồi một ngày đẹp trời, người con trai ấy xuất hiện, nắm tay rồi thủ thỉ vào tai: “Hy vọng sau này anh được làm những điều ấy cùng em”.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                                <span class="neela-style">May 10 2018</span>
                            </div>
                            <div class="gallery-container">
                                <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                    <div class="timeline-gallery-del">
                                        <div class="item text-center">
                                            <!--<a class="hover-img" href="https://preview.iwedding.info/templates/template19/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                            <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d2d08234dd0ece24828f396fa243a1ec.jpeg" alt="Phút giây cầu hôn" class="w-100 h-auto" style="max-width:500px;" />
                                        </div>
                                    </div>
                                </div>

                                <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                    <div class="description">
                                        <div class="neela-style">
                                            <h4>Phút giây cầu hôn</h4>
                                            <p>5 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta nhận ra được rất nhiều điều. Yêu nhau, vun vén hạnh phúc và cùng nỗ lực vượt qua những khó khăn trong cuộc sống. Chúng ta từ 2 con người xa lạ mà bước vào cuộc đời nhau. Và giờ đây chúng ta tiếp tục cùng nhau sang trang mới. Giây phút anh ngỏ lời “Làm vợ anh nhé!”, em đã nguyện ý đời này, đi đâu cũng được, miễn là cùng anh.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                                <span class="neela-style">July 28 2018</span>
                            </div>
                            <div class="gallery-container">
                                <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                    <div class="timeline-gallery-del">
                                        <div class="item text-center">
                                            <!--<a class="hover-img" href="https://preview.iwedding.info/templates/template19/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                            <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d37c077f9ad6b076bc531b2d6ba44498.jpeg" alt="Ngày lễ đính hôn" class="w-100 h-auto" style="max-width:500px;" />
                                        </div>
                                    </div>
                                </div>

                                <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                    <div class="description">
                                        <div class="neela-style">
                                            <h4>Ngày lễ đính hôn</h4>
                                            <p>“Tiếng trái tim đôi ta đập thật nhanh. Thì thầm lời yêu thương. Ngày tình về chung đôi...” Sau bao nhiêu chờ đợi, cuối cùng ngày vui của chúng ta cũng tới rồi. Cảm ơn vì mình đã luôn là một phần trong cuộc sống của nhau. Em và anh không chỉ là người yêu mà chúng ta còn là tri kỷ. Ngày hôm nay, em sẽ là cô dâu của anh và sau này sẽ là mẹ của các con anh.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                    <div class="timeline">
                        @foreach($loveStories as $key => $loveStory)
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">{{$loveStory['thoi_gian'] ?? 'December 12 2015'}}</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <img
                                            src="{{$loveStory['anh']}}"
                                            alt="Bạn có tin vào tình yêu online không?"
                                            class="w-100 h-auto"
                                            style="max-width:500px;" />
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>{{$loveStory['tieu_de'] ?? 'Bạn có tin vào tình yêu online không?'}}</h4>
                                        <p>{{$loveStory['noi_dung']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <div class="timeline_footer">
                        <div data-animation-direction="from-top" data-animation-delay="250"><i class="icon-diamond-ring"></i></div>
                        <div class="punchline" data-animation-direction="from-bottom" data-animation-delay="250">
                            <small>This is where our FOREVER BEGINS!</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END TIMELINE SECTION -->
    @endif

    <!-- BEGIN THE WEDDING SECTION -->
    <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top section-divider-bottom-1"
             style="background-image: url({{$custom['background_the_big_day'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/10896c191ff2008ed9d07a3ed53616e4.jpg'}});">
        <div class="section-divider-top-1 off-section"></div>
        <!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">The Big Day!</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 center">
                    <div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
                        <div class="invite_title">
                            <div class="text">
                                Save<small>the</small>Date
                            </div>
                        </div>

                        <div class="invite_info px-2 px-lg-4">
                            <h2 class="fs-1">{{$couple['ten_chu_re_ngan_gon'] ?? 'Nguyễn Văn'}} <small>&</small> {{$couple['ten_co_dau_ngan_gon'] ?? 'Thúy Hoài'}}</h2>

                            <div>Sự góp mặt của bạn chắc chắn sẽ làm cho đám cưới của chúng tôi có thêm một niềm hạnh phúc!</div>

                            <div class="date">
                                {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->day}} Tháng {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->month}} {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->year}}</div>
                            <div class="count-down-clock">
                                <div
                                    id="clock"
                                     data-date="{{isset($websiteInfo['ngay_cuoi']) ? \Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->format('Y-m-d') : '2024-10-07'}}"
                                    data-text-day="Ngày"
                                    data-text-hour="Giờ"
                                    data-text-minute="Phút"
                                    data-text-second="Giây">
                                </div>
                            </div>
                            <!-- <div class="uppercase">At Birchwood Church<br>4181 Birchwood Ave Seal Beach, CA</div>
                            <h5>Reception to follow</h5> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END THE WEDDING SECTION -->

    <!-- BEGIN GALLERY SECTION -->
    @if(isset($websiteInfo['album']) && $websiteInfo['album'])
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Album Hình Cưới</h1>
                    <!--<div class="center m-0 mt-2 mb-2">-->
                    <!--    <a href="https://preview.iwedding.info/photo-album" target="_blank" class="btn btn-primary px-2" style="min-width:240px;max-width:240px;">Xem album</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    @if(count($albums))
                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            @foreach($albums as $album)
                                <script type="text/javascript">
                                    photoGalleries.push({
                                        src : "{{$album['large']}}",
                                        thumb: "{{$album['small']}}",
                                        subHtml: `<div class="lg-sub-html"><h4>{{$album["title"]}}</h4></div>`
                                    });
                                </script>
                                <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="0">
                                    <a href="#">
                                        <img src="{{$album['small']}}" alt class="img img-responsive">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu là điều kiện trong đó hạnh phúc của người khác là điều cần thiết cho chính bạn</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="0">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="1">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Vì vậy, để được ai đó nhìn thấy đầy đủ và được yêu mến dù thế nào đi nữa — đây là một sự dâng hiến của con người có thể là điều kỳ diệu</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="2">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu không làm cho thế giới quay tròn. Tình yêu là những gì làm cho chuyến đi đáng giá</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="3">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="4">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Tôi có thể chinh phục thế giới bằng một tay miễn là bạn đang nắm tay kia</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="5">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu đích thực đứng về phía nhau trong những ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="6">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Được ai đó yêu sâu sắc sẽ mang lại cho bạn sức mạnh, trong khi yêu ai đó sâu sắc sẽ cho bạn dũng khí</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="7">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Đối với thế giới, bạn có thể là một người, nhưng với một người, bạn là cả thế giới</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="8">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Tôi yêu bạn vì tất cả những gì bạn đang có, tất cả những gì bạn đã có, và tất cả những gì bạn chưa hiện hữu</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="9">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/small.jpg" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/large.jpg",
                                thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/small.jpg",
                                subHtml: `<div class="lg-sub-html"><h4>Bước đi với bàn tay của bạn trong tay tôi và bàn tay của tôi trong tay bạn, đó chính xác là nơi tôi muốn luôn ở đó</h4></div>`
                            });
                        </script>

                        <div class="grid grid-item btn-see-more-gallery" data-index="10">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/small.jpg" alt class="img img-responsive">
                        </div>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </section>
    @endif
    <!-- END GALLERY SECTION -->
    @if ($websiteInfo && $websiteInfo->id_video_cuoi)
    <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top"
             style="background-image: url({{$custom['background_video_cuoi'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/d4f33748bf87fde12d34aa8146e57b4c.jpg'}});">
        <div class="section-divider-top-1 off-section"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">Xem video cưới của chúng tôi!</h1>
                </div>
            </div>

            <div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
                <div class="ratio ratio-16x9">
                    <iframe class="border border-5 border-white w-100 h-100" style="border-width: 10px!important;" src="https://www.youtube.com/embed/{{$websiteInfo->id_video_cuoi}}" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- BEGIN WEDDING GIFTS SECTION -->
    @if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
    <div id="events"></div>
    <section id="giftregistry" class="parallax-background section-bg-color" style="
        padding:135px 0;
        background-image: url({{$custom['background_su_kien_cuoi'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/f948a8ba806986c08dd4ce1d6e9f8066.jpg'}});">
        <div class="section-divider-top-4 off-section"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-6 events-boxs py-5">
                    <h2 class="section-title-lg desc text-white">{{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}</h2>
                    <div class="section-desc mb-5 px-5 text-center">Tình yêu đích thực đứng về phía nhau trong những ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ.</div>

                    @if($events && count($events))
                        <ul class="wedding-gifts">
                            @foreach($events as $key => $event)
                            <li data-animation-direction="from-bottom" data-animation-delay="300">
                                <div class="neela-style">
                                    <div class="d-flex align-items-center event-item-content">
                                        <img src="{{$event['anh']}}" alt="{{$event['ten_su_kien']}}"
                                             width="100" height="100"
                                             class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
                                        <div class="d-inline-block">
                                            <h3 class="w-100">{{$event['ten_su_kien']}}</h3>
                                            <div class="dresscode-colors-wrap">
                                                <div class="dresscode-colors-event">

                                                </div>
                                            </div>
                                            <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>07:30 10/02/2023</strong></p>
                                            <p class="w-100 mb-0 mt-1">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <strong> {{$event['dia_chi']}}</strong>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <a href="{{$event['map']}}" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    @else
                    <ul class="wedding-gifts">

                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/45dfd859dd184042e2a6adaa320ac64b.jpeg" alt="LỄ CƯỚI NHÀ NỮ" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ CƯỚI NHÀ NỮ</h3>
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">

                                            </div>
                                        </div>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>07:30 10/02/2023</strong></p>
                                        <p class="w-100 mb-0 mt-1">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>TƯ GIA NHÀ NỮ - </span>
                                            <strong>123 Nguyễn Tất Thành, Hòa Phướng, Hải Châu, Đà Nẵng</strong>
                                        </p>
                                    </div>
                                </div>

                                <div class="info">
                                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>


                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/8f7155409bf9ebdb9dffd7a38991aaa8.jpeg" alt="TIỆC CƯỚI NHÀ NỮ" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
                                    <div class="d-inline-block">
                                        <h3 class="w-100">TIỆC CƯỚI NHÀ NỮ</h3>
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">

                                            </div>
                                        </div>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>11:30 10/02/2023</strong></p>
                                        <p class="w-100 mb-0 mt-1">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Nhà hàng tiệc cưới Hoa Cau</strong>
                                        </p>
                                    </div>
                                </div>

                                <div class="info">
                                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>


                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/83d8a5c840b51447ab080ecb9a7de6df.jpeg" alt="LỄ CƯỚI NHÀ NAM" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ CƯỚI NHÀ NAM</h3>
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">

                                            </div>
                                        </div>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>09:00 12/09/2023</strong></p>
                                        <p class="w-100 mb-0 mt-1">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Tư gia nhà nam</strong>
                                        </p>
                                    </div>
                                </div>

                                <div class="info">
                                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>


                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/194d4b3c58f61adb4931a8a00a4fa019.jpeg" alt="TIỆC CƯỚI NHÀ NAM" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
                                    <div class="d-inline-block">
                                        <h3 class="w-100">TIỆC CƯỚI NHÀ NAM</h3>
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">
                                            </div>
                                        </div>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>12:00 12/09/2023</strong></p>
                                        <p class="w-100 mb-0 mt-1">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Nhà hàng tiệc cưới For You</strong>
                                        </p>
                                    </div>
                                </div>

                                <div class="info">
                                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>

                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- END WEDDING GIFTS SECTION -->


    <!-- BEGIN BRIDESMAIDS SECTION -->
    @if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
    <section id="bridesmaids" class="parallax-background bg-color-overlay"
             style="background-image: url({{$custom['background_phu_dau_phu_re'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/98b3fc1637903e6b4265215b475fe2ad.jpg'}})">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title light">{{$custom['menu_phu_dau_phu_re'] ?? 'Phù dâu & Phù rể' }}</h2>
                </div>
            </div>

            <div class="row center">
                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top" data-animation-delay="300">
                    <div class="image">
                        <img src="{{$phudau['anh_phu_re'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg'}}" alt="" width="434" height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>{{$phudau['ten_phu_re'] ?? 'Lý Mạc Sầu'}}<small>Phù rể</small></h3>
                                <p>{{substr($phudau['gioi_thieu_phu_re'] ?? '', 0, 100)}}...
                                    <a class="button-see"
                                       data-src="{{$phudau['anh_phu_re'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg'}}"
                                       data-content="{{$phudau['gioi_thieu_phu_re'] ?? ''}}"
                                       data-instagram="" data-twitter=""
                                       data-facebook=""
                                       data-name="{{$phudau['ten_phu_re'] ?? 'Lý Mạc Sầu'}}"
                                       style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a>
                                </p>
                                <ul class="sn-icons">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top" data-animation-delay="300">
                    <div class="image">
                        <img src="{{$phudau['anh_phu_dau'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/84729db4c190b37df0a2cdcedba3f9b2.jpeg'}}" alt="" width="434" height="434" />
                        <div class="hover-info neela-style">
                            <div class="content center">
                                <h3>{{$phudau['ten_phu_dau'] ?? 'Phạm Ðoan Trang'}}<small>Phù dâu</small></h3>
                                <p>{{substr($phudau['gioi_thieu_phu_dau'] ?? '', 0, 100)}}...
                                    <a class="button-see"
                                       data-src="{{$phudau['anh_phu_dau'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/84729db4c190b37df0a2cdcedba3f9b2.jpeg'}}"
                                       data-content="{{$phudau['gioi_thieu_phu_dau'] ?? ''}}"
                                       data-instagram="" data-twitter=""
                                       data-facebook=""
                                       data-name="{{$phudau['ten_phu_dau'] ?? 'Phạm Ðoan Trang'}}"
                                       tyle="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a></p>
                                <ul class="sn-icons">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- END BRIDESMAIDS SECTION -->


    <!-- BEGIN TESTIMONIALS SECTION -->
    <section id="testimonials" class="bg-color side-flowers-light">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-xl-10 offset-xl-1">
                    <div id="testimonials-slider" class="owl-carousel testimonials light"
                         data-animation-direction="from-bottom" data-animation-delay="300">
                        <div class="item">
                            <blockquote>{{$custom['text_slider1'] ?? 'Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng.'}}</blockquote>
                        </div>

                        <div class="item">
                            <blockquote>{{$custom['text_slider2'] ?? 'Cho đi tình yêu sẽ nhận lại hạnh phúc, hy vọng và ước mơ.'}}</blockquote>
                        </div>

                        <div class="item">
                            <blockquote>{{$custom['text_slider3'] ?? 'Yêu không có nghĩa là nhìn nhau, mà có nghĩa là cùng nhau nhìn theo một hướng.'}}</blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIALS SECTION -->

    <!-- BEGIN GROOMSMEN SECTION -->
    <!-- END GROOMSMEN SECTION -->

    <!-- BEGIN CONTACTS SECTION -->
    @if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
    <section id="rsvp" class="section-bg-color extra-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">
                    <div class="form-wrapper flowers neela-style">
                        <h1 class="section-title">{{$custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}</h1>
                        <div class="wish-box ">
                            <div class="wish-box-item ">
                                <p>{{$loicamta['content'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- END CONTACTS SECTION -->

    <section id="donate">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">{{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}</h2>
                </div>
            </div>
        </div>

        <div class="container donate-box">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 donate-card">
                    <div class="map-info-container">
                        <div class="info-wrapper animate-from-bottom animation-from-bottom mt-0" data-animation-direction="from-bottom" data-animation-delay="100">
                            <div class="location-info">
                                <div class="neela-style"><span class="h-lines"></span><span class="v-lines"></span>
                                    <h4 class="fs-5">Mừng cưới đến chú rể</h4>
                                    <img class="qr-code-image m-auto mb-2"
                                         src="{{$couple['anh_qr_chu_re'] ?? ''}}">
                                    <p>Ngân hàng: <strong>{{$couple['ten_ngan_hang_chu_re'] ?? ''}}</strong></p>
                                    <p>Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_chu_re'] ?? ''}}</strong></p>
                                    <p>Số tài khoản: <strong>{{$couple['stk_chu_re'] ?? ''}}</strong></p>
                                    <p>Chi nhánh: <strong>{{$couple['chi_nhanh_chu_re'] ?? ''}}</strong></p>

                                    <div class="info-map-divider"></div>
                                    <div class="cryptos-box-view">
                                        <div class="d-flex align-items-center h-100">
                                            <div class="w-100">
                                                <h5 class="text-dark"><span class="coin-img"></span> Địa chỉ <span class="coin-id"></span></h5>
                                                <div>
                                                    <span class="coin-address"></span>
                                                    <div class="coin-qr-code"></div>
                                                </div>
                                                <button class="cryptos-box-view-close">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 donate-card">
                    <div class="map-info-container">
                        <div class="info-wrapper animate-from-bottom animation-from-bottom mt-0" data-animation-direction="from-bottom" data-animation-delay="100">
                            <div class="location-info">
                                <div class="neela-style"><span class="h-lines"></span><span class="v-lines"></span>
                                    <h4 class="fs-5">Mừng cưới đến cô dâu</h4>
                                    <img class="qr-code-image m-auto mb-2 "
                                         src="{{$couple['anh_qr_co_dau'] ?? ''}}">
                                    <p>Ngân hàng: <strong>{{$couple['ten_ngan_hang_co_dau'] ?? ''}}</strong></p>
                                    <p>Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_co_dau'] ?? ''}}</strong></p>
                                    <p>Số tài khoản: <strong>{{$couple['stk_co_dau'] ?? ''}}</strong></p>
                                    <p>Chi nhánh: <strong>{{$couple['chi_nhanh_co_dau'] ?? ''}}</strong></p>

                                    <div class="info-map-divider"></div>
                                    <div class="cryptos-box-view">
                                        <div class="d-flex align-items-center h-100">
                                            <div class="w-100">
                                                <h5 class="text-dark"><span class="coin-img"></span> Địa chỉ ví <span class="coin-id"></span></h5>
                                                <div>
                                                    <span class="coin-address"></span>
                                                    <div class="coin-qr-code"></div>
                                                </div>
                                                <button class="cryptos-box-view-close">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN FOOTER -->
    <footer id="footer-onepage" class="bg-color">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-logo">
                            {{$couple['ten_chu_re_ngan_gon'] ?? 'Nguyễn Văn'}}<br>
                            <small>&</small><br>
                            {{$couple['ten_co_dau_ngan_gon'] ?? 'Thúy Hoài'}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

</div>
<!-- END WRAPPER -->

<div id="menu-access" class="">
    <div class="btn-menu-open">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
    </div>
    <div class="btn-menu-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
        </svg>
    </div>
    <ul class="p-0 m-0 list-menu-icon">
        <li class="text-center buttonDonate">
            <a href="#donate" class="text-white">
                <span class="content-button tooltipBtn">
                    <span class="tooltiptext">Mừng cưới</span>
                    <img class="access-icon" src="https://cdn.biihappy.com/ziiweb/images/static/common/money_bag.png" alt="">
                </span>
            </a>
        </li>
    </ul>
</div>

<script>
    var slidehow_images = [
        "{{$custom['background_slider1'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/a33b08a813ee02e7a4b7d72ce05d9e93.jpg'}}",
        "{{$custom['background_slider2'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/1f6f6347c9eec78781d536c34c177bb8.jpg'}}",
        "{{$custom['background_slider3'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/644000ba4f8e0c7ddf09c709/b0ccc21579cf9df6a113314b039ec33e.jpg'}}",
    ];
    var custom_color = "#747BA9";
    const biicore = {
        template_id: '644000ba4f8e0c7ddf09c709',
        templatePremium: ('1' === '1'),
        themeRoot:'https://preview.iwedding.info/templates/template19-123',
        webroot : 'https://preview.iwedding.info',
        coreSite: 'https://biihappy.com',
        webToken: '61990349db8f76231c132068',
        isPremium: ('1' === '1'),
        bgMusic: '{{$websiteInfo['nhac_website'] ?? "https://cdn.biihappy.com/ziiweb/wedding-musics/IDo-911.mp3"}}',
        alert: JSON.parse('{"title":"123123","content":"Xin 123","timeout":5000,"status":2,"cancel_button_text":""}'),
        effect: JSON.parse('{"type":"snow"}'),
        isAutoPlay: ('1' === '1')
    };
</script>
<script src="{{asset('template17/js/jquery-plugin-collection.js?v=20240713')}}"></script>
<!-- Template Scripts -->
<script src="{{asset('template17/js/variables.js?v=20240713')}}"></script>
<script src="{{asset('template17/js/scripts.js?v=20240713')}}"></script>
<script src="{{asset('template17/js/template.settings.js?v=20240713')}}"></script>
<script src="{{asset('template17/js/calendar.js?v=20240713')}}"></script>
<script src="{{asset('template17/js/bii.js?v=20240713')}}"></script>
<script src="{{asset('template17/js/insertTextAtCursor.js?v=20240713')}}"></script>
</body>

</html>
