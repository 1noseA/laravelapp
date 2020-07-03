<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopePerson;

class Person extends Model
{
    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    // 〇〇以上〇〇以下
    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopePerson);
    }

    // 入力のガードを設定しておく
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . '(' . $this->age . ')';
    }

    public function boards()
    {
        return $this->hasMany('App\Board');
    }
}
