<?php

class Theme
{
    public function dark()
    {
        return  $darkTheme = $_COOKIE['darkTheme'] ?? null;
    }

    public function set($theme)
    {
        $time = time()+3600*24*365*10;

        if ($theme === null) {
            setcookie('darkTheme', 'on', $time, '/');
            return $_COOKIE['darkTheme'] = 'on';
        }

        setcookie('darkTheme', null, $time, '/');
        return $_COOKIE['darkTheme'] = null;
    }

    public function toggle()
    {
        $toggle = $_GET['toggle'] ?? null;

        if ($toggle === 'theme') {
            $theme = $this->set($this->dark());
        }
    }
}
