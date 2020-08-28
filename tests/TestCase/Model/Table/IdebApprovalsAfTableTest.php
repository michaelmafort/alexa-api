<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdebApprovalsAfTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdebApprovalsAfTable Test Case
 */
class IdebApprovalsAfTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdebApprovalsAfTable
     */
    protected $IdebApprovalsAf;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.IdebApprovalsAf',
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
        $config = $this->getTableLocator()->exists('IdebApprovalsAf') ? [] : ['className' => IdebApprovalsAfTable::class];
        $this->IdebApprovalsAf = $this->getTableLocator()->get('IdebApprovalsAf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->IdebApprovalsAf);

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
