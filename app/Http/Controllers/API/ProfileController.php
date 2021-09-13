<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
	public function show($id) {
    	$data = Profile::findOrFail($id);
        $response = [
            'message' => 'Show profile success.',
            'data' => $data
        ];

        return Response()->json($response, 200);
    }

    public function store(Request $request) {
    	$data = Profile::create($request->all());
    	$response = [
            'message' => 'Profile added.',
            'data' => $data
        ];

        return Response()->json($response, 201);
    }
}
