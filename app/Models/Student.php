<?php

namespace App\Models;

use App\Models\Rol;
use App\Models\Status;
use App\Models\Carrier;
use App\Models\Town;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_control',
        'rol_id',
        'name',
        'lastname',
        'carrier_id',
        'group',
        'status_id',
        'email',
        'phone',
        'gender',
        'birthdate',
        'town_id',
        'street',
        'exterior_number',
        'interior_number',
    ];

    static $rules = [
        'no_control' => 'required|string|max:8',
        'rol_id' => 'required',
        'name' => 'required|string|max:200',
        'lastname' => 'required|string|max:200',
        'carrier_id' => 'required',
        'group' => 'required|string|max:3',
        'status_id' => 'required',
        'email' => 'required|string|max:200',
        'phone' => 'required|string|max:10',
        'gender' => 'required|string|max:1',
        'birthdate' => 'required|date',
        'town_id' => 'required',
        'street' => 'required|string',
        'exterior_number' => 'required',
    ];

    public function rol(){
        return $this->belongsTo(Rol::class);
    }

    public function carrier(){
        return $this->belongsTo(Carrier::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function town(){
        return $this->belongsTo(Town::class);
    }
    
    public function getRouteKeyName()
    {
        return 'no_control';
    }
}
