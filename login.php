<?php

        
        $email = $_POST['username'];
        $password = $_POST['password'];


        $parameters = array(
            'username' => $email,
            'password' => $password,
            'grant_type' => 'password',
            'client_id' => 'check in pay2all developer zone CLIENT ID',
            'client_secret' => 'check in pay2all developer zone CLIENT ID',
            'scope' => '*'
        );


        $method = 'POST';

        $url = 'https://www.pay2all.in/oauth/token';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $response = curl_exec($ch);
        echo $response;  //[JSON RESPONSE]


?>