<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class Delivery extends Model{
        protected $table =  'deliveries_types';
        public function boards(){
            return $this->hasMany('App\Models\Board', 'delivery_type_id');
        }
    }