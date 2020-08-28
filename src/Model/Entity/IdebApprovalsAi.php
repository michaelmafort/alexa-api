<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IdebApprovalsAi Entity
 *
 * @property int $id
 * @property int $location_id
 * @property int $year
 * @property float|null $aprov_total
 * @property float|null $aprov_1
 * @property float|null $aprov_2
 * @property float|null $aprov_3
 * @property float|null $aprov_4
 * @property float|null $aprov_5
 * @property float|null $rendimento
 * @property string|null $network
 *
 * @property \App\Model\Entity\Location $location
 */
class IdebApprovalsAi extends Entity
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
        'aprov_1' => true,
        'aprov_2' => true,
        'aprov_3' => true,
        'aprov_4' => true,
        'aprov_5' => true,
        'rendimento' => true,
        'network' => true,
        'location' => true,
    ];
}
