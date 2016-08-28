<?php
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-08-27
 * Time: 18:51
 */
class Paypal
{

    private $user = 'lucilleindomba_api1.gmail.com';
    private $pwd = 'FSW3DGCM9QEQ8GL5';
    private $signature = 'An5ns1Kso7MWUdW4ErQKJJJ4qi4-AF8YR7cRvea4HWQnm8QiZTF4wue';
    public $endpoint = 'https://api-3T.sandbox.paypal.com/nvp';
    public $errors = array();

    public function __construct($user = false, $pwd = false, $signature = false, $prod = false)
    {
        if ($user) {
            $this->user = $user;
        }
        if ($pwd) {
            $this->pwd = $pwd;

        }
        if ($signature) {
            $this->signature = $signature;
        }
        if ($prod) {
            $this->endpoint = str_replace('sandbox.', '', $this->endpoint);
        }
    }

    public function request($method, $params)
    {
        $params = array_merge($params, array(
            'METHOD' => $method,
            'VERSION' => '124.0',
            'USER' => $this->user,
            'SIGNATURE' => $this->signature,
            'PWD' => $this->password
        ));


        $params = http_build_query($params);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->endpoint,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
//    CURLOPT_CAINFO => ,
            CURLOPT_VERBOSE => 1
        ));

        $response = curl_exec($curl);
        $responseArray = array();
        parse_str($response, $responseArray);
//var_dump($responseArray);
        if (curl_errno($curl)) {
            $this->errors = curl_error($curl);
            curl_close($curl);
            return false;
        } else {
            if ($responseArray['ACK'] == 'Success') {
                return $responseArray;

            } else {
                $this->errors = $responseArray;
                curl_close($curl);
                return false;
            }
        }
    }

}


