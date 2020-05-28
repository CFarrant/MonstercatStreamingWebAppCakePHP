<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Song Entity
 *
 * @property int $track_id
 * @property string $genre_primary
 * @property string $genre_secondary
 * @property string $song_id
 * @property string $url
 * @property string $title
 * @property int $track_number
 * @property string $album_id
 * @property string $artist_name
 *
 * @property \App\Model\Entity\Song[] $songs
 * @property \App\Model\Entity\Album $album
 */
class Song extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'genre_primary' => true,
        'genre_secondary' => true,
        'song_id' => true,
        'url' => true,
        'title' => true,
        'track_number' => true,
        'album_id' => true,
        'artist_name' => true,
        'songs' => true,
        'album' => true,
    ];
}
