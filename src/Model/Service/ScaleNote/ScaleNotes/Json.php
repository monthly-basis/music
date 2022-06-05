<?php
namespace MonthlyBasis\Music\Model\Service\ScaleNote\ScaleNotes;

use MonthlyBasis\Music\Model\Service as MusicService;

class Json
{
    public function __construct(
        MusicService\ScaleNote\ScaleNotes\GetArray $getArrayService
    ) {
        $this->getArrayService = $getArrayService;
    }

    public function getJson(
        int $scaleId,
        int $octave
    ): string {
        $array = $this->getArrayService->getArray(
            $scaleId,
            $octave,
        );

        return json_encode($array);
    }
}
