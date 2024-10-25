<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @include('components.header')


    <link rel="stylesheet" type="text/css" href="{{asset('template1/css/libs.css')}}">
    <link href="{{asset('template1/css/calendar.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('template1/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template1/css/responsive.css')}}">
    <link href="{{asset('template1/css/plugin.css')}}" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K9L0ZFE1PJ"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>
</head>
<script type="text/javascript">
    var photoGalleries = [];
</script>
<body data-spy="scroll" data-target=".navbar-fixed-top" class="home-3">
<div class="preloader-area">
    <div class="loader loader-13">
        <div class="css-heart heart1"></div>
        <div class="css-heart heart2"></div>
        <div class="css-heart heart3"></div>
        <div class="css-heart heart4"></div>
    </div>
</div>
<header id="inner-navigation">
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">
        <div class="container">
            <div class="logo pull-left">
                <a href="/">
                    <h1 style="font-size:25px;">{{$logo1}}<span class="main-color" ><i class="fa fa-heart" style="margin:5px 5px 5px 10px;color:red" ></i></span>{{$logo2}}</h1>
                </a>
                <a href="/" class="sticky-logo">
                    <h1 style="font-size:25px;">{{$logo1}}<span class="main-color" ><i class="fa fa-heart" style="margin:5px 5px 5px 10px;color:red" ></i></span>{{$logo2}}</h1>
                </a>
            </div>
            <div id="navbar" class="navbar-nav-wrapper pull-right">
                @include('components.menu')
            </div>
        </div>
        <div id="slicknav-mobile"></div>
    </nav>
</header>
<section id="wd-banner" class="hero-slider hero-style-1">
    <div class="banner_caption_text wow fadeInDown">
        <div class="heart-arrow">
            <span><i class="fa fa-heart"></i></span>
        </div>
        <div class="heart-arrow1">
            <span><i class="fa fa-heart"></i></span>
        </div>
        <div class="heart-arrow2">
            <span><i class="fa fa-heart"></i></span>
        </div>
        <h3>We’re Getting Married!</h3>
        <h2><span>{{$couple['ten_chu_re_ngan_gon'] ?? 'Nguyễn Văn'}}</span> &amp; <span>{{$couple['ten_co_dau_ngan_gon'] ?? 'Vũ Hoài'}}</span></h2>
        <div class="text-date">
            <p>SAVE THE DATE<span>{{isset($websiteInfo['ngay_cuoi']) ? \Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->format('d-m-Y') : '04-04-2024'}}</span></p>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div
                    class="slide-inner slide-bg-image"
                    data-background="{{$custom['background_slider_1'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/62ef3cfd4c248a18ec5a9b5a/083ef1ab4729965362dda91a248a2ed8.jpg'}}">
                </div>
            </div>
            <div class="swiper-slide">
                <div
                    class="slide-inner slide-bg-image"
                     data-background="{{$custom['background_slider_2'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/62ef3cfd4c248a18ec5a9b5a/aa036712fc1203f79afa3cbcd93ccf0d.jpg'}}">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="next-prev-btn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="seperator">
        <img src="https://preview.iwedding.info/templates/template18/images/body/layer-5.png" alt="seperator">
    </div>
</section>
<section id="about-us" class="section-padding" style="height:100%">
    <div class="container">
        <div class="section-title wow fadeInDown">
            <h2>{{$custom['menu_cap_doi'] ?? 'Cặp đôi' }}</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="the-couple wow fadeInLeft uncle">
                    <div class="couple-img">
                        <img src="{{$couple['anh_chu_re'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/3b48bc6125ce6d186297a3e90a11085e.jpeg'}}" alt="">
                        <h4>Chú Rể</h4>
                    </div>
                    <div class="about-couple about-couple-1">
                        <div class="about-top">
                            <h3>{{$couple['ten_chu_re'] ?? 'Hoàng Kiến Văn'}}</h3>
                            <div class="cp-social">

                            </div>
                        </div>
                        <div class="cp-detail">
                            <div class="parent-infos ar">
                                @if ($couple && $couple['ho_ten_bo_chu_re'])
                                <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">{{$couple['ho_ten_bo_chu_re']}}</span></div>
                                @endif

                                @if ($couple && $couple['ho_ten_me_chu_re'])
                                <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">{{$couple['ho_ten_me_chu_re']}}</span></div>
                                @endif
                            </div>
                            <p class="ar">
                                {{$couple['gioi_thieu_chu_re'] ?? ' Là bác sĩ nha khoa hiện đang công tác tại một phòng khám nha khoa ở Quận 1 thành phồ Hồ Chí Minh'}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="the-couple wow fadeInRight bride">
                    <div class="couple-img">
                        <img src="{{$couple['anh_co_dau'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/59b631f29bfb9f7cd20437d27ddbe4db.jpeg'}}" alt="">
                        <h4>Cô Dâu</h4>
                    </div>
                    <div class="about-couple">
                        <div class="about-top">
                            <h3>{{$couple['ten_co_dau'] ?? 'Ngô Việt Hoài'}}</h3>
                            <div class="cp-social">

                            </div>
                        </div>
                        <div class="cp-detail">
                            <div class="parent-infos al">
                                @if ($couple && $couple['ho_ten_bo_co_dau'])
                                <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">{{$couple['ho_ten_bo_co_dau']}}</span></div>
                                @endif

                                @if ($couple && $couple['ho_ten_me_co_dau'])
                                <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">{{$couple['ho_ten_me_co_dau']}}</span></div>
                                @endif
                            </div>
                            <p class="al">
                                {{$couple['gioi_thieu_co_dau'] ?? 'Cô gái đến từ xứ Huế mộng mơ, hiện đang sinh sống và làm việc tại Sài Gòn'}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeIn">
        </div>
    </div>
</section>
<section class="section-accessibilities">
    <div class="container">
        <div class="row button-accessibilities">
            <div class="col col-lg-12">
                <div class="text-center btn-container">

                </div>
            </div>
        </div>
    </div>
</section>
@if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
<section id="our-story" class="story-bg section-padding">
    <div class="container">
        <div class="section-title wow fadeInDown">
            <h2>{{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}</h2>
        </div>
        @if(count($loveStories))
            <div class="story-timeline">
                <div class="row">
                    @foreach($loveStories as $key => $loveStory)
                        @if ($key % 2 == 0)
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="story-lt-rt story-lt">
                                            <div class="image-story">
                                                <img src="{{$loveStory['anh'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0f99c255f7aa7714d366ebde51c86d53.jpeg'}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="story-lt-rt story-rt">
                                            <div class="expand-story">
                                                <div class="story-head wow fadeIn">
                                                    <h3>{{$loveStory['tieu_de'] ?? 'Bạn có tin vào tình yêu online không?'}}</h3>
                                                    <h6>{{$loveStory['thoi_gian'] ?? 'December 12 2015'}}</h6>
                                                </div>
                                                <p class="wow fadeInRight">
                                                    {{$loveStory['noi_dung']}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="story-lt-rt story-lt">
                                            <div class="expand-story">
                                                <div class="story-head wow fadeIn">
                                                    <h3>{{$loveStory['tieu_de'] ?? 'Lời tỏ tình dễ thương^^'}}</h3>
                                                    <h6>{{$loveStory['thoi_gian'] ?? 'August 04 2016'}}</h6>
                                                </div>
                                                <p class="wow fadeInLeft">
                                                    {{$loveStory['noi_dung']}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="story-lt-rt story-rt">
                                            <div class="image-story">
                                                <img src="{{$loveStory['anh'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/be48dcf2522cd4ecfa7dab2dd4ebd3f9.jpeg'}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="story-timeline story-time-mb">
                <div class="row">
                    @foreach($loveStories as $key => $loveStory)
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="story-lt-rt story-rt">
                                        <div class="expand-story">
                                            <div class="story-head wow fadeIn">
                                                <h3>{{$loveStory['tieu_de'] ?? 'Lời tỏ tình dễ thương^^'}}</h3>
                                                <h6>{{$loveStory['thoi_gian'] ?? 'August 04 2016'}}</h6>
                                            </div>
                                            <p class="wow fadeInRight">
                                                {{$loveStory['noi_dung']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="story-lt-rt story-lt">
                                        <div class="image-story">
                                            <img src="{{$loveStory['anh']}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
        <div class="story-timeline">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-lt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0f99c255f7aa7714d366ebde51c86d53.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-rt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Bạn có tin vào tình yêu online không?</h3>
                                        <h6>December 12 2015</h6>
                                    </div>
                                    <p class="wow fadeInRight">Tôi đã từng không tin vào tình yêu online. Đã từng nghĩ làm sao có thể thích một người chưa từng gặp mặt? Vậy mà giờ đây tôi lại đang như vậy, bây giờ tôi đã hiểu: thế giới ảo tình yêu thật đấy!!! Ngày ấy vu vơ đăng một dòng status trên facebook than thở, vu vơ đùa giỡn nói chuyện với một người xa lạ chưa từng quen. Mà nào hay biết, 4 năm sau người ấy lại là chồng mình.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-lt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Lời tỏ tình dễ thương^^</h3>
                                        <h6>August 04 2016</h6>
                                    </div>
                                    <p class="wow fadeInLeft">Ngày ấy, tôi 21! Một mình giữa phố thị nấp tập. Mỗi chiều cuối tuần thường chạy xe vòng quanh qua những con phố, len lỏi trong từng dòng người tấp nập. Hay thậm chí là ghé vào một quán cà phê ven đường để ngồi đó và cảm nhận về cuộc sống của riêng mình. Đôi khi lạc lõng và hơi cô đơn. Nhưng rồi một ngày đẹp trời, người con trai ấy xuất hiện, nắm tay rồi thủ thỉ vào tai: “Hy vọng sau này anh được làm những điều ấy cùng em”.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-rt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/be48dcf2522cd4ecfa7dab2dd4ebd3f9.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-lt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d2d08234dd0ece24828f396fa243a1ec.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-rt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Phút giây cầu hôn</h3>
                                        <h6>May 10 2018</h6>
                                    </div>
                                    <p class="wow fadeInRight">5 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta nhận ra được rất nhiều điều. Yêu nhau, vun vén hạnh phúc và cùng nỗ lực vượt qua những khó khăn trong cuộc sống. Chúng ta từ 2 con người xa lạ mà bước vào cuộc đời nhau. Và giờ đây chúng ta tiếp tục cùng nhau sang trang mới. Giây phút anh ngỏ lời “Làm vợ anh nhé!”, em đã nguyện ý đời này, đi đâu cũng được, miễn là cùng anh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-lt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Ngày lễ đính hôn</h3>
                                        <h6>July 28 2018</h6>
                                    </div>
                                    <p class="wow fadeInLeft">“Tiếng trái tim đôi ta đập thật nhanh. Thì thầm lời yêu thương. Ngày tình về chung đôi...” Sau bao nhiêu chờ đợi, cuối cùng ngày vui của chúng ta cũng tới rồi. Cảm ơn vì mình đã luôn là một phần trong cuộc sống của nhau. Em và anh không chỉ là người yêu mà chúng ta còn là tri kỷ. Ngày hôm nay, em sẽ là cô dâu của anh và sau này sẽ là mẹ của các con anh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="story-lt-rt story-rt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d37c077f9ad6b076bc531b2d6ba44498.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="story-timeline story-time-mb">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-rt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Bạn có tin vào tình yêu online không?</h3>
                                        <h6>December 12 2015</h6>
                                    </div>
                                    <p class="wow fadeInRight">Tôi đã từng không tin vào tình yêu online. Đã từng nghĩ làm sao có thể thích một người chưa từng gặp mặt? Vậy mà giờ đây tôi lại đang như vậy, bây giờ tôi đã hiểu: thế giới ảo tình yêu thật đấy!!! Ngày ấy vu vơ đăng một dòng status trên facebook than thở, vu vơ đùa giỡn nói chuyện với một người xa lạ chưa từng quen. Mà nào hay biết, 4 năm sau người ấy lại là chồng mình.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-lt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0f99c255f7aa7714d366ebde51c86d53.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-lt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Lời tỏ tình dễ thương^^</h3>
                                        <h6>August 04 2016</h6>
                                    </div>
                                    <p class="wow fadeInLeft">Ngày ấy, tôi 21! Một mình giữa phố thị nấp tập. Mỗi chiều cuối tuần thường chạy xe vòng quanh qua những con phố, len lỏi trong từng dòng người tấp nập. Hay thậm chí là ghé vào một quán cà phê ven đường để ngồi đó và cảm nhận về cuộc sống của riêng mình. Đôi khi lạc lõng và hơi cô đơn. Nhưng rồi một ngày đẹp trời, người con trai ấy xuất hiện, nắm tay rồi thủ thỉ vào tai: “Hy vọng sau này anh được làm những điều ấy cùng em”.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-rt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/be48dcf2522cd4ecfa7dab2dd4ebd3f9.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-rt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Phút giây cầu hôn</h3>
                                        <h6>May 10 2018</h6>
                                    </div>
                                    <p class="wow fadeInRight">5 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta nhận ra được rất nhiều điều. Yêu nhau, vun vén hạnh phúc và cùng nỗ lực vượt qua những khó khăn trong cuộc sống. Chúng ta từ 2 con người xa lạ mà bước vào cuộc đời nhau. Và giờ đây chúng ta tiếp tục cùng nhau sang trang mới. Giây phút anh ngỏ lời “Làm vợ anh nhé!”, em đã nguyện ý đời này, đi đâu cũng được, miễn là cùng anh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-lt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d2d08234dd0ece24828f396fa243a1ec.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-lt">
                                <div class="expand-story">
                                    <div class="story-head wow fadeIn">
                                        <h3>Ngày lễ đính hôn</h3>
                                        <h6>July 28 2018</h6>
                                    </div>
                                    <p class="wow fadeInLeft">“Tiếng trái tim đôi ta đập thật nhanh. Thì thầm lời yêu thương. Ngày tình về chung đôi...” Sau bao nhiêu chờ đợi, cuối cùng ngày vui của chúng ta cũng tới rồi. Cảm ơn vì mình đã luôn là một phần trong cuộc sống của nhau. Em và anh không chỉ là người yêu mà chúng ta còn là tri kỷ. Ngày hôm nay, em sẽ là cô dâu của anh và sau này sẽ là mẹ của các con anh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="story-lt-rt story-rt">
                                <div class="image-story">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d37c077f9ad6b076bc531b2d6ba44498.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endif

<section id="the-countdown" class="the-countdown layered-b section-padding" style="background-image: url({{$custom['background_thoi_gian'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/62ef3cfd4c248a18ec5a9b5a/a92c4f18902576f825fb27a0894ec3f9.jpg'}}); background-repeat: no-repeat;background-size: cover;background-attachment: fixed">
    <div class="seperator seperator-up">
        <img src="https://preview.iwedding.info/templates/template18/images/body/layer-3.png" alt="seperator">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div class="count-titles wow fadeInDown">
                    <h2>The big day</h2>
                    <div id="clock" data-date="{{isset($websiteInfo['ngay_cuoi']) ? \Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->format('Y-m-d') : '2024-10-07'}}" data-text-day="Ngày" data-text-hour="Giờ" data-text-minute="Phút" data-text-second="Giây"></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="count-img">
                    <i class="fa fa-clock-o"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="black-overlay-se"></div>
    <div class="seperator">
        <img src="https://preview.iwedding.info/templates/template18/images/body/layer-3.png" alt="seperator">
    </div>
</section>

@if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
<section id="wedding-event" class="wedding-event">
    <div class="container">
        <div class="section-title wow fadeInDown">
            <h2>{{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}</h2>
        </div>
        <div class="event-dates">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-event">
                        <div class="event-img wow fadeInLeft sticky">
                            <img src="{{$custom['anh_su_kien_cuoi'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/62ef3cfd4c248a18ec5a9b5a/8cf390dccd7f841cc2fea94f1f2ad7a1.jpg'}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    @if($events && count($events))
                    @foreach($events as $event)
                    <div class="event-stack wow fadeIn">
                        <h3 class="text-center">{{$event['ten_su_kien']}}</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-5">
                                <div class="image-wrap">
                                    <img class="event-image" src="{{$event['anh']}}" alt="{{$event['ten_su_kien']}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-7">
                                <div class="event-title text-center-sm">
                                    <ul>
                                        <li class="text-center"><i class="fa fa-calendar-check-o"></i>{{$event['thoi_gian']}}</li>
{{--                                        <li class="text-center"><i class="fa fa-clock-o"></i> 07:30</li>--}}
                                    </ul>
                                </div>
                                <p class="text-center-sm">
                                    <i class="fa fa-map-marker"></i>
                                    {{$event['dia_chi']}}
                                </p>
                                <a class="text-center-sm"  href="{{$event['map']}}" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="event-stack wow fadeIn">
                            <h3 class="text-center">LỄ CƯỚI NHÀ NỮ</h3>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-5">
                                    <div class="image-wrap">
                                        <img class="event-image" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/45dfd859dd184042e2a6adaa320ac64b.jpeg" alt="LỄ CƯỚI NHÀ NỮ">
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7">
                                    <div class="event-title text-center-sm">
                                        <ul>
                                            <li class="text-center"><i class="fa fa-calendar-check-o"></i>2023-02-10</li>
                                        </ul>
                                    </div>
                                    <p class="text-center-sm">
                                        <i class="fa fa-map-marker"></i>
                                        <span>TƯ GIA NHÀ NỮ - </span>
                                        123 Nguyễn Tất Thành, Hòa Phướng, Hải Châu, Đà Nẵng
                                    </p>
                                    <a class="text-center-sm"  href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="event-stack wow fadeIn">
                            <h3 class="text-center">TIỆC CƯỚI NHÀ NỮ</h3>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-5">
                                    <div class="image-wrap">
                                        <img class="event-image" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/8f7155409bf9ebdb9dffd7a38991aaa8.jpeg" alt="TIỆC CƯỚI NHÀ NỮ">
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7">
                                    <div class="event-title text-center-sm">
                                        <ul>
                                            <li class="text-center"><i class="fa fa-calendar-check-o"></i>2023-02-10</li>
                                        </ul>
                                    </div>
                                    <p class="text-center-sm">
                                        <i class="fa fa-map-marker"></i>
                                        Nhà hàng tiệc cưới Hoa Cau
                                    </p>
                                    <a class="text-center-sm"  href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="event-stack wow fadeIn">
                            <h3 class="text-center">LỄ CƯỚI NHÀ NAM</h3>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-5">
                                    <div class="image-wrap">
                                        <img class="event-image" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/83d8a5c840b51447ab080ecb9a7de6df.jpeg" alt="LỄ CƯỚI NHÀ NAM">
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7">
                                    <div class="event-title text-center-sm">
                                        <ul>
                                            <li class="text-center"><i class="fa fa-calendar-check-o"></i>2023-09-12</li>
                                        </ul>
                                    </div>
                                    <p class="text-center-sm">
                                        <i class="fa fa-map-marker"></i>
                                        Tư gia nhà nam
                                    </p>
                                    <a class="text-center-sm"  href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="event-stack wow fadeIn">
                            <h3 class="text-center">TIỆC CƯỚI NHÀ NAM</h3>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-5">
                                    <div class="image-wrap">
                                        <img class="event-image" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/194d4b3c58f61adb4931a8a00a4fa019.jpeg" alt="TIỆC CƯỚI NHÀ NAM">
                                        <div class="dresscode-colors-wrap">
                                            <div class="dresscode-colors-event">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7">
                                    <div class="event-title text-center-sm">
                                        <ul>
                                            <li class="text-center"><i class="fa fa-calendar-check-o"></i>2023-09-12</li>
                                        </ul>
                                    </div>
                                    <p class="text-center-sm">
                                        <i class="fa fa-map-marker"></i>
                                        Nhà hàng tiệc cưới For You
                                    </p>
                                    <a class="text-center-sm"  href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</section>
@endif

@if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
<section id="imp-people" class="imp-people section-padding">
    <div class="container">
        <div class="section-title wow fadeInDown">
            <h2>{{$custom['menu_phu_dau_phu_re'] ?? 'Phù dâu & Phù rể' }}</h2>
        </div>
        <div class="important-people">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#bride">Phù Dâu</a></li>
                <li><a data-toggle="tab" href="#groom">Phù Rể</a></li>
            </ul>
            <div class="tab-content">
                <div id="bride" class="tab-pane fade in active">
                    <div class="row" style="display:flex;justify-content:center;flex-wrap: wrap;">
                        <div class="col-12 col-md-4">
                            <div class="our-team" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="team-img">
                                    <img src="{{$phudau['anh_phu_re'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg'}}" alt="">
                                    <div class="link">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">{{$phudau['ten_phu_re'] ?? ''}}</h4>
                                    <span class="post">{{$phudau['gioi_thieu_phu_re'] ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="our-team" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="team-img">
                                    <img src="{{$phudau['anh_phu_dau'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/84729db4c190b37df0a2cdcedba3f9b2.jpeg'}}" alt="">
                                    <div class="link">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">{{$phudau['ten_phu_dau'] ?? ''}}</h4>
                                    <span class="post">{{$phudau['gioi_thieu_phu_dau'] ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="groom" class="tab-pane fade">
                    <div class="row" style="display:flex;justify-content:center;flex-wrap: wrap;">
                        <div class="col-12 col-md-4">
                            <div class="our-team" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="team-img">
                                    <img src="{{$phudau['anh_phu_re'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg'}}" alt="">
                                    <div class="link">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">{{$phudau['ten_phu_re'] ?? ''}}</h4>
                                    <span class="post">{{$phudau['gioi_thieu_phu_re'] ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="our-team" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="team-img">
                                    <img src="{{$phudau['anh_phu_dau'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/84729db4c190b37df0a2cdcedba3f9b2.jpeg'}}" alt="">
                                    <div class="link">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4 class="title">{{$phudau['ten_phu_dau'] ?? ''}}</h4>
                                    <span class="post">{{$phudau['gioi_thieu_phu_dau'] ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section id="the-quote" class="the-quote layered-b section-padding" style="background-image: url({{$custom['background_love_quote'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/62ef3cfd4c248a18ec5a9b5a/7a1b7d126a1a5e786da21159f9cae0a7.jpg'}}); background-repeat: no-repeat;background-size: cover;background-attachment: fixed">
    <div class="seperator seperator-up">
        <img src="https://preview.iwedding.info/templates/template18/images/body/layer-3.png" alt="seperator">
    </div>
    <div class="black-overlay-se"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="quote-img">
                    <img src="{{$custom['anh_love_quote'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/62ef3cfd4c248a18ec5a9b5a/c5fc9d51b7ebacb2f09c9a69f29635a0.jpg'}}">
                </div>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="quote-counter">
                    <div class="quote-titles wow fadeInDown">
                        <h2>Love Quote</h2>
                    </div>
                    <p>“{{$custom['text_love_quote'] ?? 'Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with and fur boa who sat upright'}}”</p>
                </div>
            </div>
        </div>
    </div>
    <div class="seperator">
        <img src="https://preview.iwedding.info/templates/template18/images/body/layer-3.png" alt="seperator">
    </div>
</section>

@if(isset($websiteInfo['album']) && $websiteInfo['album'])
<section id="the-gallery" class="gallery wide-gallery section-padding">
    <div class="container">
        <div class="section-title wow fadeInDown">
            <h2>{{$custom['menu_album_hinh_cuoi'] ?? 'Album Hình cưới' }}</h2>
        </div>
        <div class="row masonry-gallery">
            @if(count($albums))
                @foreach($albums as $album)
                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "{{$album['large']}}",
                            thumb: "{{$album['small']}}",
                            subHtml: `<div class="lg-sub-html"><h4>{{$album["title"]}}</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="0">
                        <div class="item">
                            <a href="javscript:void(0)">
                                <img src="{{$album['small']}}" alt="">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Tình yêu là điều kiện trong đó hạnh phúc của người khác là điều cần thiết cho chính bạn</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="0">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="1">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Vì vậy, để được ai đó nhìn thấy đầy đủ và được yêu mến dù thế nào đi nữa — đây là một sự dâng hiến của con người có thể là điều kỳ diệu</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="2">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Tình yêu không làm cho thế giới quay tròn. Tình yêu là những gì làm cho chuyến đi đáng giá</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="3">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="4">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Tôi có thể chinh phục thế giới bằng một tay miễn là bạn đang nắm tay kia</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="5">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Tình yêu đích thực đứng về phía nhau trong những ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="6">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Được ai đó yêu sâu sắc sẽ mang lại cho bạn sức mạnh, trong khi yêu ai đó sâu sắc sẽ cho bạn dũng khí</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="7">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Đối với thế giới, bạn có thể là một người, nhưng với một người, bạn là cả thế giới</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="8">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Tôi yêu bạn vì tất cả những gì bạn đang có, tất cả những gì bạn đã có, và tất cả những gì bạn chưa hiện hữu</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="9">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                photoGalleries.push({
                    src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/large.jpg",
                    thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/small.jpg",
                    subHtml: `<div class="lg-sub-html"><h4>Bước đi với bàn tay của bạn trong tay tôi và bàn tay của tôi trong tay bạn, đó chính xác là nơi tôi muốn luôn ở đó</h4></div>`
                });
            </script>
            <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item btn-see-more-gallery" data-index="10">
                <div class="item">
                    <a href="javscript:void(0)">
                        <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/small.jpg" alt="">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif

@if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
<section id="rsvp" class="rsvp">
    <div class="rsvp-widgets">
        <div class="section-title wow fadeInDown">
            <h2>{{$custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}</h2>
        </div>
        <div class="container">
            <div class="row" style="display: flex;justify-content: center;flex-wrap: wrap;">
                <div class="col-md-6">
                    <div class="wish-box ft-about-content">
                        <div class="wish-box-item ">
                            <strong>{{$couple['ten_chu_re_ngan_gon'] ?? ''}}</strong> &
                            <strong>{{$couple['ten_co_dau_ngan_gon'] ?? ''}}</strong>
                            <p style="font-size: 16px;">{{$loicamta['content'] ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<footer id="footer" class="footer-widgets" style="background-image: url({{$custom['background_thank_you'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/62ef3cfd4c248a18ec5a9b5a/dbf9fcd0502b5ed50f22812271a56402.jpg'}});background-repeat: no-repeat;background-size: cover;background-position: bottom;background-attachment: fixed;width:100%">
    <div class="footer-note">
        <h1>Thank you!</h1>
        <p>{{$couple['ten_chu_re_ngan_gon'] ?? ''}} &amp; {{$couple['ten_co_dau_ngan_gon'] ?? ''}}</p>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <p class="para">Forever And Always Our Love</p>
                    <!--<ul class="social-media">-->
                    <!--<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                    <!--<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                    <!--<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                    <!--</ul>-->
                    <!--<p> Copyright @ 2018 Powred by <a href="https://cyclonethemes.com/">Cyclone Themes</a> All Rights Reserved. </p>-->
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="donate-modal" class="donate-modal">
    <div class="donate-modal-content">
        <div class="donate-modal-header">
            <span class="donate-modal-close">&times;</span>
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                    <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                </svg>
                <span>{{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}</span>
            </strong>
        </div>
        <div class="donate-modal-body">
            <div class="donate-box">
                <div class="donate-card">
                    <h3>Mừng cưới đến chú rể</h3>
                    <img class="qr-code-image" src="{{$couple['anh_qr_chu_re'] ?? ''}}">
                    <p>Ngân hàng: <strong>{{$couple['ten_ngan_hang_chu_re'] ?? ''}}</strong></p>
                    <p>Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_chu_re'] ?? ''}}</strong></p>
                    <p>Số tài khoản: <strong>{{$couple['stk_chu_re'] ?? ''}}</strong></p>
                    <p>Chi nhánh: <strong>{{$couple['chi_nhanh_chu_re'] ?? ''}}</strong></p>

                    <div class="cryptos-box-view">
                        <h5><span class="coin-img"></span> Địa chỉ <span class="coin-id"></span></h5>
                        <div>
                            <span class="coin-address"></span>
                            <div class="coin-qr-code"></div>
                        </div>
                        <button class="cryptos-box-view-close">Đóng</button>
                    </div>
                </div>
                <div class="donate-card">
                    <h3>Mừng cưới đến cô dâu</h3>
                    <img class="qr-code-image" src="{{$couple['anh_qr_co_dau'] ?? ''}}">
                    <p>Ngân hàng: <strong>{{$couple['ten_ngan_hang_co_dau'] ?? ''}}</strong></p>
                    <p>Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_co_dau'] ?? ''}}</strong></p>
                    <p>Số tài khoản: <strong>{{$couple['stk_co_dau'] ?? ''}}</strong></p>
                    <p>Chi nhánh: <strong>{{$couple['chi_nhanh_co_dau'] ?? ''}}</strong></p>

                    <div class="cryptos-box-view">
                        <h5><span class="coin-img"></span> Địa chỉ ví <span class="coin-id"></span></h5>
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
<script type="text/javascript">
    const biicore = {template_id: '62ef3cfd4c248a18ec5a9b5a', templatePremium: ('0' === '1'), themeRoot:'https://preview.iwedding.info/templates/template18', webroot : 'https://preview.iwedding.info', coreSite: 'https://biihappy.com', webToken: '61990349db8f76231c132068', isPremium: ('1' === '1'), bgMusic: '{{$websiteInfo['nhac_website'] ?? "https://cdn.biihappy.com/ziiweb/wedding-musics/IDo-911.mp3"}}', alert: JSON.parse('{\"title\":\"L\\u1eddi c\\u1ea3m \\u01a1n t\\u1eeb D\\u00e2u & R\\u1ec3\",\"content\":\"Xin ch\\u00e2n th\\u00e0nh c\\u1ea3m \\u01a1n to\\u00e0n th\\u1ec3 m\\u1ecdi ng\\u01b0\\u1eddi \\u0111\\u00e3 g\\u1eedi l\\u1eddi ch\\u00fac cho v\\u1ee3 ch\\u1ed3ng ch\\u00fang em!\",\"timeout\":5000,\"status\":2,\"cancel_button_text\":\"\"}'), effect: JSON.parse('{\"type\":\"snow\"}'),isAutoPlay: ('1' === '1')};
</script>
<script src="{{asset('template1/js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('template1/js/calendar.js')}}"></script>
<script src="{{asset('template1/js/script.js')}}"></script>
<script src="{{asset('template1/js/bii.js')}}"></script>
<script src="{{asset('template1/js/insertTextAtCursor.js')}}"></script>
{{--<script type="module" src="{{asset('template1/js/init.js')}}"></script>--}}
</body>
</html>
