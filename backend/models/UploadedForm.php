<?php
/**
 * Created by PhpStorm.
 * User: PAI
 * Date: 2018/7/20
 * Time: 23:54
 */
namespace backend\models;
;

use yii\base\Model;
use yii\web\UploadedFile;
use backend\models\homework\DbGroupMember;
/**
 * UploadForm is the model behind the upload form.
 */
class UploadedForm extends Model
{
    /**
     * @var UploadedFile|Null file attribute
     */
    public $file;
    public $path = 'C:/t/';
    public $fileName;

    /**
     * @return array the validation rules.
     */

    public function rules()
    {
        return [
            [['file'], 'file'],
        ];
    }
    public function upload(){
        if ($this->validate()) {
            $this->fileName=$this->file->baseName.".".$this->file->extension;
            $path=$this->path.$this->fileName;
            $this->file->saveAs($path);
            $model=new DbGroupMember;
            $model->HomeworkName=$this->fileName;
            $model->Path=$path;
            if($model->save()){
                return true;
            }
        }
        else{

            return false;
        }
    }
}