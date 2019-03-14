<?php


namespace test;

/**
 * Class Url
 *
 * @package test
 */
class Url implements UrlInterface
{
    protected $address;
    protected $queryParamsArray;

    /**
     * Url constructor.
     *
     * @param string $address
     */
    public function __construct($address)
    {
        $this->address = parse_url($address);
        $this->queryParamsArray=$this->parseQuery();
    }

    /**
     * @return mixed
     */
    public function getScheme()
    {
        return $this->address['scheme'];
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->address['host'];
    }

    /**
     * @return mixed
     */
    public function getQueryParams()
    {
        return $this->queryParamsArray;
    }

    /**
     * @return mixed
     */
    public function parseQuery()
    {
        $queryParamsArray = [];
        $params = explode('&', $this->address['query']);
        //var_export($params);
        foreach ($params as $param) {
            $paramArray = explode('=', $param);
            //var_export($paramArray);
            $queryParamsArray[$paramArray[0]] = $paramArray[1];
        }
        return $queryParamsArray;
    }

    /**
     * @param        $key
     * @param string $default
     *
     * @return mixed|string|null
     */
    public function getQueryParam($key, $default = null)
    {
        $answer = $default;
        $params = $this->getQueryParams();
        if (array_key_exists($key, $params)) {
            $answer = $params[$key];
        }
        return $answer;
    }
}
