<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AppCategory Entity
 *
 * @property int $id
 * @property string $ext_id
 * @property string $status
 * @property string $slug
 * @property string $name
 * @property string $img_url
 * @property int $ord
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $synced
 *
 * @property \App\Model\Entity\Ext $ext
 * @property \App\Model\Entity\AppPrankScript[] $app_prank_scripts
 */
class AppCategory extends Entity
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
        'name' => true,
        'img_url' => true,
        'ord' => true,
        'created' => true,
        'modified' => true,
        'synced' => true,
        'ext' => true,
        'app_prank_scripts' => true,
    ];
}
