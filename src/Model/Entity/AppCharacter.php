<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AppCharacter Entity
 *
 * @property int $id
 * @property string $ext_id
 * @property string $status
 * @property string $slug
 * @property string $title
 * @property int $is_influencer
 * @property string $facebook_url
 * @property string $youtube_url
 * @property string $img_url
 * @property int $ord
 * @property string $data
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $synced
 *
 * @property \App\Model\Entity\Ext $ext
 * @property \App\Model\Entity\AppPrankScript[] $app_prank_scripts
 */
class AppCharacter extends Entity
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
        'status' => true,
        'slug' => true,
        'title' => true,
        'is_influencer' => true,
        'facebook_url' => true,
        'youtube_url' => true,
        'img_url' => true,
        'ord' => true,
        'data' => true,
        'created' => true,
        'modified' => true,
        'synced' => true,
        'ext' => true,
        'app_prank_scripts' => true,
    ];
}
