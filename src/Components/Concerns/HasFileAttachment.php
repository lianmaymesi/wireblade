<?php

namespace Lianmaymesi\Wireblade\Components\Concerns;

use Illuminate\Support\Facades\Storage;

/**
 * It helps to attach the images
 */
trait HasFileAttachment
{
    public $photos = [];

    public function updatedValue($value)
    {
        $this->emit(self::EVENT_VALUE_UPDATED, $value);
    }

    public function completeUpload(string $uploadedUrl, string $trixUploadCompletedEvent)
    {
        foreach ($this->photos as $photo) {
            if ($photo->getFilename() == $uploadedUrl) {
                $newFilename = $photo->store('/', config('wireblade.file_storage_disk'));

                $this->dispatchBrowserEvent($trixUploadCompletedEvent, [
                    'url' => $newFilename,
                    'href' => $newFilename,
                ]);
            }
        }
    }
}
