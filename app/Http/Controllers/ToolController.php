<?php

namespace App\Http\Controllers;


use App\Entities\Tool;
use App\Parsers\ToolParser;
use Illuminate\Http\Request;
use Doctrine\ORM\EntityManagerInterface;

class ToolController extends Controller
{
    public function __construct(
        private ToolParser $parser,
        private EntityManagerInterface $entityManager
    ) {}

    public function index()
    {
        $tools = $this->entityManager->getRepository(Tool::class)->findAll();
        return $this->parser->parseAll($tools);
    }

    public function store(Request $request)
    {
        $body = json_decode($request->getContent(), true);
        $tool = new Tool($body['title'], $body['link'], $body['description']);
        $this->entityManager->persist($tool);
        $this->entityManager->flush();

        return 'Tool has been inserted!';
    }
}
