<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $token = $this->loginApi('https://ssa-api.toyotavn.com.vn/api/TokenAuth/Authenticate', '{
        "userNameOrEmailAddress": "API_LEAD_HAKUHOKO",
        "password": "XLjm8W#~94"
    }
    ');

      $tokenAccess = $this->loginApi('https://ssa-api.toyotavn.com.vn/api/TokenAuth/Authenticate', '{
        "userNameOrEmailAddress": "API_website",
        "password": "Hye876#ghh)juw!@592"
        }');
      $getListLeadSources = $this->getDataApi('https://ssa-api.toyotavn.com.vn/api/services/app/SalesCustomerWeb/GetListWhenCustomerWantToBuys', $token['result']['accessToken']);
      $province = $this->getDataApi('https://ssa-api.toyotavn.com.vn/api/services/app/VehicleProductWebsite/GetAllProvinces', $tokenAccess['result']['accessToken']);
      return view('index', [
        'toBuy' => $getListLeadSources['result'],
        'province' => $province['result']['items']
      ]);
    }
    public function saveData(Request $request)
    {
      $token = $this->loginApi('https://ssa-api.toyotavn.com.vn/api/TokenAuth/Authenticate', '{
        "userNameOrEmailAddress": "API_LEAD_HAKUHOKO",
        "password": "XLjm8W#~94"
    }
    ');
      $data = $request->all();
      $data['date'] = date("Y-m-d");
      $data['time'] = date("H:i");
      $data['model'] = "Vios";
      $data['leadSource'] = "TMV - Online (Website)";
      $data['username'] = "";
      $data['campaign'] = "";
     
      


      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://ssa-api.toyotavn.com.vn/api/services/app/SalesCustomerWeb/CreateLeadCustomer',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer '.$token['result']['accessToken'],
          'Content-Type: application/json'
        ),
      ));
      $response = curl_exec($curl);

      curl_close($curl);
      return json_decode($response, true);


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

  public function loginApi($url, $data)
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
      CURLOPT_POSTFIELDS => $data,
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

  public function dealer(Request $request)
  {
    $tokenAccess = $this->loginApi('https://ssa-api.toyotavn.com.vn/api/TokenAuth/Authenticate', '{
      "userNameOrEmailAddress": "API_website",
      "password": "Hye876#ghh)juw!@592"
      }');
    $dealer = $this->getDataApi('https://ssa-api.toyotavn.com.vn/api/services/app/VehicleProductWebsite/SearchDealerByProvinceIdAndDistrictId?provinceId='.$request->province, $tokenAccess['result']['accessToken']);
    return $dealer['result'];
  }
}


