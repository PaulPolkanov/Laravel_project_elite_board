<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class ParameterBoard extends Model{
        protected $table =  'board_parameters';
        public function board(){
            return $this->belongsTo('App\Models\Board', 'board_id');
        }
    }