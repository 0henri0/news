<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
    public function getTitle() {
        return $this->title;
    }
    public function User(){
    	return $this->belongsTo("App\User", "id_user", "id_ticket");
    }


}

