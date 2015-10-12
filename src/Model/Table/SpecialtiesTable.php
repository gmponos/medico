<?php
namespace App\Model\Table;

use App\Model\Entity\Specialty;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Specialties Model
 *
 * @property \Cake\ORM\Association\HasMany $Doctors
 */
class SpecialtiesTable extends Table
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

        $this->table('specialties');
        $this->displayField('specialty');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Doctors', [
            'foreignKey' => 'specialty_id',
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
            ->requirePresence('specialty', 'create')
            ->notEmpty('specialty')
            ->add('specialty', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }
}
