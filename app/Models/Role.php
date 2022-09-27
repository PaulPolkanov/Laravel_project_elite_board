<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class Role extends Model{
        protected $table =  'roles';
        public function users(){
            return $this->hasMany('App\Models\User', 'id_role');
        }
    }