<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DepartmentController extends Controller
{
    public function index()
    {
        // بدل الرابط هذا برابط نظام صاحبتك
        $response = Http::get('http://127.0.0.1:8001/api/departments');

        if ($response->failed()) {
            return response()->json([
                'message' => 'Failed to fetch departments from system B'
            ], 500);
        }

        return $response->json();
    }
}
