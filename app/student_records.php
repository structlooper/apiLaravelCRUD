<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_records extends Model
{
    protected $table  = "student_records";
    protected $fillable = [
        'studentName' , 'studentClass','rollNumber'
    ];
    
}
class User extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
