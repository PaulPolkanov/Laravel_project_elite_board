<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class ImageBoard extends Model{
        protected $table =  'board_images';
        public function board(){
            return $this->belongsTo('App\Models\Board', 'id_board');
        }
    }