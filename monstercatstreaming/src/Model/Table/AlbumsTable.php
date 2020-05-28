<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Albums Model
 *
 * @method \App\Model\Entity\Album newEmptyEntity()
 * @method \App\Model\Entity\Album newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Album[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Album get($primaryKey, $options = [])
 * @method \App\Model\Entity\Album findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Album patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Album[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Album|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Album saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Album[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Album[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Album[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Album[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlbumsTable extends Table
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

        $this->setTable('albums');
        $this->setDisplayField('name');
        $this->setPrimaryKey('album_id');
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
            ->scalar('album_id')
            ->allowEmptyString('album_id', null, 'create')
            ->add('album_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('cover_url')
            ->requirePresence('cover_url', 'create')
            ->notEmptyString('cover_url');

        $validator
            ->scalar('genre_primary')
            ->requirePresence('genre_primary', 'create')
            ->notEmptyString('genre_primary');

        $validator
            ->scalar('genre_secondary')
            ->requirePresence('genre_secondary', 'create')
            ->notEmptyString('genre_secondary');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('release_code')
            ->allowEmptyString('release_code');

        $validator
            ->scalar('type')
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('artist_name')
            ->requirePresence('artist_name', 'create')
            ->notEmptyString('artist_name');

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
        $rules->add($rules->isUnique(['album_id']));

        return $rules;
    }
}
