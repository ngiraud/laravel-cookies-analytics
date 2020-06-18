<?php

namespace NGiraud\CookiesAnalytics;

class Cookies
{
    protected $config;

    public function __construct()
    {
        $this->config = config('analytics.cookies');

        $this->translateContent();
    }

    protected function translateContent()
    {
        $this->config['content']['content'] = collect($this->config['content']['content'])->map(function ($message) {
            return __($message);
        })->all();
    }

    public function toJson()
    {
        return json_encode($this->config);
    }

    public static function make()
    {
        return new static;
    }
}
