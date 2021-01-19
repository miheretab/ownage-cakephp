<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AppCharacters Model
 *
 * @property \App\Model\Table\ExtsTable&\Cake\ORM\Association\BelongsTo $Exts
 * @property \App\Model\Table\AppPrankScriptsTable&\Cake\ORM\Association\BelongsToMany $AppPrankScripts
 *
 * @method \App\Model\Entity\AppCharacter get($primaryKey, $options = [])
 * @method \App\Model\Entity\AppCharacter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AppCharacter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AppCharacter|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AppCharacter saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AppCharacter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AppCharacter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AppCharacter findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AppCharactersTable extends Table
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

        $this->setTable('app_characters');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        /*$this->belongsTo('Exts', [
            'foreignKey' => 'ext_id',
            'joinType' => 'INNER',
        ]);*/
        $this->belongsToMany('AppPrankScripts', [
            'foreignKey' => 'app_character_id',
            'targetForeignKey' => 'app_prank_script_id',
            'joinTable' => 'app_prank_scripts_app_characters',
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 128)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->scalar('title')
            ->maxLength('title', 256)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->notEmptyString('is_influencer');

        $validator
            ->scalar('facebook_url')
            ->maxLength('facebook_url', 128)
            ->requirePresence('facebook_url', 'create')
            ->notEmptyString('facebook_url');

        $validator
            ->scalar('youtube_url')
            ->maxLength('youtube_url', 128)
            ->requirePresence('youtube_url', 'create')
            ->notEmptyString('youtube_url');

        $validator
            ->scalar('img_url')
            ->maxLength('img_url', 256)
            ->requirePresence('img_url', 'create')
            ->notEmptyString('img_url');

        $validator
            ->nonNegativeInteger('ord')
            ->requirePresence('ord', 'create')
            ->notEmptyString('ord');

        $validator
            ->scalar('data')
            ->requirePresence('data', 'create')
            ->notEmptyString('data');

        $validator
            ->dateTime('synced')
            ->requirePresence('synced', 'create')
            ->notEmptyDateTime('synced');

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
        $rules->add($rules->existsIn(['ext_id'], 'Exts'));

        return $rules;
    }
}
