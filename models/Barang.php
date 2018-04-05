<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $kodebarang
 * @property string $namabarang
 * @property string $kodejenis
 * @property double $harganet
 * @property double $hargajual
 * @property int $stok
 *
 * @property Jenis $kodejenis0
 * @property Detailbrgmasuk[] $detailbrgmasuks
 * @property Detailpenjualan[] $detailpenjualans
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kodebarang'], 'required'],
            [['harganet', 'hargajual'], 'number'],
            [['stok'], 'integer'],
            [['kodebarang', 'kodejenis'], 'string', 'max' => 4],
            [['namabarang'], 'string', 'max' => 100],
            [['kodebarang'], 'unique'],
            [['kodejenis'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['kodejenis' => 'kodejenis']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kodebarang' => 'Kodebarang',
            'namabarang' => 'Namabarang',
            'kodejenis' => 'Kodejenis',
            'harganet' => 'Harganet',
            'hargajual' => 'Hargajual',
            'stok' => 'Stok',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodejenis0()
    {
        return $this->hasOne(Jenis::className(), ['kodejenis' => 'kodejenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbrgmasuks()
    {
        return $this->hasMany(Detailbrgmasuk::className(), ['kodebarang' => 'kodebarang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpenjualans()
    {
        return $this->hasMany(Detailpenjualan::className(), ['kodebarang' => 'kodebarang']);
    }
}
