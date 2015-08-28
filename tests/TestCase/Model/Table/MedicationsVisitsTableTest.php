<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedicationsVisitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedicationsVisitsTable Test Case
 */
class MedicationsVisitsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.medications_visits',
        'app.medications',
        'app.visits',
        'app.doctors',
        'app.specialties',
        'app.diagnoses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MedicationsVisits') ? [] : ['className' => 'App\Model\Table\MedicationsVisitsTable'];
        $this->MedicationsVisits = TableRegistry::get('MedicationsVisits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MedicationsVisits);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
