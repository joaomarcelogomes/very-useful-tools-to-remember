<?php

namespace App\Parsers;

use App\Entities\Tool;

class ToolParser
{
    public function parse(Tool $tool)
    {
        return [
            'id' => $tool->getId(),
            'title' => $tool->getTitle(),
            'link' => $tool->getLink(),
            'description' => $tool->getDescription()
        ];
    }

    public function parseAll(array $tools)
    {
        return array_map(
            function($tool) {
                return $this->parse($tool);
            }, $tools
        );
    }
}
