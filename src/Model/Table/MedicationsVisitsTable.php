<?php
namespace App\Model\Table;

use App\Model\Entity\MedicationsVisit;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MedicationsVisits Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Medications
 * @property \Cake\ORM\Association\BelongsTo $Visits
 */
class MedicationsVisitsTable extends Table
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

        $this->table('medications_visits');
        $this->displayField('medications_id');
        $this->primaryKey(['medications_id', 'visits_id']);

        $this->belongsTo('Medications', [
            'foreignKey' => 'medications_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Visits', [
            'foreignKey' => 'visits_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['medications_id'], 'Medications'));
        $rules->add($rules->existsIn(['visits_id'], 'Visits'));
        return $rules;
    }
}
