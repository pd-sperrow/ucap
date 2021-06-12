<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// spatie media add
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;

class StudentAdditionalDoc extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    //get user
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }




    public function registerMediaCollections(): void
    {
        // $this->addMediaCollection('avatar')
        //     ->acceptsFile(function (File $file) {
        //         return $file->mimeType === 'image/jpeg';
        //     });

        $this->addMediaCollection('document')
            ->acceptsFile(function (File $file) {
                return $file->mimeType === 'application/pdf';
            });
    }
}
