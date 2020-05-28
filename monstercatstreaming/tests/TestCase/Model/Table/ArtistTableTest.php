<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtistTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtistTable Test Case
 */
class ArtistTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtistTable
     */
    protected $Artist;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Artist',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Artist') ? [] : ['className' => ArtistTable::class];
        $this->Artist = TableRegistry::getTableLocator()->get('Artist', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Artist);

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
