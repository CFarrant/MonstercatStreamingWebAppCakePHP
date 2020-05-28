<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatalogAlbumTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatalogAlbumTable Test Case
 */
class CatalogAlbumTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatalogAlbumTable
     */
    protected $CatalogAlbum;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('CatalogAlbum') ? [] : ['className' => CatalogAlbumTable::class];
        $this->CatalogAlbum = TableRegistry::getTableLocator()->get('CatalogAlbum', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatalogAlbum);

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
}
