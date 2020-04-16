<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'address',
        'email',
        'email_info',
        'phone',
        'phone_viber',
        'facebook',
        'instagram',
        'youtube',
    ];

    public function getFormatedPhone($viber = false)
    {
        $phone = '';
        $formatedPhone = '';

        if ($viber) {
            $phone = $this->phone_viber;
        } else {
            $phone = $this->phone;
        }

        $formatedPhone =
            substr($phone, 0, 3) . ' (' .
            substr($phone, 3, 3) . ') ' .
            substr($phone, 6, 3) . ' ' .
            substr($phone, 9, 2) . ' ' .
            substr($phone, 11, 2);

        return $formatedPhone;
    }
}
