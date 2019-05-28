<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/blog.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article1", name="article_1")
     */
    public function article_1()
    {
        return $this->render('blog/article_1.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article2", name="article_2")
     */
    public function article_2()
    {
        return $this->render('blog/article_2.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article3", name="article_3")
     */
    public function article_3()
    {
        return $this->render('blog/article_3.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article4", name="article_4")
     */
    public function article_4()
    {
        return $this->render('blog/article_4.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article5", name="article_5")
     */
    public function article_5()
    {
        return $this->render('blog/article_5.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article6", name="article_6")
     */
    public function article_6()
    {
        return $this->render('blog/article_6.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article7", name="article_7")
     */
    public function article_7()
    {
        return $this->render('blog/article_7.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/article8", name="article_8")
     */
    public function article_8()
    {
        return $this->render('blog/article_8.html.twig');
    }
}
