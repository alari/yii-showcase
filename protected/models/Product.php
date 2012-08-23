<?
/**
 * @author Egor
 * @since 8/21/12 18:28 PM
 *
 * @property ImagesHolder $listHolder
 * @property ImagesHolder $picHolder
 */
class Product extends CatalogueProduct implements ImagesHolderModel
{

    #...

    /**
     * @return array
     */
    public function imageHolders()
    {
        return array(
            "list_holder_id" => "list",
            "pic_holder_id" => "pic"
        );
    }

    #...

    # Don't forget to note your relations in relations() and rules() methods (this could be done with giix)

    public function rules()
    {
        $rules = parent::rules();
        $rules [] = array('pic_holder_id, list_holder_id', 'default', 'setOnEmpty' => true, 'value' => null);
        return $rules;
    }

    public function relations()
    {
        $relations = parent::relations();
        $relations['listHolder'] = array(self::BELONGS_TO, 'ImagesHolder', 'list_holder_id');
        $relations['picHolder'] = array(self::BELONGS_TO, 'ImagesHolder', 'pic_holder_id');
        return $relations;
    }

    # And adding behaviour

    public function behaviors()
    {  $behaviors = parent::behaviors();
        $behaviors['imagesHolder'] = array(
                'class' => 'imagesHolder.models.ImagesHolderBehavior'
            );
        return $behaviors;
    }
}