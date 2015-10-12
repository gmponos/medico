<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Treatment Entity.
 *
 * @property int $id
 * @property int $medication_id
 * @property \App\Model\Entity\Medication $medication
 * @property int $visit_id
 * @property \App\Model\Entity\Visit $visit
 * @property string|resource $treatment
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Treatment extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
