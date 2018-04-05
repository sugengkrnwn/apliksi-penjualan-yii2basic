<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis".
 *
 * @property string $kodejenis
 * @property string $jenis
 *
 * @property Barang[] $barangs
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kodejenis'], 'required'],
            [['kodejenis'], 'string', 'max' => 4],
            [['jenis'], 'string', 'max' => 60],
            [['kodejenis'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kodejenis' => 'Kodejenis',
            'jenis' => 'Jenis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['kodejenis' => 'kodejenis']);
    }
}
