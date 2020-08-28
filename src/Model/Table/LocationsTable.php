<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locations Model
 *
 * @property \App\Model\Table\LocationsTable&\Cake\ORM\Association\BelongsTo $ParentLocations
 * @property \App\Model\Table\IdebTable&\Cake\ORM\Association\HasMany $Ideb
 * @property \App\Model\Table\IdebApprovalsAfTable&\Cake\ORM\Association\HasMany $IdebApprovalsAf
 * @property \App\Model\Table\IdebApprovalsAiTable&\Cake\ORM\Association\HasMany $IdebApprovalsAi
 * @property \App\Model\Table\IdebApprovalsEmTable&\Cake\ORM\Association\HasMany $IdebApprovalsEm
 * @property \App\Model\Table\IdebGradesTable&\Cake\ORM\Association\HasMany $IdebGrades
 * @property \App\Model\Table\IdebProjectionsTable&\Cake\ORM\Association\HasMany $IdebProjections
 * @property \App\Model\Table\LocationsTable&\Cake\ORM\Association\HasMany $ChildLocations
 *
 * @method \App\Model\Entity\Location newEmptyEntity()
 * @method \App\Model\Entity\Location newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Location[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Location get($primaryKey, $options = [])
 * @method \App\Model\Entity\Location findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Location patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Location[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Location|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Location saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Location[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Location[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Location[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Location[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LocationsTable extends Table
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

        $this->setTable('locations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentLocations', [
            'className' => 'Locations',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('Ideb', [
            'foreignKey' => 'location_id',
        ]);
        $this->hasMany('IdebApprovalsAf', [
            'foreignKey' => 'location_id',
        ]);
        $this->hasMany('IdebApprovalsAi', [
            'foreignKey' => 'location_id',
        ]);
        $this->hasMany('IdebApprovalsEm', [
            'foreignKey' => 'location_id',
        ]);
        $this->hasMany('IdebGrades', [
            'foreignKey' => 'location_id',
        ]);
        $this->hasMany('IdebProjections', [
            'foreignKey' => 'location_id',
        ]);
        $this->hasMany('ChildLocations', [
            'className' => 'Locations',
            'foreignKey' => 'parent_id',
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
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('type')
            ->maxLength('type', 45)
            ->allowEmptyString('type');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentLocations'), ['errorField' => 'parent_id']);

        return $rules;
    }
}
