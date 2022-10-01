<?php

namespace App\Http\Controllers;


use App\Entities\Tool;
use Illuminate\Http\Request;
use App\Factories\ToolFactory;
use Doctrine\ORM\EntityManagerInterface;

class ToolController extends Controller
{
  public function __construct(
    private EntityManagerInterface $entityManager,
    private ToolFactory $factory
  ) {}

  public function index()
  {
    return $this->entityManager->getRepository(Tool::class)->findAll();
  }

  public function show(int $id)
  {
    return $this->entityManager->getRepository(Tool::class)->find($id);
  }

  public function store(Request $request)
  {
    $body = json_decode($request->getContent(), true);

    $tool = $this->factory->new($body);
    $this->entityManager->persist($tool);
    $this->entityManager->flush();

    return [
      'id' => $tool->getId()
    ];
  }

  public function update(int $id, Request $request)
  {
    $newData = json_decode($request->getContent(), true);
    $tool = $this->entityManager->getRepository(Tool::class)->find($id);

    $this->factory->update($tool, $newData);
    $this->entityManager->flush();

    return $tool;
  }

  public function destroy(int $id)
  {
    $tool = $this->entityManager->getRepository(Tool::class)->find($id);
    $this->entityManager->remove($tool);
    $this->entityManager->flush();

    return [
      $id => 'deleted'
    ];
  }
}
