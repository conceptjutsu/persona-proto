<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stations Model
 *
 * @property \App\Model\Table\WardsTable&\Cake\ORM\Association\BelongsTo $Wards
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Station get($primaryKey, $options = [])
 * @method \App\Model\Entity\Station newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Station[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Station|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Station saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Station patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Station[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Station findOrCreate($search, callable $callback = null, $options = [])
 */
class StationsTable extends Table
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

        $this->setTable('stations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Wards', [
            'foreignKey' => 'ward_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'station_id',
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
            ->scalar('name')
            ->maxLength('name', 64)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

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
        $rules->add($rules->existsIn(['ward_id'], 'Wards'));

        return $rules;
    }
}
