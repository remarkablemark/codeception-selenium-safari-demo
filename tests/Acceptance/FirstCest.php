<?php

declare(strict_types=1);

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

final class FirstCest
{
    public function _before(AcceptanceTester $I): void
    {
        $I->amOnPage('/');
        $I->waitForElement('[title="Secure card payment input frame"]');
        $I->scrollTo('[title="Secure card payment input frame"]');
    }

    public function tryToTest(AcceptanceTester $I): void
    {
        $I->switchToIFrame('[title="Secure card payment input frame"]');
        $I->fillField('[placeholder="Card number"]', '4242424242424242');
        $I->type('1234');
        $I->type('123');
        $I->wait(10);
    }
}
