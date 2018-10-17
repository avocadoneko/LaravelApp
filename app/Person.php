<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model {
    // idを値を用意しておかない項目として指定
    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer|min:0|max:150'
    );

    public function getData() {
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }

    public $timestamps = false;

}
