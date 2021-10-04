<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function testGetProperty(){
        $model = TestModel::select(['*'])->first();
        dump($model);
        if($model) {
            dump($model->firstName);
        }
    }

    public function testSetProperty(){
          $model=new TestModel();
          $model->firstName="Тестовое имя";
          $model->lastName="Тестовое фимилия";
          $model->middleName="Тестовое отчество";
          $model->save();
          $model=TestModel::select(['*'])->where(['id'=>$model->id])->first();
          dump($model);
    }
}
