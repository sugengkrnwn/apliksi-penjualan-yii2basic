<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distributor".
 *
 * @property string $iddistributor
 * @property string $namadistributor
 * @property string $alamat
 * @property string $kotasal
 * @property string $email
 * @property string $telpon
 *
 * @property Brgmasuk[] $brgmasuks
 */
class Distributor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distributor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddistributor'], 'required'],
            [['iddistributor'], 'string', 'max' => 6],
            [['namadistributor', 'kotasal', 'email'], 'string', 'max' => 80],
            [['alamat'], 'string', 'max' => 100],
            [['telpon'], 'string', 'max' => 10],
            [['iddistributor'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddistributor' => 'Iddistributor',
            'namadistributor' => 'Namadistributor',
            'alamat' => 'Alamat',
            'kotasal' => 'Kotasal',
            'email' => 'Email',
            'telpon' => 'Telpon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrgmasuks()
    {
        return $this->hasMany(Brgmasuk::className(), ['iddistributor' => 'iddistributor']);
    }
}
