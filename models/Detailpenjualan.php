<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detailpenjualan".
 *
 * @property int $id_detailpenjualan
 * @property string $nofaktur
 * @property string $kodebarang
 * @property int $jumlah
 * @property double $subtotal
 *
 * @property Penjualan $nofaktur0
 * @property Barang $kodebarang0
 */
class Detailpenjualan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailpenjualan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nofaktur', 'kodebarang'], 'required'],
            [['jumlah'], 'integer'],
            [['subtotal'], 'number'],
            [['nofaktur'], 'string', 'max' => 10],
            [['kodebarang'], 'string', 'max' => 4],
            [['nofaktur'], 'exist', 'skipOnError' => true, 'targetClass' => Penjualan::className(), 'targetAttribute' => ['nofaktur' => 'nofaktur']],
            [['kodebarang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['kodebarang' => 'kodebarang']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detailpenjualan' => 'Id Detailpenjualan',
            'nofaktur' => 'Nofaktur',
            'kodebarang' => 'Kodebarang',
            'jumlah' => 'Jumlah',
            'subtotal' => 'Subtotal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNofaktur0()
    {
        return $this->hasOne(Penjualan::className(), ['nofaktur' => 'nofaktur']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodebarang0()
    {
        return $this->hasOne(Barang::className(), ['kodebarang' => 'kodebarang']);
    }
}
