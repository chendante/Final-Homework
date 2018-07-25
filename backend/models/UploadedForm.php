<?php
/**
 * Created by PhpStorm.
 * User: PAI
 * Date: 2018/7/20
 * Time: 23:54
 */
namespace backend\models;
;

use backend\models\homework\DbHomeworkGroup;
use backend\models\homework\DbHomeworkPersonal;
use yii\base\Model;
use yii\web\UploadedFile;
use backend\models\homework\DbGroupMember;
use Yii;
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
    public $category;
    public $mark;
    public $student;

    /**
     * @return array the validation rules.
     */

    public function rules()
    {
        return [
            [['file'], 'file'],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->fileName = $this->file->baseName . "." . $this->file->extension;
            $path = $this->path . $this->fileName;
            $this->file->saveAs($path);
            Yii::getLogger()->log($this->category,4);
            Yii::getLogger()->log($this->file,4);
            switch ($this->category) {
                case 1:
                    {

                        $model = new DbHomeworkPersonal();
                        $model->HomeworkName = $this->fileName;
                        $model->Mark = $this->mark;
                        $model->MemberID = $this->student;
                        $model->Path = $path;
                        if ($model->save()) {
                            return true;
                        } else {
                            return false;
                        }
                        break;
                    }
                case 2:
                    {

                        $model = new DbHomeworkGroup();
                        $model->HomeworkName = $this->fileName;
                        $model->Path = $path;
                        $model->Mark = $this->mark;
                        if ($model->save()) {
                            return true;
                        } else {
                            return false;
                        }
                        break;
                    }
            }

        }
    }}