<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Manipulations;

class Watermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announce_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($announce_image_id)
    {
        $this->announce_image_id = $announce_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announce_image_id);
        if (!$i) {
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents(storage_path('app/public/' . $i->path));

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
           
        $image = SpatieImage::load($srcPath);
       
        $image->watermark(base_path('resources/img/Logo2.png'))
                ->watermarkPosition(Manipulations::POSITION_TOP_RIGHT)    
                ->watermarkWidth(20, Manipulations::UNIT_PERCENT)
                ->watermarkPadding(3,3, Manipulations::UNIT_PERCENT);
        $image->save($srcPath);     

    }

        
}

