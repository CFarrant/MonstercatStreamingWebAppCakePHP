<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SongsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SongsTable Test Case
 */
class SongsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SongsTable
     */
    protected $Songs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Songs',
        'app.Albums',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Songs') ? [] : ['className' => SongsTable::class];
        $this->Songs = TableRegistry::getTableLocator()->get('Songs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Songs);

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
