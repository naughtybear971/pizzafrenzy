<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
/**
 * User Entity
 *
 * @property int $uid
 * @property int $urole
 * @property string $uname
 * @property string $uphone
 * @property string $uemail
 * @property string $username
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class User extends Entity
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
        'urole' => true,
        'uname' => true,
        'uphone' => true,
        'uemail' => true,
        'username' => true,
        'password' => true,
        'created' => true,
        'modified' => true
    ];

    protected $_hidden = [
            'password'
    ];

    protected function _setPassword($value){
        if(strlen($value)){
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}