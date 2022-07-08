<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ssa-api.toyotavn.com.vn/api/TokenAuth/Authenticate',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "userNameOrEmailAddress": "API_LEAD_HAKUHOKO",
    "password": "XLjm8W#~94"
}
',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer TokenAccess',
    'Content-Type: application/json',
    'Abp.TenantId: 1005'
    
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo ($response);
$res = json_decode($response,true);
// dd($res['result']['accessToken']) ;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ssa-api.toyotavn.com.vn/api/services/app/SalesCustomerWeb/GetListWhenCustomerWantToBuys',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$res['result']['accessToken']
  ),
));

$response = curl_exec($curl);

curl_close($curl);
 $getListLeadSources = json_decode($response, true);
        return view('index', [
            'toBuy' => $getListLeadSources['result']
        ]);
    }
}
