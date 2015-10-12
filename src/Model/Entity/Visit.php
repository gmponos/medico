<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visit Entity.
 *
 * @property int $id
 * @property string|resource $reason
 * @property \Cake\I18n\Time $visited
 * @property int $doctor_id
 * @property \App\Model\Entity\Doctor $doctor
 * @property int $diagnose_id
 * @property \App\Model\Entity\Diagnosis $diagnosis
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Medication[] $medications
 */
class Visit extends Entity
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
