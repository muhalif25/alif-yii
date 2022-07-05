<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_provensi".
 *
 * @property int $id_provensi
 * @property string $nama_provensi
 *
 * @property TbKota $provensi
 */
class TbProvensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_provensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_provensi'], 'required'],
            [['nama_provensi'], 'string', 'max' => 30],
            [['id_provensi'], 'exist', 'skipOnError' => true, 'targetClass' => TbKota::className(), 'targetAttribute' => ['id_provensi' => 'id_provensi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_provensi' => 'Id Provensi',
            'nama_provensi' => 'Nama Provensi',
        ];
    }

    /**
     * Gets query for [[Provensi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvensi()
    {
        return $this->hasOne(TbKota::className(), ['id_provensi' => 'id_provensi']);
    }
}
