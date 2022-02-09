<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class AboutUs extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'aboutuses';

    protected $appends = [
        'phote',
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'breif',
        'description',
        'email_1',
        'email_2',
        'vision',
        'goals',
        'phone_1',
        'phone_2',
        'address',
        'time',
        'facebook',
        'twitter',
        'instegram',
        'youtube',
        'linkedin',
        'services_text',
        'projects_text',
        'products_text',
        'news_text',
        'contact_text',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
        $this->addMediaConversion('preview2')->fit('crop', 445, 528);
        $this->addMediaConversion('logo')->fit('crop', 275, 67);
    }

    public function getPhoteAttribute()
    {
        $file = $this->getMedia('phote')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
            $file->preview2   = $file->getUrl('preview2');
        }

        return $file;
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
            $file->logo   = $file->getUrl('logo');
        }

        return $file;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
