<?php
namespace MonthlyBasis\MusicTest;

use MonthlyBasis\Music\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
