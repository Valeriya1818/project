<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string $title
 * @property float $price
 * @property float $old_price
 * @property string $description
 * @property string $images
 * @property string $other_data
 */
class items extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price', 'old_price', 'description', 'images', 'other_data'], 'required'],
            [['price', 'old_price'], 'number'],
            [['description', 'images', 'other_data'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'description' => 'Description',
            'images' => 'Images',
            'other_data' => 'Other Data',
        ];
    }
}
