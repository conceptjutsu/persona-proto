<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher; // Add this line
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $email
 * @property \Cake\I18n\FrozenTime|null $email_verified_at
 * @property int|null $phone
 * @property string|null $password
 * @property bool $first_time_voter
 * @property string|null $id_number
 * @property \Cake\I18n\FrozenDate|null $date_of_birth
 * @property int|null $gender_id
 * @property string $street_address
 * @property string|null $house_address
 * @property string|null $town
 * @property string|null $city
 * @property int|null $postcode
 * @property int|null $role_id
 * @property int $status_id
 * @property int|null $station_id
 * @property int|null $parent_id
 * @property bool $is_active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Gender $gender
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Station $station
 * @property \App\Model\Entity\ParentUser $parent_user
 * @property \App\Model\Entity\ChildUser[] $child_users
 */
class User extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'email_verified_at' => true,
        'phone' => true,
        'password' => true,
        'first_time_voter' => true,
        'id_number' => true,
        'date_of_birth' => true,
        'gender_id' => true,
        'street_address' => true,
        'house_address' => true,
        'town' => true,
        'city' => true,
        'postcode' => true,
        'role_id' => true,
        'status_id' => true,
        'station_id' => true,
        'parent_id' => true,
        'is_active' => true,
        'created' => true,
        'modified' => true,
        'gender' => true,
        'role' => true,
        'status' => true,
        'station' => true,
        'parent_user' => true,
        'child_users' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

        protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
