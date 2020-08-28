<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IdebApprovalsAf Entity
 *
 * @property int $id
 * @property int $location_id
 * @property int $year
 * @property float|null $aprov_total
 * @property float|null $aprov_6
 * @property float|null $aprov_7
 * @property float|null $aprov_8
 * @property float|null $aprov_9
 * @property float|null $rendimento
 * @property string $network
 *
 * @property \App\Model\Entity\Location $location
 */
class IdebApprovalsAf extends Entity
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
        'aprov_total' => true,
        'aprov_6' => true,
        'aprov_7' => true,
        'aprov_8' => true,
        'aprov_9' => true,
        'rendimento' => true,
        'network' => true,
        'location' => true,
    ];
}
