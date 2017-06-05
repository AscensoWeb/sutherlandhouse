<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HotelController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('hotel/index.html.twig');
    }

    public function carouselAction($pagina) {
        $em= $this->getDoctrine()->getManager();
        $pcs=$em->getRepository('AppBundle:PageCarousel')->findByPagina($pagina);
        return $this->render('hotel/carousel.html.twig',['pagina' => $pagina, 'pcs' => $pcs, 'urlBase' => $this->getParameter('app.path.carousel_images')]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/comentarios", name="hotel_comentario")
     */
    public function comentarioAction() {
        return $this->render('hotel/comentario.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/preguntas-frecuentes", name="hotel_faq")
     */
    public function faqAction() {
        $em= $this->getDoctrine()->getManager();
        $faqs=$em->getRepository('AppBundle:Faq')->doSelectSort();
        return $this->render('hotel/pregunta-frecuente.html.twig', ['faqs' => $faqs]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/habitaciones", name="hotel_habitacion_list")
     */
    public function habitacionListAction() {
        $ths=$this->getDoctrine()->getRepository('AppBundle:HabitacionTipo')->findAll();
        return $this->render('hotel/habitacion-list.html.twig',['habitaciones' => $ths, 'urlBase' => $this->getParameter('app.path.habitacion_tipo_images')]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/reserve-ahora", name="hotel_reserve")
     */
    public function reservarAction() {
        return $this->render('hotel/reserva.html.twig');
    }
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/tarifas-promociones", name="hotel_tarifa")
     */
    public function tarifaAction() {
        $em= $this->getDoctrine()->getManager();
        $tmps= $em->getRepository('AppBundle:Temporada')->doSelectByActiva();
        return $this->render('hotel/tarifa.html.twig', ['tmps' => $tmps]);
    }
}
