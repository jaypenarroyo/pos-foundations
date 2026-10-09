<?php

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

final class PagesTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePageLoads(): void
    {
        $result = $this->get('/');

        $result->assertStatus(200);
        $result->assertSee('Your first POS application');
    }

    public function testAboutPageLoads(): void
    {
        $result = $this->get('/about');

        $result->assertStatus(200);
        $result->assertSee('Built to demonstrate CodeIgniter foundations');
    }

    public function testCustomersPageListsFiveRecords(): void
    {
        $result = $this->get('/customers');

        $result->assertStatus(200);
        $result->assertSee('Customer Accounts');
        $result->assertSee('Maria Santos');
        $result->assertSee('Nicole Garcia');
    }

    public function testUsersPageListsFiveRecords(): void
    {
        $result = $this->get('/users');

        $result->assertStatus(200);
        $result->assertSee('User Accounts');
        $result->assertSee('admin');
        $result->assertSee('inventory01');
    }
}
