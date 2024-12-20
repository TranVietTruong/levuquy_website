<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('components.header')

    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Texturina:opsz,wght@12..72,100&display=swap"rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('template23/css/libs.css?v=20240713')}}" />
    <link rel="stylesheet" href="{{asset('template23/css/style.css?v=20240713')}}" />
    <link href="{{asset('template23/css/calendar.css?v=20240713')}}" rel="stylesheet">
</head>
<script type="text/javascript">
    var photoGalleries = [];
</script>
<body>
<div class="wrapper">
    <header id="header" class="site-header header-style-1 d-none">
        <nav class="navbar bg-white shadow-sm py-1">
            <div class="container-fluid">
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <a class="section-title navbar-brand" href="#">{{$logo1}} & {{$logo2}}</a>
                    <button class="navbar-toggler rounded-0 border-0 p-0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="bi bi-list fs-3 text-black"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <section class="banner-section sub-title">
        <div data-aos="fade-up" class="bgm_area py-4" id="top">
            <p class="m-0 px-3 text-center">{{$couple['ten_chu_re_ngan_gon'] ?? 'Kiến Văn'}} ♥ {{$couple['ten_co_dau_ngan_gon'] ?? 'Việt Hoài'}} sắp kết hôn. </p>
        </div>
        <div class="main_area py-5 px-4">
            <div class="main_image_area">
                <div data-aos-duration="2000" data-aos="flip-left" class="wrap-img mb-4 text-center">
                    <div class="main_image_wrapper" style="height: calc(100% + 50px);">
                        <img src="https://preview.iwedding.info/templates/template130/img/main_bg.png" alt="" class="h-100">
                    </div>
                    <img src="{{$custom['anh_couple_1'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/643d7a25b332be031b02857c/b4cc34300d41bb627e2124635feee955.jpg'}}">
                </div>
                <p data-aos="fade-up" class="mb-0 date text-center pt-3">04.04</p>
                <div data-aos="fade-up" class="wedding_area text-center">
                    <div class="title wrap-name pt-2 pb-4">
                        <span class="groom_name">{{$couple['ten_chu_re_ngan_gon'] ?? 'Kiến Văn'}}</span>
                        <span>♥</span>
                        <span class="bride_name">{{$couple['ten_co_dau_ngan_gon'] ?? 'Việt Hoài'}}</span>
                    </div>
                </div>
                <p data-aos="fade-up" class="married mb-0">We are getting married</p>
                <div data-aos="fade-up">
                    @if (isset($websiteInfo['ngay_cuoi']))
                        <p class="date-time text-center m-0">
                            Ngày {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->day}} tháng {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->month}} năm {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->year}}.
                        </p>
                    @else
                        <p class="date-time text-center m-0">
                            Ngày 04 tháng 04 năm 2024.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 accessibilities-section">
        <div class="container-fluid">
            <div class="row gx-2 justify-content-center">
                <div class="col-sm-4">
                    <a href="javascript:void(0)" class="w-100 mb-1 accessibility-btn btn btn-secondary buttonDonate"
                       data-aos="fade-left">
                            <span class="content-button">
                            <img class="access-section-icon" src="https://cdn.biihappy.com/ziiweb/images/static/common/money_bag.png" alt="access-btn"> {{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}
                            </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @if ($websiteInfo && $websiteInfo->id_video_cuoi)
    <section class="py-5 video-section section-bg-affect" id="video">
        <div class="container-fluid">
            <h2 class="section-title text-center" data-aos="fade-up">
                Video Cưới
            </h2>
            <h3 class="section-sub-title mb-4 text-center" data-aos="fade-up">
                Tình yêu không làm cho thế giới quay tròn.
            </h3>
            <div class="ratio ratio-16x9" data-aos="zoom-in">
                <iframe width="100%" src="https://www.youtube.com/embed/{{$websiteInfo->id_video_cuoi}}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </section>
    @endif

    @if(isset($websiteInfo['album']) && $websiteInfo['album'])
    <section class="py-5 gallery-section section-bg-affect" id="gallery">
        <div class="container-fluid">
            <h2 class="section-title text-center" data-aos="zoom-in-up">
                {{$custom['menu_album_hinh_cuoi'] ?? 'Album Hình cưới' }}
            </h2>
            <h3 class="section-sub-title mb-4 text-center" data-aos="zoom-in-up">
                Được ai đó yêu sâu sắc sẽ mang lại cho bạn sức mạnh, trong khi yêu ai đó sâu sắc sẽ cho bạn dũng khí.
            </h3>
            <div class="row gx-2" id="photoGalleryContainer">
            @if(count($albums))
                @foreach($albums as $key => $album)
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "{{$album['large']}}",
                        thumb: "{{$album['small']}}",
                        subHtml: `<div class="lg-sub-html"><h4>{{$album['title']}}</h4></div>`
                    });
                </script>
                <div class="col-6 gallery-item section-sub-title mb-2 btn-see-more-gallery" data-aos="{{$key % 2 === 0 ? 'fade-right':'fade-left'}}"
                     data-index="{{$key}}"> <img src="{{$album['small']}}" />
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
                <div class="col-6 gallery-item section-sub-title mb-2 btn-see-more-gallery" data-aos="fade-right"
                     data-index="0"> <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990296d7e97a1853119579/small.jpg" />
                </div>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh</h4></div>`
                    });
                </script>
                <div class="col-6 gallery-item section-sub-title mb-2 btn-see-more-gallery" data-aos="fade-left"
                     data-index="1"> <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a5f7c65c763d2ef0e2/small.jpg" />
                </div>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Vì vậy, để được ai đó nhìn thấy đầy đủ và được yêu mến dù thế nào đi nữa — đây là một sự dâng hiến của con người có thể là điều kỳ diệu</h4></div>`
                    });
                </script>
                <div class="col-6 gallery-item section-sub-title mb-2 btn-see-more-gallery" data-aos="fade-right"
                     data-index="2"> <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/619902a0d5c0e352ac024b43/small.jpg" />
                </div>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Tình yêu không làm cho thế giới quay tròn. Tình yêu là những gì làm cho chuyến đi đáng giá</h4></div>`
                    });
                </script>
                <div class="col-6 gallery-item section-sub-title mb-2 btn-see-more-gallery" data-aos="fade-left"
                     data-index="3"> <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990322c41d7b37de534633/small.jpg" />
                </div>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng</h4></div>`
                    });
                </script>
                <div class="col-6 gallery-item section-sub-title mb-2 btn-see-more-gallery" data-aos="fade-right"
                     data-index="4"> <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/6199029c1ca1d308fe5da284/small.jpg" />
                </div>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Tôi có thể chinh phục thế giới bằng một tay miễn là bạn đang nắm tay kia</h4></div>`
                    });
                </script>
                <div class="col-6 gallery-item section-sub-title mb-2 btn-see-more-gallery" data-aos="fade-left"
                     data-index="5"> <img src="https://cdn.biihappy.com/ziiweb/default/website/galleries/61990291c41d7b37de534632/small.jpg" />
                </div>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028d8d8a4918ca205514/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Tình yêu đích thực đứng về phía nhau trong những ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ</h4></div>`
                    });
                </script>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199028adb8f76231c132062/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Được ai đó yêu sâu sắc sẽ mang lại cho bạn sức mạnh, trong khi yêu ai đó sâu sắc sẽ cho bạn dũng khí</h4></div>`
                    });
                </script>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/61990285d5c0e352ac024b42/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Đối với thế giới, bạn có thể là một người, nhưng với một người, bạn là cả thế giới</h4></div>`
                    });
                </script>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/619902821ca1d308fe5da283/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Tôi yêu bạn vì tất cả những gì bạn đang có, tất cả những gì bạn đã có, và tất cả những gì bạn chưa hiện hữu</h4></div>`
                    });
                </script>
                <script type="text/javascript">
                    photoGalleries.push({
                        src : "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/large.jpg",
                        thumb: "https://cdn.biihappy.com/ziiweb/default/website/galleries/6199027ed7e97a1853119578/small.jpg",
                        subHtml: `<div class="lg-sub-html"><h4>Bước đi với bàn tay của bạn trong tay tôi và bàn tay của tôi trong tay bạn, đó chính xác là nơi tôi muốn luôn ở đó</h4></div>`
                    });
                </script>
                @endif
            </div>
            <div class="text-center" data-aos="fade-up">
                <a href="javascript:void(0)" id="btn-see-more-gallery" class="btn btn-secondary mt-4 btn-see-more-gallery">
                    <span> Tất cả hình ảnh </span>
                </a>
            </div>
        </div>
    </section>
    @endif

    <section class="py-5 section-sub-title weddingdate-section section-bg-affect" id="weddingdate">
        <div class="container-fluid">
            <div class="w-100">
                <div class="mini_calendar m-auto pb-3" data-aos="fade-up-right">
                    <div class="mini_calendar">
                        <table>
                            @if (isset($websiteInfo['ngay_cuoi']))
                                <caption class="calendar-month">Th&aacute;ng {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->month}} /  {{\Carbon\Carbon::parse($websiteInfo['ngay_cuoi'])->year}}</caption>
                            @else
                                <caption class="calendar-month">Th&aacute;ng 04 / 2024</caption>
                            @endif
                            <tr>
                                <th abbr="Monday">Thứ 2</th>
                                <th abbr="Tuesday">Thứ 3</th>
                                <th abbr="Wednesday">Thứ 4</th>
                                <th abbr="Thursday">Thứ 5</th>
                                <th abbr="Friday">Thứ 6</th>
                                <th abbr="Saturday">Thứ 7</th>
                                <th abbr="Sunday">CN</th>
                            </tr>
                            <tr>
                                <td>
                                    @if($day === 1)
                                        <div id="today">1</div>
                                    @else
                                        1
                                    @endif

                                </td>
                                <td>
                                    @if($day === 2)
                                        <div id="today">2</div>
                                    @else
                                        2
                                    @endif
                                </td>
                                <td>
                                    @if($day === 3)
                                        <div id="today">3</div>
                                    @else
                                        3
                                    @endif
                                </td>
                                <td>
                                    @if($day === 4)
                                        <div id="today">4</div>
                                    @else
                                        4
                                    @endif
                                </td>
                                <td> @if($day === 5)
                                        <div id="today">5</div>
                                    @else
                                        5
                                    @endif</td>
                                <td> @if($day === 6)
                                        <div id="today">6</div>
                                    @else
                                        6
                                    @endif</td>
                                <td> @if($day === 7)
                                        <div id="today">7</div>
                                    @else
                                        7
                                    @endif</td>
                            </tr>
                            <tr>
                                <td> @if($day === 8)
                                        <div id="today">8</div>
                                    @else
                                        8
                                    @endif</td>
                                <td> @if($day === 9)
                                        <div id="today">9</div>
                                    @else
                                        9
                                    @endif</td>
                                <td> @if($day === 10)
                                        <div id="today">10</div>
                                    @else
                                        10
                                    @endif</td>
                                <td> @if($day === 11)
                                        <div id="today">11</div>
                                    @else
                                        11
                                    @endif</td>
                                <td> @if($day === 12)
                                        <div id="today">12</div>
                                    @else
                                        12
                                    @endif</td>
                                <td> @if($day === 13)
                                        <div id="today">13</div>
                                    @else
                                        13
                                    @endif</td>
                                <td> @if($day === 14)
                                        <div id="today">14</div>
                                    @else
                                        14
                                    @endif</td>
                            </tr>
                            <tr>
                                <td> @if($day === 15)
                                        <div id="today">15</div>
                                    @else
                                        15
                                    @endif</td>
                                <td> @if($day === 16)
                                        <div id="today">16</div>
                                    @else
                                        16
                                    @endif</td>
                                <td> @if($day === 17)
                                        <div id="today">17</div>
                                    @else
                                        17
                                    @endif</td>
                                <td> @if($day === 18)
                                        <div id="today">18</div>
                                    @else
                                        18
                                    @endif</td>
                                <td> @if($day === 19)
                                        <div id="today">19</div>
                                    @else
                                        19
                                    @endif</td>
                                <td> @if($day === 20)
                                        <div id="today">20</div>
                                    @else
                                        20
                                    @endif</td>
                                <td> @if($day === 21)
                                        <div id="today">21</div>
                                    @else
                                        21
                                    @endif</td>
                            </tr>
                            <tr>
                                <td> @if($day === 22)
                                        <div id="today">22</div>
                                    @else
                                        22
                                    @endif</td>
                                <td> @if($day === 23)
                                        <div id="today">23</div>
                                    @else
                                        23
                                    @endif</td>
                                <td> @if($day === 24)
                                        <div id="today">24</div>
                                    @else
                                        24
                                    @endif</td>
                                <td> @if($day === 25)
                                        <div id="today">25</div>
                                    @else
                                        25
                                    @endif</td>
                                <td> @if($day === 26)
                                        <div id="today">26</div>
                                    @else
                                        26
                                    @endif</td>
                                <td> @if($day === 27)
                                        <div id="today">27</div>
                                    @else
                                        27
                                    @endif</td>
                                <td> @if($day === 28)
                                        <div id="today">28</div>
                                    @else
                                        28
                                    @endif</td>
                            </tr>
                            <tr>
                                <td> @if($day === 29)
                                        <div id="today">29</div>
                                    @else
                                        29
                                    @endif</td>
                                <td> @if($day === 30)
                                        <div id="today">30</div>
                                    @else
                                        30
                                    @endif</td>
                                <td> @if($day === 31)
                                        <div id="today">31</div>
                                    @else
                                        31
                                    @endif</td>
                                <td id="emptydays" colspan="4">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="countdown" data-aos="fade-up-left">
                    <div class="m-auto" id="clock" data-date="{{$websiteInfo['ngay_cuoi'] ?? '2024-04-04'}}" data-text-day="Ngày" data-text-hour="Giờ"
                         data-text-minute="Phút" data-text-second="Giây"></div>
                </div>
            </div>
        </div>
    </section>

    @if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
    <section class="py-5 story-section section-bg-affect" id="story">
        <div class="container-fluid">
            <h2 data-aos="fade-up" class="section-title text-center">
                {{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}
            </h2>
            <h3 data-aos="fade-up" class="section-sub-title mb-4 text-center">
                Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh.
            </h3>
            <div class="story-content">
                <div class="timeline">
                    <div class="outer">
                        @if(count($loveStories))
                            @foreach($loveStories as $key => $loveStory)
                                <div class="timeline-card" data-aos="{{$key % 2 === 0 ? 'fade-right':'fade-left'}}">
                                    <div class="info">
                                        <span class="date">{{$loveStory['thoi_gian']}}</span>
                                        <h3 class="title">{{$loveStory['tieu_de']}}</h3>
                                        <p>
                                            {{$loveStory['noi_dung']}}
                                        </p>
                                        <div class="img-holder">
                                            <img src="{{$loveStory['anh']}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <div class="timeline-card" data-aos="fade-right">
                            <div class="info">
                                <span class="date">December 12 2015</span>
                                <h3 class="title">Bạn có tin vào tình yêu online không?</h3>
                                <p>
                                    Tôi đã từng không tin vào tình yêu online. Đã từng nghĩ làm sao có thể thích một người chưa từng gặp mặt? Vậy mà giờ đây tôi lại đang như vậy, bây giờ tôi đã hiểu: thế giới ảo tình yêu thật đấy!!! Ngày ấy vu vơ đăng một dòng status trên facebook than thở, vu vơ đùa giỡn nói chuyện với một người xa lạ chưa từng quen. Mà nào hay biết, 4 năm sau người ấy lại là chồng mình.
                                </p>
                                <div class="img-holder">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0f99c255f7aa7714d366ebde51c86d53.jpeg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="timeline-card" data-aos="fade-left">
                            <div class="info">
                                <span class="date">August 04 2016</span>
                                <h3 class="title">Lời tỏ tình dễ thương^^</h3>
                                <p>
                                    Ngày ấy, tôi 21! Một mình giữa phố thị nấp tập. Mỗi chiều cuối tuần thường chạy xe vòng quanh qua những con phố, len lỏi trong từng dòng người tấp nập. Hay thậm chí là ghé vào một quán cà phê ven đường để ngồi đó và cảm nhận về cuộc sống của riêng mình. Đôi khi lạc lõng và hơi cô đơn. Nhưng rồi một ngày đẹp trời, người con trai ấy xuất hiện, nắm tay rồi thủ thỉ vào tai: “Hy vọng sau này anh được làm những điều ấy cùng em”.
                                </p>
                                <div class="img-holder">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/be48dcf2522cd4ecfa7dab2dd4ebd3f9.jpeg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="timeline-card" data-aos="fade-right">
                            <div class="info">
                                <span class="date">May 10 2018</span>
                                <h3 class="title">Phút giây cầu hôn</h3>
                                <p>
                                    5 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta nhận ra được rất nhiều điều. Yêu nhau, vun vén hạnh phúc và cùng nỗ lực vượt qua những khó khăn trong cuộc sống. Chúng ta từ 2 con người xa lạ mà bước vào cuộc đời nhau. Và giờ đây chúng ta tiếp tục cùng nhau sang trang mới. Giây phút anh ngỏ lời “Làm vợ anh nhé!”, em đã nguyện ý đời này, đi đâu cũng được, miễn là cùng anh.
                                </p>
                                <div class="img-holder">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d2d08234dd0ece24828f396fa243a1ec.jpeg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="timeline-card" data-aos="fade-left">
                            <div class="info">
                                <span class="date">July 28 2018</span>
                                <h3 class="title">Ngày lễ đính hôn</h3>
                                <p>
                                    “Tiếng trái tim đôi ta đập thật nhanh. Thì thầm lời yêu thương. Ngày tình về chung đôi...” Sau bao nhiêu chờ đợi, cuối cùng ngày vui của chúng ta cũng tới rồi. Cảm ơn vì mình đã luôn là một phần trong cuộc sống của nhau. Em và anh không chỉ là người yêu mà chúng ta còn là tri kỷ. Ngày hôm nay, em sẽ là cô dâu của anh và sau này sẽ là mẹ của các con anh.
                                </p>
                                <div class="img-holder">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/d37c077f9ad6b076bc531b2d6ba44498.jpeg" alt="" />
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


    <section class="invitation-section py-5 px-4 section-bg-affect" id="invitation">
        <div class="wrap-invitation">
            <div class="w-100 text-center">
                <img data-aos="fade-up" src="https://preview.iwedding.info/templates/template130/img/sub_title.png" alt="">
                <div>
                    <div data-aos="fade-up" class="mt-5 px-3 invitation-content sub-title mb-5 text-center">
                        Cảm ơn tất cả những người bạn thân yêu của tôi!<br />
                        Tôi biết các bạn rất bận rộn, bận rộn với công việc, bận rộn với công việc gia đình…<br />
                        Nhưng tất cả đã có mặt hôm nay để chúc mừng tinh yêu và hạnh phúc của chúng tôi.<br />
                        Một lần nữa chân thành cảm ơn tất cả các bạn!
                    </div>
                    <div data-aos="fade-up"
                         class="section-sub-title invitation-couple mb-5">
                        <p class="d-flex text justify-content-center m-0"><small>groom</small>Kiến Văn <span>♥</span>  Việt Hoài <small>bride</small></p>
                    </div>
                    <img data-aos="fade-up" src="https://preview.iwedding.info/templates/template130/img/sub_icon01.png" alt="">
                    <div data-aos="fade-up" class="wrap-img-couple mt-3">
                        <img src="{{$custom['anh_couple_2'] ?? 'https://cdn.biihappy.com/ziiweb/default/template/643d7a25b332be031b02857c/81581f2c556ca55c688e9534970fa5d2.jpg'}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 couple-section section-bg-affect" id="couple">
        <div class="container-fluid">
            <h2 data-aos="fade-up" class="section-title text-center m-0">
                Cô Dâu &amp; Chú Rể
            </h2>
            <h3 data-aos="fade-up" class="section-sub-title mb-0 text-center">
                Giới thiệu một chú rể đẹp trai và cô dâu xinh đẹp
            </h3>
            <div class="section-title wrap-people d-flex mt-5">
                <div class="member member-groom">
                    <div data-aos="flip-left" class="member-image animation">
                        <img src="{{$couple['anh_chu_re'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/3b48bc6125ce6d186297a3e90a11085e.jpeg'}}" />
                    </div>
                    <div data-aos="fade-left" class="member-name mt-2">
                        {{$couple['ten_chu_re_ngan_gon'] ?? 'Kiến Văn'}}
                    </div>
                    <div class="invitation-groom-parent my-2 d-flex flex-column text-center mb-0 mx-auto">
                        @if ($couple && $couple['ho_ten_bo_chu_re'])
                        <div>Con ông: <span class="parent-name">{{$couple['ho_ten_bo_chu_re'] ?? 'Hoàng Anh Kiệt'}}</span></div>
                        @endif

                        @if ($couple && $couple['ho_ten_me_chu_re'])
                        <div> Con bà: <span class="parent-name">{{$couple['ho_ten_me_chu_re'] ?? 'Nguyễn Thị Hoài'}}</span></div>
                        @endif
                    </div>
                    <div class="groom-story d-flex flex-column mb-0 mt-1">
                        <p class="text-story fs-6 text-center mb-0">
                            {{$couple['gioi_thieu_chu_re']}}
                        </p>
                        <a class="fs-6 fw-bold text-center text-decoration-none" tabindex="0" role="button"
                           data-bs-toggle="popover"
                           data-bs-trigger="focus"
                           data-bs-placement="bottom"
                           data-bs-content="{{$couple['gioi_thieu_chu_re']}}">Xem thêm</a>
                    </div>
                </div>
                <div class="member member-bride">
                    <div data-aos="flip-right" class="member-image animation">
                        <img src="{{$couple['anh_co_dau'] ?? 'https://cdn.biihappy.com/ziiweb/default/website/59b631f29bfb9f7cd20437d27ddbe4db.jpeg' }}" />
                    </div>
                    <div data-aos="fade-right" class="member-name mt-2">
                        {{$couple['ten_co_dau_ngan_gon'] ?? 'Việt Hoài'}}
                    </div>
                    <div class="invitation-groom-parent my-2 d-flex flex-column text-center mb-0 mx-auto">
                        @if ($couple && $couple['ho_ten_bo_co_dau'])
                        <div>Con ông: <span class="parent-name"> {{$couple['ho_ten_bo_co_dau']}}</span></div>
                        @endif

                        @if ($couple && $couple['ho_ten_bo_co_dau'])
                        <div>Con bà: <span class="parent-name">{{$couple['ho_ten_me_co_dau']}}</span></div>
                        @endif
                    </div>
                    <div class="bride-story d-flex flex-column mt-1">
                        <p class="text-story fs-6 text-center mb-0">
                            {{$couple['gioi_thieu_co_dau']}}
                        </p>
                        <a class="fs-6 fw-bold text-center text-decoration-none" tabindex="0" role="button"
                           data-bs-toggle="popover"
                           data-bs-trigger="focus"
                           data-bs-placement="bottom"
                           data-bs-content="{{$couple['gioi_thieu_co_dau']}}">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
    <section class="py-5 event-section section-bg-affect" id="event">
        <div class="container-fluid">
            <h2 data-aos="fade-up" class="section-title text-center">
                {{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}
            </h2>
            <h3 data-aos="fade-up" class="section-sub-title mb-4 text-center">
                Cảm ơn bạn rất nhiều vì đã gửi những lời chúc mừng tốt đẹp nhất đến đám cưới của chúng tôi!
            </h3>
            @if($events && count($events))
                @foreach($events as $key => $event)
                    <div data-aos="flip-right" class="event-item d-flex flex-row p-0 border-0 rounded overflow-hidden">
                        <div class="image-wrap" style="background-image: url({{$event['anh'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/45dfd859dd184042e2a6adaa320ac64b.jpeg'}});">
                            <div class="dresscode-colors-wrap">
                                <div class="dresscode-colors-event">

                                </div>
                            </div>
                        </div>
                        <div class="info-wrap p-3">
                            <h5 class="section-sub-title">{{$event['ten_su_kien']}}</h5>
                            <strong>{{$event['thoi_gian']}}</strong>
                            <p class="card-text">
                                {{$event['dia_chi']}}
                            </p>
                            <a href="{{$event['map']}}" target="_blank" class="section-sub-title btn btn-sm btn-secondary">Xem bản đồ</a>
                        </div>
                    </div>
                @endforeach
            @else
            <div data-aos="flip-right" class="event-item d-flex flex-row p-0 border-0 rounded overflow-hidden">
                <div class="image-wrap" style="background-image: url('https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/45dfd859dd184042e2a6adaa320ac64b.jpeg');">
                    <div class="dresscode-colors-wrap">
                        <div class="dresscode-colors-event">

                        </div>
                    </div>
                </div>
                <div class="info-wrap p-3">
                    <h5 class="section-sub-title">LỄ CƯỚI NHÀ NỮ</h5>
                    <strong>07:30 10/02/2023</strong>
                    <p class="card-text">
                        <span>TƯ GIA NHÀ NỮ - </span>
                        123 Nguyễn Tất Thành, Hòa Phướng, Hải Châu, Đà Nẵng
                    </p>

                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" class="section-sub-title btn btn-sm btn-secondary">Xem bản đồ</a>
                </div>
            </div>
            <div data-aos="flip-left" class="event-item d-flex flex-row p-0 border-0 rounded overflow-hidden">
                <div class="image-wrap" style="background-image: url('https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/8f7155409bf9ebdb9dffd7a38991aaa8.jpeg');">
                    <div class="dresscode-colors-wrap">
                        <div class="dresscode-colors-event">

                        </div>
                    </div>
                </div>
                <div class="info-wrap p-3">
                    <h5 class="section-sub-title">TIỆC CƯỚI NHÀ NỮ</h5>
                    <strong>11:30 10/02/2023</strong>
                    <p class="card-text">
                        Nhà hàng tiệc cưới Hoa Cau
                    </p>
                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" class="section-sub-title btn btn-sm btn-secondary">Xem bản đồ</a>
                </div>
            </div>
            <div data-aos="flip-right" class="event-item d-flex flex-row p-0 border-0 rounded overflow-hidden">
                <div class="image-wrap" style="background-image: url('https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/83d8a5c840b51447ab080ecb9a7de6df.jpeg');">
                    <div class="dresscode-colors-wrap">
                        <div class="dresscode-colors-event">
                        </div>
                    </div>
                </div>
                <div class="info-wrap p-3">
                    <h5 class="section-sub-title">LỄ CƯỚI NHÀ NAM</h5>
                    <strong>09:00 12/09/2023</strong>
                    <p class="card-text">
                        Tư gia nhà nam
                    </p>
                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" class="section-sub-title btn btn-sm btn-secondary">Xem bản đồ</a>
                </div>
            </div>
            <div data-aos="flip-left" class="event-item d-flex flex-row p-0 border-0 rounded overflow-hidden">
                <div class="image-wrap" style="background-image: url('https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/194d4b3c58f61adb4931a8a00a4fa019.jpeg');">
                    <div class="dresscode-colors-wrap">
                        <div class="dresscode-colors-event">

                        </div>
                    </div>
                </div>
                <div class="info-wrap p-3">
                    <h5 class="section-sub-title">TIỆC CƯỚI NHÀ NAM</h5>
                    <strong>12:00 12/09/2023</strong>
                    <p class="card-text">
                        Nhà hàng tiệc cưới For You
                    </p>
                    <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" class="section-sub-title btn btn-sm btn-secondary">Xem bản đồ</a>
                </div>
            </div>
            @endif
        </div>
    </section>
    @endif

    @if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
    <section class="py-5 section-sub-title people-section section-bg-affect" id="people">
        <div class="container-fluid">
            <h2 data-aos="fade-up" class="section-title text-center">
                {{$custom['menu_phu_dau_phu_re'] ?? 'Phù dâu & Phù rể' }}
            </h2>
            <h3 data-aos="fade-up" class="section-sub-title mb-0 text-center">
                Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng.
            </h3>
            <div class="row">
                <div data-aos="fade-right" class="col-12 col-sm-6">
                    <div class="w-100 mt-5">
                        <div class="rounded-circle people-avatar w-75 m-auto mb-3">
                            <img src="{{$phudau['anh_phu_dau'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg'}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="text-center">
                            <h6 class="section-sub-title title">{{$phudau['ten_phu_dau'] ?? 'Phạm Đoan Trang'}}</h6>
                            <p class="people-content">
                                {{$phudau['gioi_thieu_phu_dau'] ?? ''}}
                            </p>
                            <ul class="social-links m-0 p-0">
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="col-12 col-sm-6">
                    <div class="w-100 mt-5">
                        <div class="rounded-circle people-avatar w-75 m-auto mb-3">
                            <img src="{{$phudau['anh_phu_re'] ?? 'https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0a6cfab9e637b586cec8724825f99d9e.jpeg'}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="text-center">
                            <h6 class="section-sub-title title">{{$phudau['ten_phu_re'] ?? 'Lý Mạc Sầu'}}</h6>
                            <p class="people-content">
                                {{$phudau['gioi_thieu_phu_re'] ?? ''}}
                            </p>
                            <ul class="social-links m-0 p-0">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="py-5 donate-section section-bg-affect" id="donate">
        <div class="container-fluid ">
            <div class="w-100">
                <h2 data-aos="fade-up" class="section-title text-center m-0">
                    {{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}
                </h2>
                <h3 data-aos="fade-up" class="section-sub-title mb-4 text-center">
                    Thật vui vì được gặp và đón tiếp các bạn trong một dịp đặc biệt như đám cưới của chúng tôi.
                </h3>
                <div class="row d-flex justify-content-around donate-box mb-1">
                    <div data-aos="fade-right" class="col-6 mb-4 donate-wrap">
                        <div class="donate-card p-3 rounded text-center">
                            <strong class="d-block sub-title mb-2 text-uppercase">Đến chú rể</strong>
                            <img class="qr-code-image m-auto mb-2" src="{{$couple['anh_qr_chu_re'] ?? ''}}">
                            <p class="mb-1">Ngân hàng: <strong>{{$couple['ten_ngan_hang_chu_re'] ?? ''}}</strong></p>
                            <p class="mb-1">
                                Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_chu_re'] ?? ''}}</strong>
                            </p>
                            <p class="mb-1">
                                Số tài khoản: <strong>{{$couple['stk_chu_re'] ?? ''}}</strong>
                            </p>
                            <p class="mb-1">Chi nhánh: <strong>{{$couple['chi_nhanh_chu_re'] ?? ''}}</strong></p>

                            <div class="cryptos-box-view">
                                <h5><span class="coin-img"></span> Địa chỉ <span class="coin-id"></span></h5>
                                <div>
                                    <span class="coin-address"></span>
                                    <div class="coin-qr-code"></div>
                                </div>
                                <button class="cryptos-box-view-close">Đóng</button>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="col-6 donate-wrap">
                        <div class="donate-card p-3 rounded text-center">
                            <strong class="d-block sub-title mb-2 text-uppercase">Đến cô dâu</strong>
                            <img class="qr-code-image m-auto mb-2" src="{{$couple['anh_qr_co_dau'] ?? ''}}">
                            <p class="mb-1">Ngân hàng: <strong>{{$couple['ten_ngan_hang_co_dau'] ?? ''}}</strong></p>
                            <p class="mb-1">
                                Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_co_dau'] ?? ''}}</strong>
                            </p>
                            <p class="mb-1">
                                Số tài khoản: <strong>{{$couple['stk_co_dau'] ?? ''}}</strong>
                            </p>
                            <p class="mb-1">Chi nhánh: <strong>{{$couple['chi_nhanh_co_dau'] ?? ''}}</strong></p>

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
    </section>

    @if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
    <section class="py-5 wishes-section section-bg-affect" id="wishes">
        <div class="container-fluid">
            <h2 data-aos="fade-up" class="section-title text-center">
                {{ $custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}
            </h2>
            <div id="section-comment">
                <div class="p-3 mb-3 " id="show-comments">
                    <div class="box-comment p-3 mb-3">
                        <p id="comment-detail" class="m-0">
                            {{ $loicamta['content'] ?? 'Cảm ơn các bạn đã có mặt để buổi lễ của chúng tôi được thêm phần long trọng'}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="footer-section py-5 text-center section-bg-affect">
        <div class="container-fluid">
            <h3 class="title">Thank you!</h3>
            <h5 class="sub-title">-- {{$couple['ten_chu_re_ngan_gon'] ?? 'Kiến Văn'}} & {{$couple['ten_co_dau_ngan_gon'] ?? 'Việt Hoài'}} --</h5>
        </div>
    </section>
</div>
<div class="offcanvas offcanvas-end offcanvas-menu" tabindex="-1" id="offcanvasNavbar" data-bs-scroll="true"
     data-bs-backdrop="true" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
            <div class="offcanvas-header pb-4 pt-2 px-2 justify-content-end">
                <button type="button" class="btn-close p-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#video">Video Cưới</a>
            </li>
            <li class="nav-item">
                <a class="section-sub-title nav-link active" aria-current="page" href="#gallery">{{$custom['menu_album_hinh_cuoi'] ?? 'Album Hình cưới' }}</a>
            </li>
            @if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
                <li class="nav-item">
                    <a class="section-sub-title nav-link active" aria-current="page" href="#story">{{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="section-sub-title nav-link active" aria-current="page" href="#invitation">Lời Ngỏ</a>
            </li>
            @if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
                <li class="nav-item">
                    <a class="section-sub-title nav-link" href="#event">{{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="section-sub-title nav-link" href="#couple">Cô Dâu &amp; Chú Rể</a>
            </li>
            @if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
                <li class="nav-item">
                    <a class="section-sub-title nav-link" href="#people">{{$custom['menu_phu_dau_phu_re'] ?? 'Phù dâu & Phù rể' }}</a>
                </li>
            @endif
            @if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
                <li class="nav-item">
                    <a class="section-sub-title nav-link" href="#wishes">{{$custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="section-sub-title nav-link" href="#donate">{{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}</a>
            </li>
        </ul>
    </div>
</div>
<div class="py-5 donate-section donate-modal" id="donate-modal">
    <div class="container-fluid donate-modal-content">
        <span class="donate-modal-close text-danger">&times;</span>
        <div class="w-100 p-4">
            <h2 data-aos="fade-up" class="section-title text-body text-center m-0">
                {{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}
            </h2>
            <h3 data-aos="fade-up" class="section-sub-title text-body mb-4 text-center">
                Thật vui vì được gặp và đón tiếp các bạn trong một dịp đặc biệt như đám cưới của chúng tôi.
            </h3>
            <div class="row justify-content-center donate-box mb-1">
                <div data-aos="fade-right" class="col-6 px-4 mb-4">
                    <div class="donate-card p-4 rounded text-center">
                        <strong class="d-block sub-title mb-2 text-uppercase">Đến chú rể</strong>
                        <img class="qr-code-image m-auto mb-2" src="{{$couple['anh_qr_chu_re'] ?? ''}}">
                        <p class="mb-1">Ngân hàng: <strong>{{$couple['ten_ngan_hang_chu_re'] ?? ''}}</strong></p>
                        <p class="mb-1">
                            Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_chu_re'] ?? ''}}</strong>
                        </p>
                        <p class="mb-1">
                            Số tài khoản: <strong>{{$couple['stk_chu_re'] ?? ''}}</strong>
                        </p>
                        <p class="mb-1">Chi nhánh: <strong>{{$couple['chi_nhanh_chu_re'] ?? ''}}</strong></p>

                        <div class="cryptos-box-view">
                            <h5><span class="coin-img"></span> Địa chỉ <span class="coin-id"></span></h5>
                            <div>
                                <span class="coin-address"></span>
                                <div class="coin-qr-code"></div>
                            </div>
                            <button class="cryptos-box-view-close">Đóng</button>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="col-6 px-4">
                    <div class="donate-card p-4 rounded text-center">
                        <strong class="d-block sub-title mb-2 text-uppercase">Đến cô dâu</strong>
                        <img class="qr-code-image m-auto mb-2" src="{{$couple['anh_qr_co_dau'] ?? ''}}">
                        <p class="mb-1">Ngân hàng: <strong>{{$couple['ten_ngan_hang_co_dau'] ?? ''}}</strong></p>
                        <p class="mb-1">
                            Tên tài khoản: <strong>{{$couple['ten_chu_tai_khoan_co_dau'] ?? ''}}</strong>
                        </p>
                        <p class="mb-1">
                            Số tài khoản: <strong>{{$couple['stk_co_dau'] ?? ''}}</strong>
                        </p>
                        <p class="mb-1">Chi nhánh: <strong>{{$couple['chi_nhanh_co_dau'] ?? ''}}</strong></p>

                        <div class="cryptos-box-view">
                            <h5><span class="coin-img"></span> Địa chỉ ví <span class="coin-id text-body "></span></h5>
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
<div id="menu-access" class="">
    <div class="btn-menu-open">
        <i class="bi bi-list text-white"></i>
    </div>
    <div class="btn-menu-close">
        <i class="bi bi-x-lg text-white"></i>
    </div>
    <ul class="p-0 m-0 list-menu-icon">
        <li class="text-center">
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
    const biicore = {
        template_id: '643d7a25b332be031b02857c',
        templatePremium: ('1' === '1'),
        themeRoot:'https://preview.iwedding.info/templates/template130',
        webroot : 'https://preview.iwedding.info',
        coreSite: 'https://biihappy.com',
        webToken: '61990349db8f76231c132068',
        isPremium: ('1' === '1'),
        bgMusic: '{{$websiteInfo['nhac_website'] ?? "https://cdn.biihappy.com/ziiweb/wedding-musics/IDo-911.mp3"}}',
        alert: JSON.parse('{\"title\":\"L\\u1eddi c\\u1ea3m \\u01a1n t\\u1eeb D\\u00e2u & R\\u1ec3\",\"content\":\"Xin ch\\u00e2n th\\u00e0nh c\\u1ea3m \\u01a1n to\\u00e0n th\\u1ec3 m\\u1ecdi ng\\u01b0\\u1eddi \\u0111\\u00e3 g\\u1eedi l\\u1eddi ch\\u00fac cho v\\u1ee3 ch\\u1ed3ng ch\\u00fang em!\",\"timeout\":5000,\"status\":2,\"cancel_button_text\":\"\"}'),
        effect: JSON.parse('{\"type\":\"snow\"}'),
        isAutoPlay: ('1' === '1')
    };
</script>
<script src="{{asset('template23/js/calendar.js?v=20240713')}}"></script>
<script src="{{asset('template23/js/bii.js?v=20240713')}}"></script>
<script src="{{asset('template23/js/libs.js?v=20240713')}}"></script>
<script src="{{asset('template23/js/script.js?v=20240713')}}"></script>
<script src="{{asset('template23/js/insertTextAtCursor.js?v=20240713')}}"></script>
</body>
</html>
