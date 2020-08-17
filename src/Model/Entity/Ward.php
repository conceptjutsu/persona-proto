<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ward Entity
 *
 * @property int $id
 * @property string $code
 * @property int $area_id
 *
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Station[] $stations
 */
class Ward extends Entity
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
        'code' => true,
        'area_id' => true,
        'area' => true,
        'stations' => true,
    ];
}
