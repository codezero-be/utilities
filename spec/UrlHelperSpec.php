<?php namespace spec\CodeZero\Utilities;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UrlHelperSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('CodeZero\Utilities\UrlHelper');
    }

    function it_joins_slugs_in_a_formatted_url()
    {
        $urlParts = [
            'http://www.mysite.com/',
            '/subdir',
            'someOtherDir/',
            '/somepage.php'
        ];

        $this->joinSlugs($urlParts)->shouldReturn('http://www.mysite.com/subdir/someOtherDir/somepage.php');
    }

}