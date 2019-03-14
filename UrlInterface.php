<?php


namespace test;

/**
 * Interface UrlInterface
 *
 * @package test
 */
interface UrlInterface
{
    public function getScheme();

    public function getHost();

    public function getQueryParams();

    /** gets a specific parameter out of query string
     *
     * @param $key
     * @param $default
     *
     * @return mixed
     */
    public function getQueryParam($key, $default);
}
