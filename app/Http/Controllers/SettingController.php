<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SettingService;

class SettingController extends Controller
{
    private SettingService $settingService;
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }
    public function updateSetting(Request $request)
    {
        $res = $this->settingService->updateSetting($request->all());
        if($res==true)
        {
            return alert("successfully updated");
        }
    }
    public function showRecord()
    {
        $record = $this->settingService->showRecord();
        return view('settings',compact('record'));
    }
}
