<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property string $nofaktur
 * @property string $tglpenjualan
 * @property string $idpetugas
 * @property double $bayar
 * @property double $sisa
 * @property double $total
 *
 * @property Detailpenjualan[] $detailpenjualans
 * @property Petugas $petugas
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nofaktur'], 'required'],
            [['tglpenjualan'], 'safe'],
            [['bayar', 'sisa', 'total'], 'number'],
            [['nofaktur'], 'string', 'max' => 10],
            [['idpetugas'], 'string', 'max' => 6],
            [['nofaktur'], 'unique'],
            [['idpetugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['idpetugas' => 'idpetugas']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nofaktur' => 'Nofaktur',
            'tglpenjualan' => 'Tglpenjualan',
            'idpetugas' => 'Idpetugas',
            'bayar' => 'Bayar',
            'sisa' => 'Sisa',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpenjualans()
    {
        return $this->hasMany(Detailpenjualan::className(), ['nofaktur' => 'nofaktur']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasOne(Petugas::className(), ['idpetugas' => 'idpetugas']);
    }
}
