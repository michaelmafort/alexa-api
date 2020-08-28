<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IdebGrades Model
 *
 * @property \App\Model\Table\LocationsTable&\Cake\ORM\Association\BelongsTo $Locations
 *
 * @method \App\Model\Entity\IdebGrade newEmptyEntity()
 * @method \App\Model\Entity\IdebGrade newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\IdebGrade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IdebGrade get($primaryKey, $options = [])
 * @method \App\Model\Entity\IdebGrade findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\IdebGrade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IdebGrade[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\IdebGrade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IdebGrade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IdebGrade[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\IdebGrade[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\IdebGrade[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\IdebGrade[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IdebGradesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ideb_grades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('year')
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->numeric('mat')
            ->allowEmptyString('mat');

        $validator
            ->numeric('lp')
            ->allowEmptyString('lp');

        $validator
            ->numeric('avg')
            ->allowEmptyString('avg');

        $validator
            ->scalar('network')
            ->maxLength('network', 30)
            ->requirePresence('network', 'create')
            ->notEmptyString('network');

        $validator
            ->scalar('stage')
            ->maxLength('stage', 2)
            ->requirePresence('stage', 'create')
            ->notEmptyString('stage');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['location_id'], 'Locations'), ['errorField' => 'location_id']);

        return $rules;
    }
}
