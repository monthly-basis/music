<?php
namespace MonthlyBasis\Music;

use MonthlyBasis\Music\Model\Service as MusicService;
use MonthlyBasis\Music\Model\Table as MusicTable;

class Module
{
    public function getServiceConfig()
    {
        return [
            'factories' => [
                MusicService\ScaleNote\ScaleNotes\GetArray::class => function ($sm) {
                    return new MusicService\ScaleNote\ScaleNotes\GetArray(
                        $sm->get(MusicTable\ScaleNote::class)
                    );
                },
                MusicService\ScaleNote\ScaleNotes\Json::class => function ($sm) {
                    return new MusicService\ScaleNote\ScaleNotes\Json(
                        $sm->get(MusicService\ScaleNote\ScaleNotes\GetArray::class),
                    );
                },
                MusicTable\ScaleNote::class => function ($sm) {
                    return new MusicTable\ScaleNote(
                        $sm->get('music')
                    );
                },
            ],
        ];
    }
}
