<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdebApprovalsAiTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdebApprovalsAiTable Test Case
 */
class IdebApprovalsAiTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdebApprovalsAiTable
     */
    protected $IdebApprovalsAi;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.IdebApprovalsAi',
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
        $config = $this->getTableLocator()->exists('IdebApprovalsAi') ? [] : ['className' => IdebApprovalsAiTable::class];
        $this->IdebApprovalsAi = $this->getTableLocator()->get('IdebApprovalsAi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->IdebApprovalsAi);

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
