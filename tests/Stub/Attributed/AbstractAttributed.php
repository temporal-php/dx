<?php

declare(strict_types=1);

namespace Temporal\Sugar\Tests\Stub\Attributed;

use Temporal\Sugar\Attribute\TaskQueue;

#[TaskQueue(name: 'test-queue-abstract')]
abstract class AbstractAttributed implements InterfaceAttributed
{
}
