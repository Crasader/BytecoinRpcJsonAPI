<?php

namespace Bytecoin\RpcJsonAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BytecoinRpcJsonAPIBundle:Default:index.html.twig');
    }
}
