<?php


namespace ReCaptcha;

use PHPUnit\Framework\TestCase;

//use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeatureUnitTest extends TestCase
{
    public function tesFeature($invalid)
    {
        $recaptcha = new ReCaptcha($invalid);

    }

    public function testError()
    {
        $recaptcha = new ReCaptcha('secret');
        $r = $recaptcha->verify('');
        $this->assertFalse($r->isSuccess());
        $this->assertEquals(array(Recaptcha::E_MISSING_INPUT_RESPONSE), $r->getErrorCodes());

    }
}
