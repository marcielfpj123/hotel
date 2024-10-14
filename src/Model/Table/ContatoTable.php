<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contato Model
 *
 * @property \App\Model\Table\ClienteTable&\Cake\ORM\Association\BelongsTo $Cliente
 * @property \App\Model\Table\FuncionarioTable&\Cake\ORM\Association\BelongsTo $Funcionario
 *
 * @method \App\Model\Entity\Contato newEmptyEntity()
 * @method \App\Model\Entity\Contato newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Contato> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contato get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Contato findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Contato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Contato> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contato|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Contato saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Contato>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contato>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Contato>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contato> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Contato>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contato>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Contato>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Contato> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ContatoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('contato');
        $this->setDisplayField('numero_telefone');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cliente', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->belongsTo('Funcionario', [
            'foreignKey' => 'funcionario_id',
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
            ->integer('cliente_id')
            ->allowEmptyString('cliente_id');

        $validator
            ->integer('funcionario_id')
            ->allowEmptyString('funcionario_id');

        $validator
            ->scalar('numero_telefone')
            ->maxLength('numero_telefone', 20)
            ->requirePresence('numero_telefone', 'create')
            ->notEmptyString('numero_telefone');

        $validator
            ->scalar('tipo_contato')
            ->maxLength('tipo_contato', 20)
            ->requirePresence('tipo_contato', 'create')
            ->notEmptyString('tipo_contato');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Cliente'), ['errorField' => 'cliente_id']);
        $rules->add($rules->existsIn(['funcionario_id'], 'Funcionario'), ['errorField' => 'funcionario_id']);

        return $rules;
    }
}
