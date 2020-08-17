<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wards Model
 *
 * @property \App\Model\Table\AreasTable&\Cake\ORM\Association\BelongsTo $Areas
 * @property \App\Model\Table\StationsTable&\Cake\ORM\Association\HasMany $Stations
 *
 * @method \App\Model\Entity\Ward get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ward newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ward[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ward|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ward saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ward patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ward[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ward findOrCreate($search, callable $callback = null, $options = [])
 */
class WardsTable extends Table
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

        $this->setTable('wards');
        $this->setDisplayField('code');
        $this->setPrimaryKey('id');

        $this->belongsTo('Areas', [
            'foreignKey' => 'area_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Stations', [
            'foreignKey' => 'ward_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('code')
            ->maxLength('code', 4)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

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
        $rules->add($rules->existsIn(['area_id'], 'Areas'));

        return $rules;
    }
}
