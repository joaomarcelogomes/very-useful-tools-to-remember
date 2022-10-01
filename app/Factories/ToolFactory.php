<?php

namespace App\Factories;

use App\Entities\Tool;

class ToolFactory
{
  public function new(array $data): Tool
  {
    $tool = new Tool();
    $this->setData($tool, $data);

    return $tool;
  }

  public function update(Tool $tool, array $data): void
  {
    $this->setData($tool, $data);
  }

  private function setData(Tool $tool, array $data)
  {
    foreach ($data as $attribute => $value) {
      $setMethod = "set".ucfirst($attribute);
      if(method_exists(Tool::class, $setMethod)) {
        $tool->$setMethod($value);
      }
    }
  }
}
