<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 */
class Country extends ActiveRecord
{
    //const STATUS_INACTIVE = 0;
    //const STATUS_ACTIVE = 1; //Добавлено мной 23.06 из руководства
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['code'], 'string'],
            [['population'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'code' => 'Code',
            'population' => 'Population',
        ];
    }
}
