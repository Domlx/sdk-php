<?php

namespace Upmind\Sdk\Test\Data;

use PHPUnit\Framework\TestCase;
use Upmind\Sdk\Data\QueryParams;

class QueryParamsTest extends TestCase
{
    public function testQueryParamsCanBeOverwritten(): void
    {
        $initialValue = ['with' => 'something'];

        $queryParams = new QueryParams($initialValue);
        $queryParams->setParam('with', 'something-else');

        $result = $queryParams->toArray();

        $this->assertEquals(['with' => 'something-else'], $result);
    }
}
