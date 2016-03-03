<?php

namespace Tests\ViewAdapter;

use View\View;

class HtmlViewAdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testGetView()
    {
        $view = $this->getMockBuilder("View\View")->getMock();

        $view->expects($this->once())->method('getView')->will($this->returnValue("hi everyone! \n"));

        $htmlViewAdapter = new \ViewAdapter\HtmlViewAdapter($view);

        $this->assertEquals("hi everyone! <br/>", $htmlViewAdapter->getView());
    }
}