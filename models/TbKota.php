<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kota".
 *
 * @property int $id_kota
 * @property string $nama_kota
 * @property int $id_provensi
 *
 * @property TbProvensi $tbProvensi
 */
class TbKota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_kota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kota', 'id_provensi'], 'required'],
            [['id_provensi'], 'integer'],
            [['nama_kota'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kota' => 'Id Kota',
            'nama_kota' => 'Nama Kota',
            'id_provensi' => 'Id Provensi',
        ];
    }

    /**
     * Gets query for [[TbProvensi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbProvensi()
    {
        return $this->hasOne(TbProvensi::className(), ['id_provensi' => 'id_provensi']);
    }
}
