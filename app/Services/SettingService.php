<?php
namespace App\Services;
use App\Http\Controllers\SettingController;
use App\Models\Setting;
class SettingService
{
    public function updateSetting($data)
    {
        $getRecord = Setting::where('active_flag', 1)->first();
        $isUpdate = false;
        if ($getRecord) {
            $getRecord->update([
                'company_name' =>$data['company_name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'message' => $data['message']
            ]);
            $isUpdate = true;
        }
        return $isUpdate;
    }
    public function showRecord()
    {
        return Setting::where('active_flag', 1)->first();
    }
}