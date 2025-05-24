<?php

namespace Spatie\Robots;

class UserAgentRuleGroup
{

    /**
     * @param string $userAgent
     * @param UserAgentRule[] $rules
     */
    public function __construct(
        public readonly string $userAgent,
        public readonly array $rules,
    ) {

    }

}