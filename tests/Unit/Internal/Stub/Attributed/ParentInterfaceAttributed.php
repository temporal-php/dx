<?php

declare(strict_types=1);

namespace Temporal\Sugar\Tests\Unit\Internal\Stub\Attributed;

use Temporal\Sugar\Attribute\TaskQueue;

#[TaskQueue(name: 'test-queue-parent-interface')]
interface ParentInterfaceAttributed extends ParentParentInterfaceAttributed
{
}