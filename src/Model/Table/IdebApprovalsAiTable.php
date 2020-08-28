<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IdebApprovalsAi Model
 *
 * @property \App\Model\Table\LocationsTable&\Cake\ORM\Association\BelongsTo $Locations
 *
 * @method \App\Model\Entity\IdebApprovalsAi newEmptyEntity()
 * @method \App\Model\Entity\IdebApprovalsAi newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi get($primaryKey, $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\IdebApprovalsAi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IdebApprovalsAiTable extends Table
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

        $this->setTable('ideb_approvals_ai');
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
            ->numeric('aprov_total')
            ->allowEmptyString('aprov_total');

        $validator
            ->numeric('aprov_1')
            ->allowEmptyString('aprov_1');

        $validator
            ->numeric('aprov_2')
            ->allowEmptyString('aprov_2');

        $validator
            ->numeric('aprov_3')
            ->allowEmptyString('aprov_3');

        $validator
            ->numeric('aprov_4')
            ->allowEmptyString('aprov_4');

        $validator
            ->numeric('aprov_5')
            ->allowEmptyString('aprov_5');

        $validator
            ->numeric('rendimento')
            ->allowEmptyString('rendimento');

        $validator
            ->scalar('network')
            ->maxLength('network', 45)
            ->allowEmptyString('network');

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
