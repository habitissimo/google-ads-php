<?php

/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Examples\Utils;

use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `Helper`.
 *
 * @see Helper
 * @small
 */
class HelperTest extends TestCase
{
    /**
     * @dataProvider microToBaseCases
     * @covers \Google\Ads\GoogleAds\Examples\Utils\Helper::microToBase()
     */
    public function testMicroToBase($amount, float $expectedResult)
    {
        $this->assertEquals($expectedResult, Helper::MicroToBase($amount));
    }

    public function microToBaseCases()
    {
        return [
            [123456, 0.123456],
            [1234567, 1.234567],
            [0, 0.0],
            [123456.0, 0.123456],
            [1234567.0, 1.234567],
            [0.0, 0.0],
            [null, 0.0]
        ];
    }

    /**
     * @dataProvider baseToMicroCases
     * @covers \Google\Ads\GoogleAds\Examples\Utils\Helper::baseToMicro()
     */
    public function testBaseToMicro($amount, int $expectedResult)
    {
        $this->assertEquals($expectedResult, Helper::BaseToMicro($amount));
    }

    public function baseToMicroCases()
    {
        return [
            [0.123456, 123456],
            [1.234567, 1234567],
            [1, 1000000],
            [0, 0],
            [null, 0]
        ];
    }
}
