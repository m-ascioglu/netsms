<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 01.03.2019
 * Time: 16:51
 */

namespace Kubpro;


class Send extends Netsms
{
    protected $array;
    protected $url;
    protected $type;

    /**
     * Send constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
        $this->type  = $this->check_speed($array) == true ? SENDSPEED : SENDSINGLEBULK;
        $this->url   = URL.$this->type;
    }

    /**
     *
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

    /**
     * @param $array
     * @return bool
     */
    private function check_speed($array){

        if (isset($array['speed'])) return $array['speed'] == true ? true : false;

        else return false;
    }




}