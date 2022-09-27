<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class Company extends Model{
        protected $table =  'companies';
        public function boards(){
            return $this->hasMany('App\Models\Board', 'id_company');
        }
    }