<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatalogSongFixture
 */
class CatalogSongFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'catalog_song';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'track_id' => ['type' => 'integer', 'length' => 10, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'genre_primary' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'genre_secondary' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'song_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'url' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'track_number' => ['type' => 'integer', 'length' => 10, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'artist_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        'album_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
        '_indexes' => [
            'catalog_song_album_id_953c8e82' => ['type' => 'index', 'columns' => ['album_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['track_id'], 'length' => []],
            'catalog_song_album_id_953c8e82_fk_catalog_album_album_id' => ['type' => 'foreign', 'columns' => ['album_id'], 'references' => ['catalog_album', 'album_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'catalog_song_artist_name_a6579332_fk_catalog_artist_artist_name' => ['type' => 'foreign', 'columns' => ['artist_name'], 'references' => ['catalog_artist', 'artist_name'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'artist_name' => 'Lorem ipsum dolor sit amet',
                'album_id' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
