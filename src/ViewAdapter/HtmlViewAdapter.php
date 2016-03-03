<?php

namespace ViewAdapter;


use View\ViewInterface;

class HtmlViewAdapter extends AbstractViewAdapter
{
    public function __construct(ViewInterface $view)
    {
        parent::__construct($view);
    }

    protected function convert()
    {
        $this->adapted = str_replace("\n", '<br/>', $this->view->getView());

        return $this->adapted;
    }
}