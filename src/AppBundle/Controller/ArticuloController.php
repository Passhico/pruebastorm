<?php


namespace AppBundle\Controller;

use AppBundle\Controller\ApiGator;
use AppBundle\Entity\Articulo;
use AppBundle\Form\ArticuloType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Articulo controller.
 *
 * @Route("articulo")
 */
class ArticuloController extends Controller
{
    /**
     * Mostrar todos los artículos.
     *
     * @Route("/", name="articulo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render(
            'articulo/index.html.twig',
            array(
                'articulos' => $this->getDoctrine()->getManager()->getRepository(Articulo::class)->findAll(),
            )
        );
    }

    /**
     * Creates a new articulo entity.
     *
     * @Route("/new", name="articulo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $articulo = new Articulo();
        //este form se bindea directamente a la entidad.
        $form = $this->createForm('AppBundle\Form\ArticuloType', $articulo);
        $form->handleRequest($request);

        //Crea el artículo
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($articulo);
            $em->flush($articulo);

            //lo muestra.
            return $this->redirectToRoute('articulo_show', array('id' => $articulo->getId()));
        }

        return $this->render(
            'articulo/new.html.twig',
            array(
                'articulo' => $articulo,
                'form' => $form->createView(),
            )
        );
    }

    /**
     * Muestra los artículos según el id .
     *
     * @Route("/{id}", name="articulo_show")
     * @Method("GET")
     */
    public function showAction(Articulo $articulo)
    {
        $deleteForm = $this->createDeleteForm($articulo);

        return $this->render(
            'articulo/show.html.twig',
            array(
                'articulo' => $articulo,
                'delete_form' => $deleteForm->createView(),

            )
        );
    }

    /**
     * Muestra un formulario de ediciónd e los artículos.
     *
     * @Route("/{id}/edit", name="articulo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Articulo $articulo)
    {
        $deleteForm = $this->createDeleteForm($articulo);
        $editForm = $this->createForm('AppBundle\Form\ArticuloType', $articulo);

        //no queremos modificar el nombre , solo los puntos.
        $editForm->remove('nombre');

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('articulo_edit', array('id' => $articulo->getId()));
        }

        return $this->render(
            'articulo/edit.html.twig',
            array(
                'articulo' => $articulo,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Borra un artículo.
     *
     * @Route("/{id}", name="articulo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Articulo $articulo)
    {
        $form = $this->createDeleteForm($articulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($articulo);
            $em->flush($articulo);
        }

        return $this->redirectToRoute('articulo_index');
    }

    /**
     * Crea formulario para borrar una entidad.
     *
     * @param Articulo $articulo The articulo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Articulo $articulo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articulo_delete', array('id' => $articulo->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }


    /**
     * http://stackoverflow.com/questions/11980175/how-can-i-have-optional-parameters-in-symfony2-route
     *
     * @Route("/buscar/", name="buscar_sin_articulo")
     * @Route("/buscar/{nombre}" , name="buscador")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function BuscaPorNombreAction(\Symfony\Component\HttpFoundation\Request $request, string $nombre = null)
    {
        $Articulo2Search = new Articulo();

        $formBuscaArticulo = $this->creaBuscaForm($Articulo2Search);

        $formBuscaArticulo->handleRequest($request);

        if ($formBuscaArticulo->isSubmitted() && $formBuscaArticulo->isValid()) {
            return $this->redirectToRoute("buscador", ["nombre" => $formBuscaArticulo->get("nombre")->getData()]);
        }

        return $this->render(
            "articulo/busca.html.twig",
            [
                "articulos" => $this->getDoctrine()->getManager()->getRepository(Articulo::class)->EncuentraPorNombre(
                    $nombre
                ),
                "formArticulo" => $formBuscaArticulo->createView(),
                "request" => $request,
                "totalpuntos" => $this->getDoctrine()->getManager()->getRepository(Articulo::class)->totalPuntos(),


            ]
        );

    }

    private function creaBuscaForm(Articulo $Articulo2Search)
    {
        $formBuscaArticulo = $this->createForm(ArticuloType::class, $Articulo2Search);
        $formBuscaArticulo->add(
            'Buscar',
            \Symfony\Component\Form\Extension\Core\Type\SubmitType::class,
            [
                "label" => 'Buscar',
                "attr" =>
                    [
                        "class" => "button btn-warning form-control",
                    ],
            ]
        );
        $formBuscaArticulo->remove('puntos');

        // $formBuscaArticulo->add('action' => $this->generateUrl('buscador', ['nombre' => $Articulo2Search->getNombre()]));


        return $formBuscaArticulo;
    }

    /**
     * URIGUELLER:
     * http://192.168.50.101/articles/43325?access_token=Zjc2NTRjYjFlNjVkYWRiYmUwNTY0ZGM0MWI5MzE1OGE1ZmUxODYwZGUxNmNmMzQxYjEyODMxYjI3MjM0ZDVlMQ
     *
     *
     * @Route("/api/{id}" , name="api")
     *
     *
     * @return Response
     */
    public function ApiArticuloAction(int  $id = null)
    {

        $HttpHeader[] = 'Accept: application/json';
        $HttpHeader[] = 'Content-Type: application/json';
        $HttpHeader[] = 'Content-length: 0';

        $PccomApiGator = new ApiGator(
            "http://192.168.50.101/articles/". $id ."?access_token=Zjc2NTRjYjFlNjVkYWRiYmUwNTY0ZGM0MWI5MzE1OGE1ZmUxODYwZGUxNmNmMzQxYjEyODMxYjI3MjM0ZDVlMQ",
            $HttpHeader
        );


        $arrayArticulo = json_decode($PccomApiGator->getCurlResponse(), true);


        return $this->render(
            ':articulo:apiArticulo.html.twig',
            [
                'articulo_arrayCompleto' => $arrayArticulo,
                'articulo_idArticle' => $arrayArticulo["idArticle"],
                'articulo_price' => $arrayArticulo["price"]["price"],
                'articulo_nombre' => $arrayArticulo["name"],
                'articulo_detalle' => $arrayArticulo["detail"],
                'articulo_stockMurcia' => $arrayArticulo["storeAvailability"]["1"],
                'articulo_stockMadrid' => $arrayArticulo["storeAvailability"]["28"],
                'articulo_image' => $arrayArticulo["images"]["mainImage"],

            ]
        );


    }

}
