<?php

namespace Tests\Support;

use CodeIgniter\Test\CIUnitTestCase;

/**
 * @internal
 */
abstract class TasksTestCase extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $_SESSION = [];
    }
}
