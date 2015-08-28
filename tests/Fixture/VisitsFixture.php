<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisitsFixture
 *
 */
class VisitsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'reason' => ['type' => 'binary', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'visited' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'doctor_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'diagnose_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'updated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_visits_doctors1_idx' => ['type' => 'index', 'columns' => ['doctor_id'], 'length' => []],
            'fk_visits_diagnoses1_idx' => ['type' => 'index', 'columns' => ['diagnose_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_visits_diagnoses1' => ['type' => 'foreign', 'columns' => ['diagnose_id'], 'references' => ['diagnoses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_visits_doctors1' => ['type' => 'foreign', 'columns' => ['doctor_id'], 'references' => ['doctors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'reason' => 'Lorem ipsum dolor sit amet',
            'visited' => '2015-08-25 19:43:53',
            'doctor_id' => 1,
            'diagnose_id' => 1,
            'created' => '2015-08-25 19:43:53',
            'updated' => '2015-08-25 19:43:53'
        ],
    ];
}
