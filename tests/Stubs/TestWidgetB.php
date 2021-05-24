<?php

declare(strict_types=1);

namespace Yiisoft\Widget\Tests\Stubs;

use Yiisoft\Widget\Widget;

final class TestWidgetB extends Widget
{
    private string $id;

    public function run(): string
    {
        return '<run-' . $this->id . '>';
    }

    public function id(string $value): Widget
    {
        $this->id = $value;

        return $this;
    }
}
