<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Songs Model
 *
 * @property \App\Model\Table\SongsTable&\Cake\ORM\Association\BelongsTo $Songs
 * @property \App\Model\Table\AlbumsTable&\Cake\ORM\Association\BelongsTo $Albums
 * @property \App\Model\Table\SongsTable&\Cake\ORM\Association\HasMany $Songs
 *
 * @method \App\Model\Entity\Song newEmptyEntity()
 * @method \App\Model\Entity\Song newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Song[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Song get($primaryKey, $options = [])
 * @method \App\Model\Entity\Song findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Song patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Song[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Song|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SongsTable extends Table
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

        $this->setTable('songs');
        $this->setDisplayField('title');
        $this->setPrimaryKey('track_id');

        $this->belongsTo('Songs', [
            'foreignKey' => 'song_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Albums', [
            'foreignKey' => 'album_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Songs', [
            'foreignKey' => 'song_id',
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
            ->integer('track_id')
            ->allowEmptyString('track_id', null, 'create');

        $validator
            ->scalar('genre_primary')
            ->requirePresence('genre_primary', 'create')
            ->notEmptyString('genre_primary');

        $validator
            ->scalar('genre_secondary')
            ->requirePresence('genre_secondary', 'create')
            ->notEmptyString('genre_secondary');

        $validator
            ->scalar('url')
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->scalar('title')
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->integer('track_number')
            ->requirePresence('track_number', 'create')
            ->notEmptyString('track_number');

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
        $rules->add($rules->existsIn(['song_id'], 'Songs'));
        $rules->add($rules->existsIn(['album_id'], 'Albums'));

        return $rules;
    }
}
