<?php
declare(strict_types=1);


namespace test;

use mysql_xdevapi\Exception;

/** Класс для работы с переданным в поле ввода URL.
 *
 * @package test
 */
class Url implements UrlInterface
{
    protected $address;
    protected $queryParamsArray;

    /** Конструктор класса
     *
     * @param string $address
     */
    public function __construct(string $address)
    {
        $this->changeURL($address);
    }

    /** Меняет URL, используемый в объекте.
     * @param string $address
     */
    public function changeURL(string $address): void
    {
        $this->address = parse_url($address);
        if ($this->address === false) {
            throw new Exception('Cannot parse malformed URL');
        }
        $this->queryParamsArray = $this->parseQuery();
    }

    /**
     * @return string
     */
    public function getScheme(): string
    {
        return $this->address['scheme'];
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->address['host'];
    }

    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->queryParamsArray;
    }

    /** Разбирает query-строку на ключи.
     *
     * @return array
     */
    protected function parseQuery(): array
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

    /** Возвращает значение конкретного ключа.
     * @param        $key
     * @param string $default - значение по умолчанию
     *
     * @return mixed|string|null
     */
    public function getQueryParam($key, $default = null): ?string
    {
        $answer = $default;
        $params = $this->getQueryParams();
        if (array_key_exists($key, $params)) {
            $answer = $params[$key];
        }
        return $answer;
    }
}
