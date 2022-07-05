<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_mahasiswa".
 *
 * @property int $id_mahasiswa
 * @property string $nim
 * @property string $nama_mahasiswa
 * @property string $jurusan
 * @property string $jk
 * @property string $agama
 */
class TbMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama_mahasiswa', 'jurusan', 'jk', 'agama'], 'required'],
            [['jk'], 'string'],
            [['nim'], 'string', 'max' => 13],
            [['nama_mahasiswa', 'jurusan', 'agama'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mahasiswa' => 'Id Mahasiswa',
            'nim' => 'Nim',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'jurusan' => 'Jurusan',
            'jk' => 'Jk',
            'agama' => 'Agama',
        ];
    }
}
