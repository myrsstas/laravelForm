<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property \Illuminate\Support\Carbon|null  $date_of_birth
 * @property int $phone_number
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $notes
 *
 */

class Contacts extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function __toString()
    {
        $fields = [
            $this->id ,
            $this->name,
            $this->surname,
            $this->date_of_birth,
            $this->phone_number,
            $this->email,
            $this->address,
            $this->city,
            $this->notes
        ];

        $content= "";

        foreach($fields as $field){
            $content .= $field . ';' ;

        }

        return $content ;
    }
}
