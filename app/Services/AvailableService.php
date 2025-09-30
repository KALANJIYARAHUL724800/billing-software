<?php
namespace App\Services;
use App\Models\Available;
class AvailableService
{

    public function insertCash(array $data)
    {
        return Available::create([
            'one_rupees'=>$data['one_rupee'],
            'two_rupees'=>$data['two_rupee'],
            'five_rupees'=>$data['five_rupee'],
            'ten_rupees'=>$data['ten_rupee'],
            'twenty_rupees'=>$data['twenty_rupee'],
            'fifty_rupees'=>$data['fifty_rupee'],
            'hundread_rupees'=>$data['hundread_rupee'],
            'two_hundread_rupees'=>$data['two_hundread'],
            'five_hundread_rupees'=>$data['five_hundread_rupee'],
            'thousand_rupees'=>$data['thousand_rupee'],
            'two_thousand_rupees'=>$data['two_thousand_rupee'],
            'total'=>$data['total']
        ]);
    }
}