<?php

namespace Spatie\Robots;

class UserAgentRule
{

    public function __construct(
        public readonly string $name,
        public readonly string $value,
    ) {

    }

}