<?php
namespace MonthlyBasis\MusicTest\Model\Table;

use Laminas\Db\Adapter\Adapter;
use MonthlyBasis\LaminasTest\TableTestCase;
use MonthlyBasis\Music\Model\Table as MusicTable;

class ScaleNoteTest extends TableTestCase
{
    protected function setUp(): void
    {
        $this->setForeignKeyChecks(0);
        $this->dropAndCreateTables(['note', 'scale', 'scale_note']);
        $this->setForeignKeyChecks(1);

        $this->scaleNoteTable = new MusicTable\ScaleNote($this->getAdapter());
    }

    public function test_selectWhereScaleIdAndOctave()
    {
        $this->scaleNoteTable->selectWhereScaleIdAndOctave(1, 4);
    }
}
