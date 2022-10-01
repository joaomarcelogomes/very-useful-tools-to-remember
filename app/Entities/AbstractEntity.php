<?php

namespace App\Entities;

abstract class AbstractEntity implements \JsonSerializable
{

  /**
   * @inheritDoc
   */
  abstract public function jsonSerialize(): array;
}
