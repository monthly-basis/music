<?php
namespace MonthlyBasis\Music\Model\Table;

use Laminas\Db\Adapter\Adapter;
use Laminas\Db\Adapter\Driver\Pdo\Result;

class ScaleNote
{
    protected Adapter $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function selectWhereScaleIdAndOctave(
        int $scaleId,
        int $octave
    ): Result {
        $sql = '
            SELECT *

              FROM `scale`

              JOIN `scale_note`
             USING (`scale_id`)

              JOIN `note`
                ON `note`.`key` = `scale_note`.`key`

             WHERE `scale`.`scale_id` = ?
               AND `note`.`octave` = ? + `scale_note`.`octave`

             ORDER
                BY `order`
                 ;
        ';
        $parameters = [
            $scaleId,
            $octave,
        ];
        return $this->adapter->query($sql)->execute($parameters);
    }
}
