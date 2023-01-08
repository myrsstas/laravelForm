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

}
