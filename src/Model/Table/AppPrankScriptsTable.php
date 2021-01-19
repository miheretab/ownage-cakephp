<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AppPrankScripts Model
 *
 * @property \App\Model\Table\ExtsTable&\Cake\ORM\Association\BelongsTo $Exts
 * @property \App\Model\Table\DefaultAppCharactersTable&\Cake\ORM\Association\BelongsTo $DefaultAppCharacters
 * @property \App\Model\Table\AppCategoriesTable&\Cake\ORM\Association\BelongsToMany $AppCategories
 * @property \App\Model\Table\AppCharactersTable&\Cake\ORM\Association\BelongsToMany $AppCharacters
 *
 * @method \App\Model\Entity\AppPrankScript get($primaryKey, $options = [])
 * @method \App\Model\Entity\AppPrankScript newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AppPrankScript[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AppPrankScript|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AppPrankScript saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AppPrankScript patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AppPrankScript[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AppPrankScript findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AppPrankScriptsTable extends Table
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

        $this->setTable('app_prank_scripts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        /*$this->belongsTo('Exts', [
            'foreignKey' => 'ext_id',
            'joinType' => 'INNER',
        ]);*/
        $this->belongsTo('DefaultAppCharacters', [
            'foreignKey' => 'default_app_character_id',
        ]);
        $this->belongsToMany('AppCategories', [
            'foreignKey' => 'app_prank_script_id',
            'targetForeignKey' => 'app_category_id',
            'joinTable' => 'app_prank_scripts_app_categories',
        ]);
        $this->belongsToMany('AppCharacters', [
            'foreignKey' => 'app_prank_script_id',
            'targetForeignKey' => 'app_character_id',
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
            ->scalar('slug')
            ->maxLength('slug', 256)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->scalar('title')
            ->maxLength('title', 256)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->nonNegativeInteger('likes')
            ->allowEmptyString('likes');

        $validator
            ->nonNegativeInteger('our_likes')
            ->notEmptyString('our_likes');

        $validator
            ->nonNegativeInteger('our_dislikes')
            ->notEmptyString('our_dislikes');

        $validator
            ->nonNegativeInteger('our_favorites')
            ->notEmptyString('our_favorites');

        $validator
            ->nonNegativeInteger('views')
            ->allowEmptyString('views');

        $validator
            ->nonNegativeInteger('sent')
            ->requirePresence('sent', 'create')
            ->notEmptyString('sent');

        $validator
            ->nonNegativeInteger('our_sent')
            ->notEmptyString('our_sent');

        $validator
            ->nonNegativeInteger('prank_of_the_week')
            ->allowEmptyString('prank_of_the_week');

        $validator
            ->scalar('tags')
            ->maxLength('tags', 512)
            ->requirePresence('tags', 'create')
            ->notEmptyString('tags');

        $validator
            ->scalar('description')
            ->maxLength('description', 512)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('share_text')
            ->maxLength('share_text', 256)
            ->requirePresence('share_text', 'create')
            ->notEmptyString('share_text');

        $validator
            ->scalar('img_url')
            ->maxLength('img_url', 256)
            ->requirePresence('img_url', 'create')
            ->notEmptyString('img_url');

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
        $rules->add($rules->existsIn(['default_app_character_id'], 'DefaultAppCharacters'));

        return $rules;
    }
}
