<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdebTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdebTable Test Case
 */
class IdebTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdebTable
     */
    protected $Ideb;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ideb',
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
        $config = $this->getTableLocator()->exists('Ideb') ? [] : ['className' => IdebTable::class];
        $this->Ideb = $this->getTableLocator()->get('Ideb', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ideb);

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
