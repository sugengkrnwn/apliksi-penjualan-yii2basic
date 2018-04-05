<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brgmasuk".
 *
 * @property string $nonota
 * @property string $tglmasuk
 * @property string $iddistributor
 * @property string $idpetugas
 * @property double $total
 *
 * @property Distributor $distributor
 * @property Petugas $petugas
 * @property Detailbrgmasuk[] $detailbrgmasuks
 */
class Brgmasuk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brgmasuk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nonota'], 'required'],
            [['tglmasuk'], 'safe'],
            [['total'], 'number'],
            [['nonota'], 'string', 'max' => 10],
            [['iddistributor', 'idpetugas'], 'string', 'max' => 6],
            [['nonota'], 'unique'],
            [['iddistributor'], 'exist', 'skipOnError' => true, 'targetClass' => Distributor::className(), 'targetAttribute' => ['iddistributor' => 'iddistributor']],
            [['idpetugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['idpetugas' => 'idpetugas']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nonota' => 'Nonota',
            'tglmasuk' => 'Tglmasuk',
            'iddistributor' => 'Iddistributor',
            'idpetugas' => 'Idpetugas',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistributor()
    {
        return $this->hasOne(Distributor::className(), ['iddistributor' => 'iddistributor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasOne(Petugas::className(), ['idpetugas' => 'idpetugas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbrgmasuks()
    {
        return $this->hasMany(Detailbrgmasuk::className(), ['nonota' => 'nonota']);
    }
}
