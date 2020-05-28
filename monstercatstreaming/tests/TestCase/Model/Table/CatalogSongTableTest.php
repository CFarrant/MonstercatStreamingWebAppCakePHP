<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatalogSongTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatalogSongTable Test Case
 */
class CatalogSongTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatalogSongTable
     */
    protected $CatalogSong;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CatalogSong',
        'app.Songs',
        'app.CatalogAlbum',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CatalogSong') ? [] : ['className' => CatalogSongTable::class];
        $this->CatalogSong = TableRegistry::getTableLocator()->get('CatalogSong', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatalogSong);

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
