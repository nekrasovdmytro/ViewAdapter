<?php

namespace View;


class View implements ViewInterface
{
    protected $view;

    public function setView($view)
    {
        $this->view = $view;
    }

    public function getView()
    {
        return $this->view;
    }
}