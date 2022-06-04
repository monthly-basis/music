<?php
namespace MonthlyBasis\Music;

use MonthlyBasis\Music\Model\Table as MusicTable;

class Module
{
    public function getServiceConfig()
    {
        return [
            'factories' => [
                MusicTable\ScaleNote::class => function ($sm) {
                    return new MusicTable\ScaleNote(
                        $sm->get('music')
                    );
                },
            ],
        ];
    }
}
