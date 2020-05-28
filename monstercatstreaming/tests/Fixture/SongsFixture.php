<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SongsFixture
 */
class SongsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'track_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'genre_primary' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'genre_secondary' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'song_id' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'url' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'title' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'track_number' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'autoIncrement' => null],
        'album_id' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'artist_name' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['track_id'], 'length' => []],
            'album_id_fk' => ['type' => 'foreign', 'columns' => ['album_id'], 'references' => ['albums', 'album_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'track_id' => 1,
                'genre_primary' => 'Lorem ipsum dolor sit amet',
                'genre_secondary' => 'Lorem ipsum dolor sit amet',
                'song_id' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'track_number' => 1,
                'album_id' => 'Lorem ipsum dolor sit amet',
                'artist_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
