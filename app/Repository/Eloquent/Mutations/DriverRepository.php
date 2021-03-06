<?php

namespace App\Repository\Eloquent\Mutations;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class DriverRepository
{
    public function login(array $args)
    {
        $response = Http::post('http://localhost:8000/rest/driver/login', $args)->throw();
        
        DB::table('users_auth_tokens')->updateOrInsert([
            'user_type' => 'Driver',
            'user_id' => $response['data']['driver']['id']
        ], [
            'token' => $response['data']['access_token']
        ]);
    
        return $response['data'];
    }
}
