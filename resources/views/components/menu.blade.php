<ul class="nav navbar-nav navbar-right" id="responsive-menu">
    <li class="active">
        <a href="#wd-banner"> {{$custom['menu_home'] ?? 'Home' }}</a>
    </li>
    <li class="active">
        <a href="#about-us">{{$custom['menu_cap_doi'] ?? 'Cặp đôi' }}</a>
    </li>

    @if(isset($websiteInfo['cau_chuyen_tinh_yeu']) && $websiteInfo['cau_chuyen_tinh_yeu'])
    <li class="active">
        <a href="#our-story">{{$custom['menu_cau_chuyen_tinh_yeu'] ?? 'Chuyện tình yêu' }}</a>
    </li>
    @endif

    @if(isset($websiteInfo['su_kien_cuoi']) && $websiteInfo['su_kien_cuoi'])
    <li class="active">
        <a href="#wedding-event">{{$custom['menu_su_kien_cuoi'] ?? 'Sự kiện cưới' }}</a>
    </li>
    @endif

    @if(isset($websiteInfo['phu_dau_phu_re']) && $websiteInfo['phu_dau_phu_re'])
    <li class="active">
        <a href="#imp-people">{{$custom['menu_phu_dau_phu_re'] ?? 'Phù dâu & Phù rể' }}</a>
    </li>
    @endif

    @if(isset($websiteInfo['album']) && $websiteInfo['album'])
    <li class="active">
        <a href="#the-gallery">{{$custom['menu_album_hinh_cuoi'] ?? 'Album Hình cưới' }}</a>
    </li>
    @endif

    @if(isset($websiteInfo['loi_cam_ta']) && $websiteInfo['loi_cam_ta'])
    <li class="active">
        <a href="#rsvp">{{$custom['menu_loi_cam_ta'] ?? 'Lời cảm tạ' }}</a>
    </li>
    @endif

    <li class="active">
        <a href="javascript:void(0)" class="buttonDonate">{{$custom['menu_mung_cuoi'] ?? 'Mừng cưới' }}</a>
    </li>
</ul>
