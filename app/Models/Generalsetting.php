<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generalsetting extends Model
{
    use HasFactory;
    protected $table = 'general_settings';
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'years_experience',
        'projects_completed',
        'happy_clients',
        'about_title',
        'about_description_1',
        'about_description_2',
        'about_image',
        'cv_path',
        'contact_address',
        'contact_email',
        'contact_phone',
        'footer_copyright',
    ];
}
