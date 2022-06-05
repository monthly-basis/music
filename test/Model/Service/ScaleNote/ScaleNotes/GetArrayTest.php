<?php
namespace MonthlyBasis\MusicTest\Model\Service\ScaleNote\ScaleNotes;

use Laminas\Db\Adapter\Adapter;
use MonthlyBasis\Music\Model\Service as MusicService;
use MonthlyBasis\Music\Model\Table as MusicTable;
use PHPUnit\Framework\TestCase;

class GetArrayTest extends TestCase
{
    protected function setUp(): void
    {
        $this->scaleNoteTableMock = $this->createMock(
            MusicTable\ScaleNote::class
        );

        $this->getArrayService = new MusicService\ScaleNote\ScaleNotes\GetArray(
            $this->scaleNoteTableMock
        );
    }

    public function test_getArray()
    {
        $this->assertSame(
            [],
            $this->getArrayService->getArray(1, 4),
        );
    }
}
