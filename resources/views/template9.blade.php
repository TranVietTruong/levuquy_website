<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('components.header')

    <link href="{{asset('template9/css/libs.css')}}" rel="stylesheet">
    <link href="{{asset(('template9/css/calendar.css'))}}" rel="stylesheet">
    <link href="{{asset('template9/css/style.css')}}" rel="stylesheet">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K9L0ZFE1PJ"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>
</head>
<script type="text/javascript">
    var photoGalleries = [];
</script>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
    </div>
</div>

<!-- MENU -->
<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-brand navbar-brand-centered page-scroll">
                <h1>{{$logo1}}<small>&</small>{{$logo2}}</h1>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav page-scroll">
                <li><a href="#about">{{$custom['menu_cap_doi'] ?? 'Cặp đôi' }}</a></li>
                @if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
                <li><a href="#story">{{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}</a></li>
                @endif

                @if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
                <li><a href="#event">{{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}</a></li>
                @endif
                @if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
                <li><a href="#rsvp">{{$custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right page-scroll">
                @if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
                <li><a href="#attendants">{{$custom['menu_phu_dau_phu_re'] ?? 'Phù dâu & Phù rể' }}</a></li>
                @endif
                @if(isset($websiteInfo['album']) && $websiteInfo['album'])
                <li><a href="#gallery">{{$custom['menu_album_hinh_cuoi'] ?? 'Album Hình cưới' }}</a></li>
                    @endif
                <li><a href="javascript:void(0)" class="buttonDonate">{{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END MENU -->

<!-- 3 ẢNH INTRO -->
<section id="intro" class="container-fluid">
    <div class="photowall">
        <!-- ẢNH TRÁI -->
        <div class="col-md-4 margin1">
            <img src="{{ $custom['anh_home_trai'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/6174ee94ff1ef271cb2d8bc5/89a39b9c0682fb215c909be621ff4e4d.jpg'}}" alt="" class="rotate1 img-photo img-responsive">
        </div>
        <!-- ẢNH PHẢI -->
        <div class="col-md-4  col-md-offset-4">
            <img src="{{ $custom['anh_home_phai'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/6174ee94ff1ef271cb2d8bc5/e747b98e9542d598bf05efc1f037f01d.jpg'}}" alt="" class="rotate2 img-photo img-responsive">
        </div>
    </div>
    <!-- ẢNH GIỮA -->
    <div class="main-picture col-md-6 col-centered" data-100="margin-top:0px;transform: rotate(4deg);" data-center-center="margin-top:50px;transform: rotate(-10deg);">
        <img src="{{ $custom['anh_home_giua'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/6174ee94ff1ef271cb2d8bc5/6e58c2de50e5c089c560c00cd091f24c.jpg'}}" alt="" class="img-photo img-responsive">
    </div>
    <div class="intro-heading col-md-12 text-center" data-0="opacity:1;" data--100-start="transform:translatey(0%);" data-center-bottom="transform:translatey(30%);">
        <h1 class="margin1">{{$couple['ten_chu_re_ngan_gon'] ?? 'Nguyễn Văn'}}<span class="italic" style="margin-right:8px;"> & </span> {{$couple['ten_co_dau_ngan_gon'] ?? 'Vũ Hoài'}}</h1>
        <h5 class="margin1 text-ornament style01">We’re Getting Married</h5>
    </div>
</section>
<!-- END 3 ẢNH INTRO -->

<!-- ĐẾM NGƯỢC NGÀY CƯỚI -->
<section id="save-date">
    <div class="ornament2 hidden-sm hidden-xs hidden-md" data-0="opacity:1;" data-100="transform:translatex(0%);" data-center-center="transform:translatex(90%);"></div>
    <div class="ornament3 hidden-sm hidden-xs hidden-md" data-0="opacity:1;" data-100="transform:translatex(80%);" data-center-center="transform:translatex(30%);"></div>
    <div class="container wedding-date">
        <div class="row">
            <div class="well col-md-10 col-md-offset-1 text-center">
                <div class="section-heading">
                    @if (isset($websiteInfo['ngay_cuoi']))
                        <h2>{{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->day}} Tháng {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->month}} {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->year}}</h2>
                    @else
                        <h2>04 Tháng 4 2024</h2>
                    @endif
                    <div class="hr"></div>
                </div>
                <h4>Save the Date</h4>
                <p>
                    Sự góp mặt của bạn chắc chắn sẽ làm cho đám cưới của chúng tôi có thêm một niềm hạnh phúc!
                </p>
                <div class="clock-grids">
                    <!-- NGÀY CƯỚI SỬA Ở ĐÂY -->
                    <div id="clock" data-date="{{isset($websiteInfo['ngay_cuoi']) ? \Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->format('Y-m-d') : '2024-10-07'}}" data-text-day="Ngày" data-text-hour="Giờ" data-text-minute="Phút" data-text-second="Giây"></div>
                </div>
                <div class="page-scroll margin1">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ĐẾM NGƯỢC NGÀY CƯỚI -->


<!-- CẶP ĐÔI, THÔNG TIN CỦA CÔ DÂU, CHÚ RỂ-->
<section id="about" class="">
    <div class="container">
        <div class="section-heading">
            <h2>Cặp đôi</h2>
            <div class="hr"></div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-md-6">
            <div class="img_couple"><img src="{{ $couple['anh_chu_re'] ?? 'https://i.imgur.com/mvYC3tk.jpeg'}}" alt="" class="img-responsive img-circle"/></div>
            <h4 class="text-ornament">{{$couple['ten_chu_re'] ?? 'Hoàng Kiến Văn'}}</h4>
            <div class="parent-infos">
                @if ($couple && $couple['ho_ten_bo_chu_re'])
                <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">{{$couple['ho_ten_bo_chu_re']}}</span></div>
                @endif
                @if ($couple && $couple['ho_ten_me_chu_re'])
                <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">{{$couple['ho_ten_me_chu_re']}}</span></div>
                @endif
            </div>
            <p class="text-center">
                {{$couple['gioi_thieu_chu_re'] ?? ' Là bác sĩ nha khoa hiện đang công tác tại một phòng khám nha khoa ở Quận 1 thành phồ Hồ Chí Minh'}}
            </p>
        </div>
        <div class="col-lg-5 col-md-6 res-margin">
            <div class="img_couple"><img src="{{$couple['anh_co_dau'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/59b631f29bfb9f7cd20437d27ddbe4db.jpeg'}}" alt="" class="img-responsive img-circle"/></div>
            <h4 class="text-ornament">{{$couple['ten_co_dau'] ?? 'Ngô Việt Hoài'}}</h4>
            <div class="parent-infos">
                @if ($couple && $couple['ho_ten_bo_co_dau'])
                <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">{{$couple['ho_ten_bo_co_dau']}}</span></div>
                @endif

                @if ($couple && $couple['ho_ten_me_co_dau'])
                <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">{{$couple['ho_ten_me_co_dau']}}</span></div>
                @endif
            </div>
            <p class="text-center">
                {{$couple['gioi_thieu_co_dau'] ?? 'Cô gái đến từ xứ Huế mộng mơ, hiện đang sinh sống và làm việc tại Sài Gòn'}}
            </p>
        </div>
    </div>
</section>
<!-- END CẶP ĐÔI, THÔNG TIN CỦA CÔ DÂU, CHÚ RỂ-->

<!-- HỘP MỪNG CƯỚI -->
<section class="website_info">
    <div class="container">
        <div class="row button-accessibilities animate-box" data-animate-effect="fadeInUp">
            <div class="col col-12">
                <div class="website_info_container text-center">
                    <a href="javascript:void(0)" class="theme-btn buttonDonate album">
                        <span class="content-button">
                        <img class="access-section-icon" src="https://cdn.biihappy.com/ziiweb/images/static/common/money_bag.png" alt="access-btn"> Mừng cưới
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HỘP MỪNG CƯỚI -->

<!-- VIDEO CƯỚI -->
@if ($websiteInfo && $websiteInfo->id_video_cuoi)
<section class="video-section p-t-0 p-b-0 text-white pt-0 pb-0" id="video">
    <div class="top-area" style="background: url({{$custom['background_video_cuoi'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/6174ee94ff1ef271cb2d8bc5/751b8cda591e3805c5d74e08f43bba40.jpg'}}) center center/cover no-repeat local;">
        <h2>Xem video cưới của chúng tôi</h2>
        <p>{{$custom['text_video_cuoi'] ?? 'Tình yêu không làm cho thế giới quay tròn. Tình yêu là những gì làm cho chuyến đi đáng giá.'}}</p>
        <div class="video-btn"><a href="https://www.youtube.com/embed/{{$websiteInfo->id_video_cuoi}}" class="video-play-btn" data-type="iframe"><i class="fa fa-play"></i></a></div>
    </div>
</section>
@endif
<!-- END VIDEO CƯỚI -->

<!-- CÂU CHUYỆN TÌNH YÊU -->
@if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
<section id="story">
    <div class="ornament4 hidden-sm hidden-xs hidden-md" data-0="opacity:1;" data--100-start="transform:translatex(90%);" data-center-bottom="transform:translatex(0%);"></div>
    <div class="container">
        <div class="section-heading">
            <h2>{{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}</h2>
            <div class="hr"></div>
        </div>
        @if(count($loveStories))
            <div class="row">
                <ul id="story-carousel" class="polaroids owl-carousel margin1">
                    @foreach($loveStories as $key => $loveStory)
                    <li class="polaroid-item"   data-0="transform:translatey(0%);" >
                        <img alt="" src="{{$loveStory['anh'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0f99c255f7aa7714d366ebde51c86d53.jpeg'}}" class="img-responsive"/>
                        <h4>{{$loveStory['tieu_de'] ?? 'Bạn có tin vào tình yêu online không?'}}</h4>
                        <span>{{$loveStory['thoi_gian'] ?? 'December 12 2015'}}</span>
                        <p class="show-less-content">{{substr($loveStory['noi_dung'], 0, 100)}}...<span class="button-see" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></span></p>
                        <p class="d-none show-full-content">{{$loveStory['noi_dung']}}<span class="button-see" style="font-size:14px;cursor: pointer">Thu gọn<i class="bi bi-arrow-up-short"></i></span></p>
                    </li>
                    @endforeach
                </ul>
            </div>
        @else
        <div class="row">
            <ul id="story-carousel" class="polaroids owl-carousel margin1">
                <li class="polaroid-item"   data-0="transform:translatey(0%);" >
                    <img alt="" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0f99c255f7aa7714d366ebde51c86d53.jpeg" class="img-responsive"/>
                    <h4>Bạn có tin vào tình yêu online không?</h4>
                    <span>December 12 2015</span>
                    <p class="show-less-content">Tôi đã từng không tin vào tình yêu online. Đã từng nghĩ làm sao có thể thích một người chưa từng gặp... <span class="button-see" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></span></p>
                    <p class="d-none show-full-content">Tôi đã từng không tin vào tình yêu online. Đã từng nghĩ làm sao có thể thích một người chưa từng gặp mặt? Vậy mà giờ đây tôi lại đang như vậy, bây giờ tôi đã hiểu: thế giới ảo tình yêu thật đấy!!! Ngày ấy vu vơ đăng một dòng status trên facebook than thở, vu vơ đùa giỡn nói chuyện với một người xa lạ chưa từng quen. Mà nào hay biết, 4 năm sau người ấy lại là chồng mình.<span class="button-see" style="font-size:14px;cursor: pointer">Thu gọn<i class="bi bi-arrow-up-short"></i></span></p>
                </li>
                <li class="polaroid-item"   data-0="transform:translatey(0%);">
                    <img alt="" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/be48dcf2522cd4ecfa7dab2dd4ebd3f9.jpeg" class="img-responsive"/>
                    <h4>Lời tỏ tình dễ thương^^</h4>
                    <span>August 04 2016</span>
                    <p class="show-less-content">Ngày ấy, tôi 21! Một mình giữa phố thị nấp tập. Mỗi chiều cuối tuần thường chạy xe vòng quanh qua nh... <span class="button-see" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></span></p>
                    <p class="d-none show-full-content">Ngày ấy, tôi 21! Một mình giữa phố thị nấp tập. Mỗi chiều cuối tuần thường chạy xe vòng quanh qua những con phố, len lỏi trong từng dòng người tấp nập. Hay thậm chí là ghé vào một quán cà phê ven đường để ngồi đó và cảm nhận về cuộc sống của riêng mình. Đôi khi lạc lõng và hơi cô đơn. Nhưng rồi một ngày đẹp trời, người con trai ấy xuất hiện, nắm tay rồi thủ thỉ vào tai: “Hy vọng sau này anh được làm những điều ấy cùng em”.<span class="button-see" style="font-size:14px;cursor: pointer">Thu gọn<i class="bi bi-arrow-up-short"></i></span></p>
                </li>
                <li class="polaroid-item"   data-0="transform:translatey(0%);" >
                    <img alt="" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d2d08234dd0ece24828f396fa243a1ec.jpeg" class="img-responsive"/>
                    <h4>Phút giây cầu hôn</h4>
                    <span>May 10 2018</span>
                    <p class="show-less-content">5 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta nhận ra được rất nhiều đ... <span class="button-see" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></span></p>
                    <p class="d-none show-full-content">5 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta nhận ra được rất nhiều điều. Yêu nhau, vun vén hạnh phúc và cùng nỗ lực vượt qua những khó khăn trong cuộc sống. Chúng ta từ 2 con người xa lạ mà bước vào cuộc đời nhau. Và giờ đây chúng ta tiếp tục cùng nhau sang trang mới. Giây phút anh ngỏ lời “Làm vợ anh nhé!”, em đã nguyện ý đời này, đi đâu cũng được, miễn là cùng anh.<span class="button-see" style="font-size:14px;cursor: pointer">Thu gọn<i class="bi bi-arrow-up-short"></i></span></p>
                </li>
                <li class="polaroid-item"   data-0="transform:translatey(0%);">
                    <img alt="" src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d37c077f9ad6b076bc531b2d6ba44498.jpeg" class="img-responsive"/>
                    <h4>Ngày lễ đính hôn</h4>
                    <span>July 28 2018</span>
                    <p class="show-less-content">“Tiếng trái tim đôi ta đập thật nhanh. Thì thầm lời yêu thương. Ngày tình về chung đôi...” Sau bao n... <span class="button-see" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></span></p>
                    <p class="d-none show-full-content">“Tiếng trái tim đôi ta đập thật nhanh. Thì thầm lời yêu thương. Ngày tình về chung đôi...” Sau bao nhiêu chờ đợi, cuối cùng ngày vui của chúng ta cũng tới rồi. Cảm ơn vì mình đã luôn là một phần trong cuộc sống của nhau. Em và anh không chỉ là người yêu mà chúng ta còn là tri kỷ. Ngày hôm nay, em sẽ là cô dâu của anh và sau này sẽ là mẹ của các con anh.<span class="button-see" style="font-size:14px;cursor: pointer">Thu gọn<i class="bi bi-arrow-up-short"></i></span></p>
                </li>
            </ul>
        </div>
        @endif
    </div>
</section>
@endif
<!-- END CÂU CHUYỆN TÌNH YÊU -->

<!-- PHÙ DÂU, PHÙ RỂ -->
@if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
<section id="attendants" class="watercolor">
    <div class="ornament5 hidden-sm hidden-xs hidden-md" data-0="opacity:1;" data--100-start="transform:translatex(-10%);" data-center-bottom="transform:translatex(100%);"></div>
    <div class="container">
        <div class="section-heading">
            <h2><span class="bridesmaids">Phù Dâu <span class="italic">&</span> <span class="groomsmen">Phù Rể</span></h2>
            <div class="hr"></div>
        </div>
        <div class="">
            <div class="tab-content">
                <div class="col-md-6" id="bridemaids">
                    <div id="owl-attendants1 col-md-12" class="">
                        <div class="attendants-wrap col-md-12">
                            <div class="member">
                                <div class="wrap">
                                    <img src="{{$phudau['anh_phu_dau'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/84729db4c190b37df0a2cdcedba3f9b2.jpeg'}}" alt="" class="img-circle img-responsive">
                                    <div class="info">
                                        <h5 class="name">{{$phudau['ten_phu_dau'] ?? 'Phạm Đoan Trang'}}</h5>
                                        <!--<h4 class="friend-birthday">20/03/1997</h4>-->
                                        <p>{{$phudau['gioi_thieu_phu_dau'] ?? ''}}</p>
                                        <div class="social-media smaller">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="groomsman">
                    <div id="owl-attendants2 col-md-12" class="">
                        <div class="attendants-wrap col-md-12">
                            <div class="member">
                                <div class="wrap">
                                    <img src="{{$phudau['anh_phu_re'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg'}}" alt="" class="img-circle img-responsive">
                                    <div class="info">
                                        <h5 class="name">{{$phudau['ten_phu_re'] ?? 'Lý Mạc Sầu'}}</h5>
                                        <!--<h4 class="friend-birthday">13/09/1999</h4>-->
                                        <p>{{$phudau['gioi_thieu_phu_re'] ?? ''}}</p>
                                        <div class="social-media smaller">
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
<!-- END PHÙ DÂU, PHÙ RỂ -->
@endif

<!-- THÔNG TIN SỰ KIỆN NGÀY CƯỚI -->
@if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
<section id="event">
    <div class="section-heading">
        <h2>{{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}</h2>
        <div class="hr"></div>
    </div>
    <div class="container">
        @if($events && count($events))
            <div class="row event-wrap">
                @foreach($events as $key => $event)
                <div class="col-sm-6">
                    <div class="event-item">
                        <div class="img-event">
                            <img src="{{$event['anh']}}" alt="" class="img-photo {{$key % 2 === 0 ? 'rotate2': 'rotate1'}} img-responsive">
                            <div class="dresscode-colors-wrap-2">
                                <div class="dresscode-colors-event">

                                </div>
                            </div>
                        </div>
                        <div class="well">
                            <h3 class="title">{{$event['ten_su_kien']}}</h3>
                            <h6><span class="time">{{$event['thoi_gian']}}</span></h6>
                            <p class="location">
                                {{$event['dia_chi']}}
                            </p>
                            <a class="text-center-sm"
                               href="{{$event['map']}}"
                               target="_blank" >
                                Xem bản đồ
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
        <div class="row event-wrap">
            <div class="col-sm-6">
                <div class="event-item">
                    <div class="img-event">
                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/45dfd859dd184042e2a6adaa320ac64b.jpeg" alt="" class="img-photo rotate2 img-responsive">
                        <div class="dresscode-colors-wrap-2">
                            <div class="dresscode-colors-event">

                            </div>
                        </div>
                    </div>
                    <div class="well">
                        <h3 class="title">LỄ CƯỚI NHÀ NỮ</h3>
                        <h6><span class="time">07:30</span> <span class="date">10/02/2023</span></h6>
                        <p class="location">
                            <span>TƯ GIA NHÀ NỮ - </span>
                            123 Nguyễn Tất Thành, Hòa Phướng, Hải Châu, Đà Nẵng
                        </p>
                        <a class="text-center-sm"
                           href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667"
                           target="_blank" >
                            Xem bản đồ
                            <i class="fa fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="event-item">
                    <div class="img-event">
                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/8f7155409bf9ebdb9dffd7a38991aaa8.jpeg" alt="" class="img-photo rotate1 img-responsive">
                        <div class="dresscode-colors-wrap-1">
                            <div class="dresscode-colors-event">

                            </div>
                        </div>
                    </div>
                    <div class="well">
                        <h3 class="title">TIỆC CƯỚI NHÀ NỮ</h3>
                        <h6><span class="time">11:30</span> <span class="date">10/02/2023</span></h6>
                        <p class="location">
                            Nhà hàng tiệc cưới Hoa Cau
                        </p>
                        <a class="text-center-sm"  href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="event-item">
                    <div class="img-event">
                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/83d8a5c840b51447ab080ecb9a7de6df.jpeg" alt="" class="img-photo rotate2 img-responsive">
                        <div class="dresscode-colors-wrap-2">
                            <div class="dresscode-colors-event">

                            </div>
                        </div>
                    </div>
                    <div class="well">
                        <h3 class="title">LỄ CƯỚI NHÀ NAM</h3>
                        <h6><span class="time">09:00</span> <span class="date">12/09/2023</span></h6>
                        <p class="location">
                            Tư gia nhà nam
                        </p>
                        <a class="text-center-sm"  href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="event-item">
                    <div class="img-event">
                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/194d4b3c58f61adb4931a8a00a4fa019.jpeg" alt="" class="img-photo rotate1 img-responsive">
                        <div class="dresscode-colors-wrap-1">
                            <div class="dresscode-colors-event">

                            </div>
                        </div>
                    </div>
                    <div class="well">
                        <h3 class="title">TIỆC CƯỚI NHÀ NAM</h3>
                        <h6><span class="time">12:00</span> <span class="date">12/09/2023</span></h6>
                        <p class="location">
                            Nhà hàng tiệc cưới For You
                        </p>
                        <a class="text-center-sm"  href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" >Xem bản đồ  <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endif
<!-- END THÔNG TIN SỰ KIỆN NGÀY CƯỚI -->

<!-- CÂU CHÂM NGÔN -->
<section
    id="quote"
    class="container-fluid"
    style="background: url({{$custom['background_text'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/6174ee94ff1ef271cb2d8bc5/945a554c6af499a0db203d7569884be7.jpg'}}) no-repeat;background-size: cover;background-position: center;">
    <div class="col-md-7 col-centered" data-center-top="opacity: 1" data-center-bottom="opacity: 0">
        <blockquote>
            <h2>{{$custom['text_text'] ?? 'Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.'}}</h2>
        </blockquote>
    </div>
</section>
<!-- END CÂU CHÂM NGÔN -->

<!-- ALBUM HÌNH CƯỚI -->
@if(isset($websiteInfo['album']) && $websiteInfo['album'])
<section id="gallery" class="gallery-section section-padding">
    <div class="section-heading text-center">
        <h2>{{$custom['menu_album_hinh_cuoi'] ?? 'Album Hình cưới' }}</h2>
        <div class="hr"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12 sortable-gallery">
                <div class="gallery-container gallery-fancybox masonry-gallery">
                    @if(count($albums))
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
                    @else
                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tình yêu là điều kiện trong đó hạnh phúc của người khác là điều cần thiết cho chính bạn</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="0">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="1">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Vì vậy, để được ai đó nhìn thấy đầy đủ và được yêu mến dù thế nào đi nữa — đây là một sự dâng hiến của con người có thể là điều kỳ diệu</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="2">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tình yêu không làm cho thế giới quay tròn. Tình yêu là những gì làm cho chuyến đi đáng giá</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="3">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="4">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tôi có thể chinh phục thế giới bằng một tay miễn là bạn đang nắm tay kia</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="5">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tình yêu đích thực đứng về phía nhau trong những ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="6">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Được ai đó yêu sâu sắc sẽ mang lại cho bạn sức mạnh, trong khi yêu ai đó sâu sắc sẽ cho bạn dũng khí</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="7">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Đối với thế giới, bạn có thể là một người, nhưng với một người, bạn là cả thế giới</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="8">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tôi yêu bạn vì tất cả những gì bạn đang có, tất cả những gì bạn đã có, và tất cả những gì bạn chưa hiện hữu</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="9">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>

                    <script type="text/javascript">
                        photoGalleries.push({
                            src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/large.jpg",
                            thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Bước đi với bàn tay của bạn trong tay tôi và bàn tay của tôi trong tay bạn, đó chính xác là nơi tôi muốn luôn ở đó</h4></div>`
                        });
                    </script>
                    <div class="col-md-4 col-sm-6 col-xs-6 mix grid-item grid  btn-see-more-gallery" data-index="10">
                        <a href="#">
                            <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/small.jpg" alt class="img img-responsive">
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- END ALBUM HÌNH CƯỚI -->

<!-- SỔ LƯU BÚT -->
@if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
<section id="rsvp" class="watercolor">
    <div class="ornament6 hidden-sm hidden-xs hidden-md" data-0="opacity:1;" data-100="transform:translatex(90%);" data-center-center="transform:translatex(30%);"></div>
    <div class="ornament7 hidden-sm hidden-xs hidden-md" data-0="opacity:1;" data-100="transform:translatex(0%);" data-center-center="transform:translatex(90%);"></div>
    <div class="container">
        <div class="section-heading">
            <h2>{{$custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}</h2>
            <div class="hr"></div>
        </div>
        <div class="row"style="justify-content: center;display: flex;flex-wrap: wrap;">
            <div class="col col-lg-6 col-md-6 ">
                <div class="wish-box">
                    <div class="wish-box-item ">
                        <p>{{$loicamta['content'] ?? ''}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- END SỔ LƯU BÚT -->

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="col-md-12 text-center">
            <div class="logo_ft center-block">{{$logo1}}<small>&</small>{{$logo2}}</div>
            <!--<img src="https://preview.iwedding.info/templates/template7/img/logo.png" alt="" class="center-block img-responsive">-->
        </div>
    </div>
</footer>
<!-- END FOOTER  -->

<!-- THÔNG TIN TÀI KHOẢN NGÂN HÀNG, MÃ QR MỪNG CƯỚI -->
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
<!-- EDN THÔNG TIN TÀI KHOẢN NGÂN HÀNG, MÃ QR MỪNG CƯỚI-->

<!-- ICON HỘP MỪNG CƯỚI -->
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
<!-- END ICON HỘP MỪNG CƯỚI -->

<script type="text/javascript">
    const biicore = {
        template_id: '6174ee94ff1ef271cb2d8bc5',
        templatePremium: ('0' === '1'),
        themeRoot:'https://preview.iwedding.info/templates/template7',
        webroot : 'https://preview.iwedding.info',
        coreSite: 'https://biihappy.com',
        webToken: '61990349db8f76231c132068',
        isPremium: ('1' === '1'),
        bgMusic: '{{$websiteInfo['nhac_website'] ?? "https://cdn.biihappy.com/ziiweb/wedding-musics/IDo-911.mp3"}}',
        alert: JSON.parse('{"title":"Lu1eddi cu1ea3m u01a1n tu1eeb Du00e2u & Ru1ec3","content":"Xin chu00e2n thu00e0nh cu1ea3m u01a1n tou00e0n thu1ec3 mu1ecdi ngu01b0u1eddi u0111u00e3 gu1eedi lu1eddi chu00fac cho vu1ee3 chu1ed3ng chu00fang em!","timeout":5000,"status":2,"cancel_button_text":""}'),
        effect: JSON.parse('{"type":"snow"}'),
        isAutoPlay: ('1' === '1')
    };
</script>
<script src="{{asset('template9/js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('template9/js/calendar.js')}}"></script>
<script src="{{asset('template9/js/script.js')}}"></script>
<script src="{{asset('template9/js/bii.js')}}"></script>
<script src="{{asset('template9/js/insertTextAtCursor.js')}}"></script>
</body>
</html>
