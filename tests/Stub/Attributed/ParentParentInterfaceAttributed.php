<?php

declare(strict_types=1);

namespace Temporal\Sugar\Tests\Stub\Attributed;

use Temporal\Sugar\Attribute\TaskQueue;

#[TaskQueue(name: 'test-queue-parent-parent-interface')]
interface ParentParentInterfaceAttributed
{
}
