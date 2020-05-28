<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SongTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SongTable Test Case
 */
class SongTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SongTable
     */
    protected $Song;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Song',
        'app.Songs',
        'app.Album',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Song') ? [] : ['className' => SongTable::class];
        $this->Song = TableRegistry::getTableLocator()->get('Song', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Song);

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
