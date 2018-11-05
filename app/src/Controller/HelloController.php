<?php
namespace Internship\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function hello()
    {
        return new Response(
            '<html><body>Hello world</body></html>'
        );
    }
}