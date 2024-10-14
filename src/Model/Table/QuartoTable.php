<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quarto Model
 *
 * @property \App\Model\Table\ReservaTable&\Cake\ORM\Association\HasMany $Reserva
 *
 * @method \App\Model\Entity\Quarto newEmptyEntity()
 * @method \App\Model\Entity\Quarto newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Quarto> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quarto get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Quarto findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Quarto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Quarto> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quarto|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Quarto saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Quarto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quarto>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quarto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quarto> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quarto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quarto>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quarto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quarto> deleteManyOrFail(iterable $entities, array $options = [])
 */
class QuartoTable extends Table
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

        $this->setTable('quarto');
        $this->setDisplayField('tipo_quarto');
        $this->setPrimaryKey('id');

        $this->hasMany('Reserva', [
            'foreignKey' => 'quarto_id',
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
            ->scalar('tipo_quarto')
            ->maxLength('tipo_quarto', 30)
            ->requirePresence('tipo_quarto', 'create')
            ->notEmptyString('tipo_quarto');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 150)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->integer('num_camas')
            ->requirePresence('num_camas', 'create')
            ->notEmptyString('num_camas');

        $validator
            ->decimal('valor_diaria')
            ->requirePresence('valor_diaria', 'create')
            ->notEmptyString('valor_diaria');

        $validator
            ->integer('num_quarto')
            ->requirePresence('num_quarto', 'create')
            ->notEmptyString('num_quarto');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
