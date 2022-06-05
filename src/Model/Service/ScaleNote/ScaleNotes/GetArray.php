<?php
namespace MonthlyBasis\Music\Model\Service\ScaleNote\ScaleNotes;

use MonthlyBasis\Music\Model\Table as MusicTable;

class GetArray
{
    public function __construct(
        MusicTable\ScaleNote $scaleNoteTable
    ) {
        $this->scaleNoteTable = $scaleNoteTable;
    }

    public function getArray(
        int $scaleId,
        int $octave
    ): array {
        $scaleNotesArray = [];

        $result = $this->scaleNoteTable->selectWhereScaleIdAndOctave(
            $scaleId,
            $octave,
        );
        foreach ($result as $rowArray) {
            $scaleNotesArray[] = $rowArray;
        }

        return $scaleNotesArray;
    }
}
