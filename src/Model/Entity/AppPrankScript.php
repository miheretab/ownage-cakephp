<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AppPrankScript Entity
 *
 * @property int $id
 * @property string $ext_id
 * @property string $slug
 * @property string $title
 * @property int|null $likes
 * @property int $our_likes
 * @property int $our_dislikes
 * @property int $our_favorites
 * @property int|null $views
 * @property int $sent
 * @property int $our_sent
 * @property int|null $prank_of_the_week
 * @property string $tags
 * @property string $description
 * @property string $share_text
 * @property string $img_url
 * @property int|null $default_app_character_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $synced
 *
 * @property \App\Model\Entity\Ext $ext
 * @property \App\Model\Entity\DefaultAppCharacter $default_app_character
 * @property \App\Model\Entity\AppCategory[] $app_categories
 * @property \App\Model\Entity\AppCharacter[] $app_characters
 */
class AppPrankScript extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'ext_id' => true,
        'slug' => true,
        'title' => true,
        'likes' => true,
        'our_likes' => true,
        'our_dislikes' => true,
        'our_favorites' => true,
        'views' => true,
        'sent' => true,
        'our_sent' => true,
        'prank_of_the_week' => true,
        'tags' => true,
        'description' => true,
        'share_text' => true,
        'img_url' => true,
        'default_app_character_id' => true,
        'created' => true,
        'modified' => true,
        'synced' => true,
        'ext' => true,
        'default_app_character' => true,
        'app_categories' => true,
        'app_characters' => true,
    ];
}
