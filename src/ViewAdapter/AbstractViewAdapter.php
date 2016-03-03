<?php

namespace ViewAdapter;

use View\ViewInterface;

abstract class AbstractViewAdapter
{
    protected $view;
    protected $adapted;

    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

    abstract protected function convert();

    public function getView()
    {
        return $this->convert();
    }
}