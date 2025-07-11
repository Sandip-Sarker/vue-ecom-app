<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SSLCommerzCredentials extends Model
{
    protected $fillable = [
        'store_id',
        'store_password',
        'currency',
        'success_url',
        'fail_url',
        'cancel_url',
        'ipn_url',
        'int_url',
    ];

    protected $hidden = [
        'store_password',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'store_password' => 'string',
        'store_id' => 'string',
        'currency' => 'string',
        'success_url' => 'string',
        'fail_url' => 'string',
        'cancel_url' => 'string',
        'ipn_url' => 'string',
        'int_url' => 'string',
    ];
}
