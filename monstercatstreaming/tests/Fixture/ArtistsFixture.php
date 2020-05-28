<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtistsFixture
 */
class ArtistsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'artist_name' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'SQL_Latin1_General_CP1_CI_AS', 'precision' => null, 'comment' => null],
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
                'artist_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
