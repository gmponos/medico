<?php
namespace App\Model\Table;

use App\Model\Entity\Hospital;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hospitals Model
 */
class HospitalsTable extends Table
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

        $this->table('hospitals');
        $this->displayField('hospital');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Doctors', [
            'foreignKey' => 'hospital_id',
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
            ->requirePresence('hospital', 'create')
            ->notEmpty('hospital')
            ->add('hospital', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }
}
