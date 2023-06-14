<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use illuminate\support\facades\Http;
use GuzzleHttp\Exception\ClientException;
use LDAP\Result;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {


        // cek kredensial
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $http = new Client;
        $result = '';
        try {
            $response = $http->post('http://127.0.0.1:8000/api/login', [
                'query' => [
                    'email' => $request->email,
                    'password' => $request->password
                ]
            ]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = json_decode((string)$response->getBody(), true);;
        }
        $result = json_decode((string)$response->getBody(), true);

        // Cek Response API
        if ($result['success'] === false) {
            return back()->with('LoginError', $result['message']);
        }
        return view('dashboard.index', $result);
    }
}
