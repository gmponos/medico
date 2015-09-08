<?php
namespace App\Model\Table;

use App\Model\Entity\Visit;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visits Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Doctors
 * @property \Cake\ORM\Association\BelongsTo $Diagnoses
 * @property \Cake\ORM\Association\BelongsToMany $Medications
 */
class VisitsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('visits');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Doctors', [
            'foreignKey' => 'doctor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Diagnoses', [
            'foreignKey' => 'diagnose_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Medications', [
            'foreignKey' => 'visit_id',
            'targetForeignKey' => 'medication_id',
            'joinTable' => 'medications_visits'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('reason');

        $validator
            ->add('visited', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('visited');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['doctor_id'], 'Doctors'));
        $rules->add($rules->existsIn(['diagnose_id'], 'Diagnoses'));
        return $rules;
    }
}
