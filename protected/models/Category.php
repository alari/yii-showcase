<?php
/**
 * @author ajaks
 * @since 8/16/12 12:28 PM
 *
 * @property ImagesHolder $listHolder
 * @property ImagesHolder $picHolder
 */
class Category extends CatalogueCategory implements ImagesHolderModel
{
    public function rules() {
        $rules = parent::rules();
        $rules [] = array('pic_holder_id', 'default', 'setOnEmpty' => true, 'value' => null);
        return $rules;
    }

    public function relations() {
        $relations = parent::relations();
        $relations['picHolder'] = array(self::BELONGS_TO, 'ImagesHolder', 'pic_holder_id');
        return $relations;
    }

    public function afterSave() {
        parent::afterSave();
        Yii::app()->getModule("imagesHolder")->saveModel($this);
    }

    /**
     * @return array
     */
    public function imageHolders()
    {
        return array(
            "pic_holder_id" => "pic"
        );
    }

    public function behaviors()
    {  $behaviors = parent::behaviors();
        $behaviors['imagesHolder'] = array(
            'class' => 'imagesHolder.models.ImagesHolderBehavior'
        );
        return $behaviors;
    }

}