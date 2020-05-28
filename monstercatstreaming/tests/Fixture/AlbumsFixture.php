<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlbumsFixture
 */
class AlbumsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'album_id' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'cover_url' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'genre_primary' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'genre_secondary' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'name' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'release_code' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'type' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'artist_name' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['album_id'], 'length' => []],
            'sqlite_autoindex_albums_1' => ['type' => 'unique', 'columns' => ['album_id'], 'length' => []],
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
                'album_id' => 'f7054ec3-dcbd-4e12-88f4-3f25645f73a8',
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
