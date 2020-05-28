<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlbumTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlbumTable Test Case
 */
class AlbumTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlbumTable
     */
    protected $Album;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Album') ? [] : ['className' => AlbumTable::class];
        $this->Album = TableRegistry::getTableLocator()->get('Album', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Album);

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
