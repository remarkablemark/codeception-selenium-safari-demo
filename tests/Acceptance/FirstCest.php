<?php

declare(strict_types=1);

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

final class FirstCest
{
    public function _before(AcceptanceTester $I): void
    {
        $I->amOnPage('/');
    }

    public function tryToTest(AcceptanceTester $I): void
    {
        $I->see('Example');
    }
}
