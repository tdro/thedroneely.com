<?php

class Theme
{
    public function color()
    {
        return $theme = $_COOKIE['theme'] ?? null;
    }

    public function option()
    {
        return $theme = $_GET['theme'] ?? null;
    }

    public function set($theme)
    {
        $time = time() + 3600 * 24 * 365 * 10;

        if ($theme === null) {
            setcookie('theme', 'dark', $time, '/');
            return $_COOKIE['theme'] = 'dark';
        }

        setcookie('theme', $theme, $time, '/');
        return $_COOKIE['theme'] = $theme;

    }

    public function toggle()
    {
        $theme = $this->option();

        if ($theme === 'dark') {
            $theme = $this->set($this->option());
            return;
        }

        if ($theme === 'light') {
            $theme = $this->set($this->option());
        }
    }
}
