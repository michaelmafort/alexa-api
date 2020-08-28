<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdebGradesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdebGradesTable Test Case
 */
class IdebGradesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdebGradesTable
     */
    protected $IdebGrades;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.IdebGrades',
        'app.Locations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('IdebGrades') ? [] : ['className' => IdebGradesTable::class];
        $this->IdebGrades = $this->getTableLocator()->get('IdebGrades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->IdebGrades);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
