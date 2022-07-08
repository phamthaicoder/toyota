<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $token = $this->loginApi('https://ssa-api.toyotavn.com.vn/api/TokenAuth/Authenticate');
      $getListLeadSources = $this->getDataApi('https://ssa-api.toyotavn.com.vn/api/services/app/SalesCustomerWeb/GetListWhenCustomerWantToBuys', $token['result']['accessToken']);
      $dealer = $this->getDataApi('https://ssa-api.toyotavn.com.vn/api/services/app/SalesCustomerWeb/GetListDealers', $token['result']['accessToken']);
      return view('index', [
        'toBuy' => $getListLeadSources['result'],
        'dealer' => $dealer['result'],
      ]);
    }
  public function getDataApi($url, $token)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$token
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
  }

  public function loginApi($url)
  {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
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
    return json_decode($response,true);
  }
}


