<?php

namespace App\Controller;

use App\Entity\Proyectos;
use App\Form\ProyectosType;
use App\Repository\ProyectosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/apiproyectos')]
class ApiController extends AbstractController
{
    #[Route('/list', name: 'app_apiproyectos_index', methods: ['GET'])]
    public function index(ProyectosRepository $proyectosRepository): Response
    {
        $proyectos = $proyectosRepository->findAll();

        $data = [];

        foreach ($proyectos as $p) {
            $data[] = [
                'id' => $p->getId(),
                'Nombre' => $p->getNombre(),
                'Descripcion' => $p->getDescripcion(),
                'Imagen' => $p->getImagen(),
                'github' => $p->getGithub(),
            ];
            
        }

        //dump($data);die; 
        //return $this->json($data);
        return $this->json($data, $status = 200, $headers = ['Access-Control-Allow-Origin'=>'*']);
    }
}