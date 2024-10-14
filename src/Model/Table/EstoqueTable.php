<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estoque Model
 *
 * @property \App\Model\Table\ProdutoTable&\Cake\ORM\Association\BelongsTo $Produto
 * @property \App\Model\Table\FuncionarioTable&\Cake\ORM\Association\BelongsTo $Funcionario
 *
 * @method \App\Model\Entity\Estoque newEmptyEntity()
 * @method \App\Model\Entity\Estoque newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Estoque> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estoque get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Estoque findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Estoque patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Estoque> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estoque|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Estoque saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Estoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estoque>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Estoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estoque> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Estoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estoque>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Estoque>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estoque> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EstoqueTable extends Table
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

        $this->setTable('estoque');
        $this->setDisplayField('tipo_operacao');
        $this->setPrimaryKey('id');

        $this->belongsTo('Produto', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Funcionario', [
            'foreignKey' => 'ifuncionario_id',
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
            ->integer('produto_id')
            ->notEmptyString('produto_id');

        $validator
            ->integer('ifuncionario_id')
            ->notEmptyString('ifuncionario_id');

        $validator
            ->dateTime('data_baixa')
            ->allowEmptyDateTime('data_baixa');

        $validator
            ->dateTime('data_lanc')
            ->allowEmptyDateTime('data_lanc');

        $validator
            ->scalar('tipo_operacao')
            ->maxLength('tipo_operacao', 2)
            ->requirePresence('tipo_operacao', 'create')
            ->notEmptyString('tipo_operacao');

        $validator
            ->integer('quant')
            ->requirePresence('quant', 'create')
            ->notEmptyString('quant');

        $validator
            ->scalar('obs')
            ->maxLength('obs', 30)
            ->allowEmptyString('obs');

        $validator
            ->integer('num_fiscal')
            ->allowEmptyString('num_fiscal');

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
        $rules->add($rules->existsIn(['produto_id'], 'Produto'), ['errorField' => 'produto_id']);
        $rules->add($rules->existsIn(['ifuncionario_id'], 'Funcionario'), ['errorField' => 'ifuncionario_id']);

        return $rules;
    }
}
