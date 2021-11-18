<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subnetting extends Model
{
    use HasFactory;

    public function InsertIpAddress($request){

        $octet1 = $request->input('octet1');
        $octet2 = $request->input('octet2');
        $octet3 = $request->input('octet3');
        $octet4 = $request->input('octet4');
        $no_of_subnet = $request->input('no_of_subnet');
        $subnet_mask = $request->input('subnet_mask');

        $result = DB::insert('INSERT INTO subnettings(octet1, octet2, octet3, octet4, no_of_subnet, subnet_mask) VALUES (?, ?, ?, ?, ?, ?)', [
            $octet1, $octet2, $octet3, $octet4, $no_of_subnet, $subnet_mask
        ]);

        return $result;
    }
}
