<?php

namespace Tests\Unit;

use App\Models\TestModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TranslationTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_select()
    {
        $model = TestModel::select(['*'])->first();
        if($model) {
            $model->firstName;
        }
    }

    public function test_create()
    {
        $model=new TestModel();
        $model->firstName="firstName";
        $model->middleName="middleName";
        $model->lastName="lastName";
        $model->save();

    }
}


