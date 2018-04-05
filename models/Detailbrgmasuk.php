<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detailbrgmasuk".
 *
 * @property int $id_dtlbrgmasuk
 * @property string $nonota
 * @property string $kodebarang
 * @property int $jumlah
 * @property double $subtotal
 *
 * @property Barang $kodebarang0
 * @property Brgmasuk $nonota0
 */
class Detailbrgmasuk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailbrgmasuk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nonota', 'kodebarang'], 'required'],
            [['jumlah'], 'integer'],
            [['subtotal'], 'number'],
            [['nonota'], 'string', 'max' => 10],
            [['kodebarang'], 'string', 'max' => 4],
            [['kodebarang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['kodebarang' => 'kodebarang']],
            [['nonota'], 'exist', 'skipOnError' => true, 'targetClass' => Brgmasuk::className(), 'targetAttribute' => ['nonota' => 'nonota']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dtlbrgmasuk' => 'Id Dtlbrgmasuk',
            'nonota' => 'Nonota',
            'kodebarang' => 'Kodebarang',
            'jumlah' => 'Jumlah',
            'subtotal' => 'Subtotal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodebarang0()
    {
        return $this->hasOne(Barang::className(), ['kodebarang' => 'kodebarang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNonota0()
    {
        return $this->hasOne(Brgmasuk::className(), ['nonota' => 'nonota']);
    }
}
