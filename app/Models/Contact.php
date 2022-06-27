<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    use HasFactory;

    const PAGINATION_COUNT = 10;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'company_id'
    ];


    public function conget()
    {
        return Contact::with('company')
            ->orderBy('id', 'desc')
            ->where(function ($query) {
                if ( $companyId = request('c_id') ) {
                    $query->where('company_id', $companyId);
                }

                if ( $search = request('search') ) {
                    $query->where(function ($query) use ($search) {
                        $query->where('first_name', 'like', "%{$search}%")
                            ->orWhere('last_name', 'like', "%{$search}%")
                            ->orWhere('phone', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%")
                            ->orWhere('address', 'like', "%{$search}%")
                            ->orWhereHas('company', function ($query) use ($search) {
                                $query->where('name', 'like', "%{$search}%");
                            });
                    });
                }
            })->simplePaginate(Contact::PAGINATION_COUNT);
    }



//    public function condit($id)
//    {
//        return Contact::findOrFail($id);
//    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
