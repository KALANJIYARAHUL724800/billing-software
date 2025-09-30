<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\AvailableService;
use Illuminate\Http\Response;

class AvailableController extends Controller
{
    private AvailableService $availableService;
    public function __construct(AvailableService $availableService)
    {
        $this->availableService = $availableService;
    }

    public function insertCash(Request $request)
    {
        $data = [
            'one_rupee' => $request->one_rupee_mul,
            'two_rupee' => $request->two_rupee_mul,
            'five_rupee' => $request->five_rupee_mul,
            'ten_rupee' => $request->ten_rupee_mul,
            'twenty_rupee' => $request->twenty_rupee_mul,
            'fifty_rupee' => $request->fifty_rupee,
            'hundread_rupee' => $request->hundread_rupee_mul,
            'two_hundread' => $request->two_hundread_mul,
            'five_hundread_rupee' => $request->five_hundread_rupee_mul,
            'thousand_rupee' => $request->thousand_rupee_mul,
            'two_thousand_rupee' => $request->two_thousand_rupee_mul,
            'total' => $request->total,
        ];
        $response = $this->availableService->insertCash($data);
        if (!empty($response)) {
            return redirect()->route('billing');
        } else {
            return response()->json(['status' => 'error', 'message' => 'Failed to insert data'], 500);
        }

    }
}
