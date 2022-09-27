<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class Board extends Model{
        protected $table =  'boards';
        public function category(){
            return $this->belongsTo('App\Models\Category', 'id_category');
        }
        public function user(){
            return $this->belongsTo('App\Models\User', 'id_user');
        }
        public function company(){
            return $this->belongsTo('App\Models\Company', 'id_company');
        }
        public function delivery(){
            return $this->belongsTo('App\Models\Delivery', 'delivery_type_id');
        }
        public function parameters(){
            return $this->hasMany('App\Models\ParameterBoard', 'board_id');
        }
        public function images(){
            return $this->hasMany('App\Models\ImageBoard', 'id_board');
        }
    }