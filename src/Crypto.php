<?php
namespace App;

use App\CryptoMaker;

/**
 * Class Crypto
 * @package App
 */
class Crypto
{

    /**
     * @var
     */
    private $output;

    /**
     * @const
     */
    const PRIVATE_KEY = 'place your key here';


    /**
     * @param $input
     * @return $this
     */
    public function hide($input)
    {
        $data = CryptoMaker::encrypt($input, self::PRIVATE_KEY);
        $this->setOutput($data);
        return $this;
    }

    /**
     * @param $input
     * @return $this
     */
    public function show($input)
    {
        $data = CryptoMaker::decrypt($input, self::PRIVATE_KEY);
        $this->setOutput($data);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->output;
    }


    /**
     * @param mixed $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }



}
