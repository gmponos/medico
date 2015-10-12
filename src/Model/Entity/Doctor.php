<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doctor Entity.
 *
 * @property int                         $id
 * @property string                      $firstname
 * @property string                      $lastname
 * @property int                         $specialty_id
 * @property \App\Model\Entity\Specialty $specialty
 * @property string                      $address
 * @property string                      $phone
 * @property string                      $city
 * @property string                      $cellphone
 * @property \Cake\I18n\Time             $created
 * @property \Cake\I18n\Time             $modified
 * @property \App\Model\Entity\Visit[]   $visits
 */
class Doctor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    /**
     * @return string
     */
    protected function _getFullname()
    {
        return $this->_properties['lastname'] . '  ' . $this->_properties['firstname'];
    }
}
