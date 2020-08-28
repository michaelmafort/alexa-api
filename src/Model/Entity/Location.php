<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Location Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string|null $type
 *
 * @property \App\Model\Entity\ParentLocation $parent_location
 * @property \App\Model\Entity\Ideb[] $ideb
 * @property \App\Model\Entity\IdebApprovalsAf[] $ideb_approvals_af
 * @property \App\Model\Entity\IdebApprovalsAi[] $ideb_approvals_ai
 * @property \App\Model\Entity\IdebApprovalsEm[] $ideb_approvals_em
 * @property \App\Model\Entity\IdebGrade[] $ideb_grades
 * @property \App\Model\Entity\IdebProjection[] $ideb_projections
 * @property \App\Model\Entity\ChildLocation[] $child_locations
 */
class Location extends Entity
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
        'parent_id' => true,
        'name' => true,
        'type' => true,
        'parent_location' => true,
        'ideb' => true,
        'ideb_approvals_af' => true,
        'ideb_approvals_ai' => true,
        'ideb_approvals_em' => true,
        'ideb_grades' => true,
        'ideb_projections' => true,
        'child_locations' => true,
    ];
}
