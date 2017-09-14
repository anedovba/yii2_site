<?php

namespace common\models;

use PharIo\Manifest\Url;
use Yii;
use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "object".
 *
 * @property integer $id
 * @property string $created_at
 * @property integer $status
 * @property integer $price
 * @property integer $top
 * @property integer $coditioning
 * @property integer $heating
 * @property integer $balcony
 * @property integer $dishwasher
 * @property integer $pool
 * @property integer $internet
 * @property integer $terrace
 * @property integer $microwave
 * @property integer $fridge
 * @property integer $cable_tv
 * @property integer $security_camera
 * @property double $area
 * @property double $area_kitch
 * @property double $area_live
 * @property integer $ceiling_height
 * @property integer $floor
 * @property integer $total_floor
 * @property integer $rooms
 * @property integer $year
 * @property string $lt
 * @property string $lg
 * @property integer $country_id
 * @property integer $region_id
 * @property integer $city_id
 * @property integer $agent_id
 * @property integer $object_type_id
 * @property integer $operation_id
 * @property string $object_name
 * @property string $object_description
 * @property string $object_street
 *
 * @property Agent $agent
 * @property City $city
 * @property Country $country
 * @property ObjectType $objectType
 * @property Operation $operation
 * @property Region $region
 * @property ObjectImage[] $objectImages
 * @property ObjectLang[] $objectLangs
 * @property Lang[] $langs
 * @property ObjectTag[] $objectTags
 */
class Object extends \yii\db\ActiveRecord
{
    public $tags_array;
    use TranslatedTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['status', 'top', 'price', 'coditioning', 'heating', 'balcony', 'dishwasher', 'pool', 'internet', 'terrace', 'microwave', 'fridge', 'cable_tv', 'security_camera', 'area', 'lt', 'lg', 'country_id', 'region_id', 'city_id', 'agent_id', 'object_type_id', 'operation_id'], 'required'],
            [['status', 'top', 'coditioning', 'heating', 'balcony', 'dishwasher', 'pool', 'internet', 'terrace', 'microwave', 'fridge', 'cable_tv', 'security_camera',  'floor', 'total_floor', 'rooms', 'year', 'country_id', 'region_id', 'city_id', 'agent_id', 'object_type_id', 'operation_id'], 'integer'],
            [['area', 'area_kitch', 'area_live', 'price', 'ceiling_height',], 'number'],
            [['lt', 'lg'], 'string', 'max' => 10],
            [['agent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agent::className(), 'targetAttribute' => ['agent_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['object_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ObjectType::className(), 'targetAttribute' => ['object_type_id' => 'id']],
            [['operation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operation::className(), 'targetAttribute' => ['operation_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['object_name'], 'required'],
            [['object_name'], 'string', 'max' => 250],
            [['object_description'], 'required'],
            [['object_description'], 'string', 'max' => 1000],
            [['object_street'], 'required'],
            [['object_street'], 'string', 'max' => 500],
            [['tags_array'], 'safe'],


        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'objectLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'object_name',
                    'object_description',
                    'object_street',

                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'status' => 'Status',
            'price' => 'Price',
            'top' => 'Top',
            'coditioning' => 'Coditioning',
            'heating' => 'Heating',
            'balcony' => 'Balcony',
            'dishwasher' => 'Dishwasher',
            'pool' => 'Pool',
            'internet' => 'Internet',
            'terrace' => 'Terrace',
            'microwave' => 'Microwave',
            'fridge' => 'Fridge',
            'cable_tv' => 'Cable Tv',
            'security_camera' => 'Security Camera',
            'area' => 'Area, m2',
            'area_kitch' => 'Area Kitch, m2',
            'area_live' => 'Area Live, m2',
            'ceiling_height' => 'Ceiling Height, m',
            'floor' => 'Floor',
            'total_floor' => 'Total Floor',
            'rooms' => 'Rooms',
            'year' => 'Year',
            'lt' => 'Lt',
            'lg' => 'Lg',
            'country_id' => 'Country',
            'region_id' => 'Region',
            'city_id' => 'City',
            'agent_id' => 'Agent',
            'object_type_id' => 'Type',
            'operation_id' => 'Operation',
            'object_name'=> 'Name',
            'object_description'=> 'Description',
            'object_street'=> 'Street',
            'tags_array'=> 'Tags',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgent()
    {
        return $this->hasOne(Agent::className(), ['id' => 'agent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectType()
    {
        return $this->hasOne(ObjectType::className(), ['id' => 'object_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperation()
    {
        return $this->hasOne(Operation::className(), ['id' => 'operation_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectImages()
    {
        return $this->hasMany(ObjectImage::className(), ['object_id' => 'id'])->orderBy('sort');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectLangs()
    {
        return $this->hasMany(ObjectLang::className(), ['object_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangs()
    {
        return $this->hasMany(Lang::className(), ['id' => 'lang_id'])->viaTable('object_lang', ['object_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectTags()
    {
        return $this->hasMany(ObjectTag::className(), ['object_id' => 'id']);
    }

    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id'])->via('objectTags');
    }

    public static function getStatusList(){
        return ['off', 'activ'];
    }
    public function getStatusName(){
        $list=$this->getStatusList();
        return $list[$this->status];
    }
    public static function getCheckList(){
        return ['Нет', 'Да'];
    }

    public function getTopName(){
        $list=$this->getCheckList();
        return $list[$this->top];
    }
    public function getCondName(){
        $list=$this->getCheckList();
        return $list[$this->coditioning];
    }
    public function getHeatName(){
        $list=$this->getCheckList();
        return $list[$this->heating];
    }
    public function getBalcName(){
        $list=$this->getCheckList();
        return $list[$this->balcony];
    }
    public function getDWashName(){
        $list=$this->getCheckList();
        return $list[$this->dishwasher];
    }
    public function getPoolName(){
        $list=$this->getCheckList();
        return $list[$this->pool];
    }
    public function getIntName(){
        $list=$this->getCheckList();
        return $list[$this->internet];
    }
    public function getTerName(){
        $list=$this->getCheckList();
        return $list[$this->terrace];
    }
    public function getMWavName(){
        $list=$this->getCheckList();
        return $list[$this->microwave];
    }
    public function getFrName(){
        $list=$this->getCheckList();
        return $list[$this->fridge];
    }
    public function getTvtName(){
        $list=$this->getCheckList();
        return $list[$this->cable_tv];
    }
    public function getCameraName(){
        $list=$this->getCheckList();
        return $list[$this->security_camera];
    }
    public function afterFind()
    {
        $this->tags_array=$this->tags;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
            $arr=ArrayHelper::map($this->tags, 'id', 'id');
            if(isset($this->tags_array)){
        foreach ($this->tags_array as   $tag){
            if(!in_array($tag, $arr)){
                $model=new ObjectTag();
                $model->object_id=$this->id;
                $model->tag_id=$tag;
                $model->save();
            }
            if(isset($arr[$tag])){
                unset($arr[$tag]);
            }
        }
        }
        ObjectTag::deleteAll(['tag_id'=>$arr, 'object_id' => $this->id]);
    }
    public function  beforeDelete()
    {
       if(parent::beforeDelete()){
           ObjectTag::deleteAll(['object_id'=>$this->id]);
           return true;
       }else{
           return false;
       }
    }

    public function getImagesLinks()
    {
        return ArrayHelper::getColumn($this->objectImages,'imageAll');
    }

    public function getImagesLinksData()
    {
        return ArrayHelper::toArray($this->objectImages,[
                ObjectImage::className() => [
                    'caption'=>'image',
                    'key'=>'id',
                ]]
        );
    }

}
