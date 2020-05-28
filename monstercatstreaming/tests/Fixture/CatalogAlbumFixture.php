<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatalogAlbumFixture
 */
class CatalogAlbumFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'catalog_album';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'album_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'cover_url' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'genre_primary' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'genre_secondary' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'release_code' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'type' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'artist_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['album_id'], 'length' => []],
            'catalog_album_artist_name_fcc8da6e_fk_catalog_artist_artist_name' => ['type' => 'foreign', 'columns' => ['artist_name'], 'references' => ['catalog_artist', 'artist_name'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'album_id' => '6ca8781f-a833-43c3-be3a-9ef806c3d1a3',
                'cover_url' => 'Lorem ipsum dolor sit amet',
                'genre_primary' => 'Lorem ipsum dolor sit amet',
                'genre_secondary' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'release_code' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'artist_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
