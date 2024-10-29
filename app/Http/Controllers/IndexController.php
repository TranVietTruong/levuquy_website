<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\CoupleInformation;
use App\Models\LoiCamTa;
use App\Models\LoveStory;
use App\Models\PhuDau;
use App\Models\Setup;
use App\Models\SuKienCuoi;
use App\Models\WebsiteInformation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        $host = $request->getHost();
        $arr_host = explode('.', $host);
        $subDomain = $arr_host[0] ?? null;

        $websiteInfo = WebsiteInformation::where('link_website', $subDomain)->first();
        if (!$websiteInfo) {
            return abort(404);
        }
        $templateView = 'template1';
        $templateId = 1;
        if ($websiteInfo && $websiteInfo->template_id) {
            $templateView = 'template'.$websiteInfo->template_id;
            $templateId = $websiteInfo->template_id;
        }

        $custom = Setup::where('user_id', 1)->where('template_id', $templateId)->first();
        if ($custom) {
            $customData = json_decode($custom->data, true);
        } else {
            $customData = [];
        }
        $couple = CoupleInformation::where('user_id', 1)->first();
        $loveStories = LoveStory::where('user_id', 1)->orderBy('order')->get();
        $events = SuKienCuoi::where('user_id', 1)->orderBy('order')->get();
        $phudau = PhuDau::where('user_id', 1)->first();
        $albums = Album::where('user_id', 1)->orderBy('order')->get();
        $loicamta = LoiCamTa::where('user_id', 1)->first();

        $logo1 = 'V';
        $logo2 = 'H';
        if ($couple) {
            if ($couple->ten_chu_re_ngan_gon) {
                try {
                    $ten = trim($couple->ten_chu_re_ngan_gon);
                    $arrTmp = explode(' ', $ten);
                    $lastWord = $arrTmp[count($arrTmp) - 1];
                    $firstCharacter = substr($lastWord, 0, 1);
                    $logo1 = $firstCharacter;
                } catch (\Exception $e) {

                }
            }

            if ($couple->ten_co_dau_ngan_gon) {
                try {
                    $ten = trim($couple->ten_co_dau_ngan_gon);
                    $arrTmp = explode(' ', $ten);
                    $lastWord = $arrTmp[count($arrTmp) - 1];
                    $firstCharacter = substr($lastWord, 0, 1);
                    $logo2 = $firstCharacter;
                } catch (\Exception $exception) {

                }
            }
        }
        $day = null;
        if (isset($websiteInfo['ngay_cuoi'])) {
            $day = Carbon::parse($websiteInfo['ngay_cuoi'])->day;
        }

        return view($templateView, [
            'websiteInfo' => $websiteInfo,
            'custom' => $customData,
            'couple' => $couple,
            'loveStories' => $loveStories,
            'events' => $events,
            'phudau' => $phudau,
            'albums' => $albums,
            'loicamta' => $loicamta,
            'logo1' => $logo1,
            'logo2' => $logo2,
            'day' => $day
        ]);
    }

    public function preview($template) {
        return view('preview.'.$template);
    }
}
