<?php

namespace App\Models;

use App\Traits\Uuidable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Storage;

/**
 * @property array|UploadedFile|UploadedFile[]|mixed|null file
 */
class Image extends Model
{
    use HasFactory, Uuidable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'mime_type',
        'title',
        'code_number',
        'hash',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    protected $appends = ['url'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getFileNameAttribute()
    {
        return $this->uuid;
    }

    public function getFileExistsAttribute()
    {
        return Storage::disk('images')->exists($this->hash);
    }

    public function getFileAttribute()
    {
        return Storage::disk('images')->get($this->hash);
    }

    public function deleteFile()
    {
        return Storage::disk('images')->delete($this->hash);
    }

    public function setFileAttribute($fileContents)
    {
        Storage::disk('images')->putFileAs('', $fileContents, $this->hash);
    }

    public function getUrlAttribute()
    {
        if (!$this->fileExists) {
            return url('/images/broken.png');
        }

        return route(
            'image.request',
            [
                'image' => $this->uuid,
                'name'  => $this->name,
            ]
        );
    }

    public function getNameAttribute()
    {
        return $this->title;
    }
}
