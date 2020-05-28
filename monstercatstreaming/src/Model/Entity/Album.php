<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Album Entity
 *
 * @property string $album_id
 * @property string $cover_url
 * @property string $genre_primary
 * @property string $genre_secondary
 * @property string $name
 * @property string|null $release_code
 * @property string $type
 * @property string $artist_name
 */
class Album extends Entity
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
        'cover_url' => true,
        'genre_primary' => true,
        'genre_secondary' => true,
        'name' => true,
        'release_code' => true,
        'type' => true,
        'artist_name' => true,
    ];
}
