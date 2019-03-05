<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 01.03.2019
 * Time: 17:07
 */

namespace Kubpro;


class Reports extends Netsms
{
    protected $array;
    protected $url;
    /**
     * Reports constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
        $this->url   = URL.REPORTS;
    }

    /**
     * Crul Array
     * @return array
     */
    public function crul_array()
    {

        $options = array(
            CURLOPT_URL        => $this->url,
            CURLOPT_POST       => true,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_POSTFIELDS => $this->send_array(),
        );


        return $options;

    }

    /**
     * @return array
     */
    protected function send_array()
    {
        return $this->array;
    }


}