<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property string $idpetugas
 * @property string $namapetugas
 * @property string $alamat
 * @property string $email
 * @property string $telpon
 *
 * @property Brgmasuk[] $brgmasuks
 * @property Penjualan[] $penjualans
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpetugas'], 'required'],
            [['idpetugas'], 'string', 'max' => 6],
            [['namapetugas', 'email'], 'string', 'max' => 80],
            [['alamat'], 'string', 'max' => 100],
            [['telpon'], 'string', 'max' => 10],
            [['idpetugas'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpetugas' => 'Idpetugas',
            'namapetugas' => 'Namapetugas',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'telpon' => 'Telpon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrgmasuks()
    {
        return $this->hasMany(Brgmasuk::className(), ['idpetugas' => 'idpetugas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::className(), ['idpetugas' => 'idpetugas']);
    }
}
