<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdebProjectionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdebProjectionsTable Test Case
 */
class IdebProjectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdebProjectionsTable
     */
    protected $IdebProjections;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.IdebProjections',
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
        $config = $this->getTableLocator()->exists('IdebProjections') ? [] : ['className' => IdebProjectionsTable::class];
        $this->IdebProjections = $this->getTableLocator()->get('IdebProjections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->IdebProjections);

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
