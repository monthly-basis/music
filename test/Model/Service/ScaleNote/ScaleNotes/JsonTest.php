<?php
namespace MonthlyBasis\MusicTest\Model\Service\ScaleNote\ScaleNotes;

use Laminas\Db\Adapter\Adapter;
use MonthlyBasis\Music\Model\Service as MusicService;
use MonthlyBasis\Music\Model\Table as MusicTable;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    protected function setUp(): void
    {
        $this->getArrayServiceMock = $this->createMock(
            MusicService\ScaleNote\ScaleNotes\GetArray::class
        );

        $this->jsonService = new MusicService\ScaleNote\ScaleNotes\Json(
            $this->getArrayServiceMock
        );
    }

    public function test_getJson()
    {
        $this->assertSame(
            '[]',
            $this->jsonService->getJson(1, 4),
        );
    }
}
