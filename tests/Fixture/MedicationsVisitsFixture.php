<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedicationsVisitsFixture
 *
 */
class MedicationsVisitsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'medications_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'visits_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_medications_has_visits_visits1_idx' => ['type' => 'index', 'columns' => ['visits_id'], 'length' => []],
            'fk_medications_has_visits_medications1_idx' => ['type' => 'index', 'columns' => ['medications_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['medications_id', 'visits_id'], 'length' => []],
            'fk_medications_has_visits_medications1' => ['type' => 'foreign', 'columns' => ['medications_id'], 'references' => ['medications', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_medications_has_visits_visits1' => ['type' => 'foreign', 'columns' => ['visits_id'], 'references' => ['visits', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'medications_id' => 1,
            'visits_id' => 1
        ],
    ];
}
