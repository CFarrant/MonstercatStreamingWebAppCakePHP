<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatalogArtistFixture
 */
class CatalogArtistFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'catalog_artist';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'artist_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['artist_name'], 'length' => []],
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'artist_name' => 'c819b3f9-5a61-4d41-bfeb-237410fc4463',
            ],
        ];
        parent::init();
    }
}
