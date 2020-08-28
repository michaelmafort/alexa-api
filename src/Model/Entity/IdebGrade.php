<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IdebGrade Entity
 *
 * @property int $id
 * @property int $location_id
 * @property int $year
 * @property float|null $mat
 * @property float|null $lp
 * @property float|null $avg
 * @property string $network
 * @property string $stage
 *
 * @property \App\Model\Entity\Location $location
 */
class IdebGrade extends Entity
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
        'location_id' => true,
        'year' => true,
        'mat' => true,
        'lp' => true,
        'avg' => true,
        'network' => true,
        'stage' => true,
        'location' => true,
    ];
}
