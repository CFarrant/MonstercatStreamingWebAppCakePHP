<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtistFixture
 */
class ArtistFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'artist';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'artist_name' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['artist_name'], 'length' => []],
            'sqlite_autoindex_artist_1' => ['type' => 'unique', 'columns' => ['artist_name'], 'length' => []],
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
                'artist_name' => 'eb38dff9-f72b-4137-903c-8e5b9bc3b0d5',
            ],
        ];
        parent::init();
    }
}
