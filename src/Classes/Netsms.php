<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 01.03.2019
 * Time: 16:49
 */

namespace Kubpro;


abstract class Netsms
{


    abstract protected function send_array();
    abstract protected function crul_array();


    /**
     * @return bool|string
     */
    public function request()
    {

        $curl = curl_init();
        curl_setopt_array($curl, $this->crul_array());

        $results = curl_exec($curl);

        curl_close($curl);

        return $results;

    }

}