<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatalogArtistTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatalogArtistTable Test Case
 */
class CatalogArtistTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatalogArtistTable
     */
    protected $CatalogArtist;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CatalogArtist',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CatalogArtist') ? [] : ['className' => CatalogArtistTable::class];
        $this->CatalogArtist = TableRegistry::getTableLocator()->get('CatalogArtist', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatalogArtist);

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
