<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteInformation extends Model
{
    use HasFactory;

    protected $table = 'website_informations';

    protected $fillable = [
        'user_id',
        'template_id',
        'link_website',
        'anh_website',
        'nhac_website',
        'ten_website',
        'mo_ta_website',
        'ngay_cuoi',
        'video_cuoi',
        'id_video_cuoi'
    ];
}
