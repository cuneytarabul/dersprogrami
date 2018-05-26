<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dersprogrami".
 *
 * @property int $programID
 * @property string $ders_adi
 * @property string $ders_hocasi
 * @property string $ders_gunu
 * @property string $ders_saati
 */
class Dersprogrami extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dersprogrami';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ders_adi', 'ders_hocasi', 'ders_gunu', 'ders_saati'], 'required'],
            [['ders_adi', 'ders_hocasi', 'ders_gunu', 'ders_saati'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'programID' => 'Program ID',
            'ders_adi' => 'Ders Adi',
            'ders_hocasi' => 'Ders Hocasi',
            'ders_gunu' => 'Ders Gunu',
            'ders_saati' => 'Ders Saati',
        ];
    }
}
