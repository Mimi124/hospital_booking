<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Patient extends Model
{
    public function handle($request, $next){
        $patient = Auth::patient();
        if (Auth::check()) {
            if ($patient->patient->name == 'Patient' || $patient->isAdmin()) {
                return $next($request);
            }
        }
        redirect('/');
    }
    use HasFactory;
}
