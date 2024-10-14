<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ControleFinanceiroController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ControleFinanceiroController Test Case
 *
 * @uses \App\Controller\ControleFinanceiroController
 */
class ControleFinanceiroControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ControleFinanceiro',
        'app.Funcionario',
        'app.Ganho',
        'app.Despesa',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ControleFinanceiroController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ControleFinanceiroController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ControleFinanceiroController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ControleFinanceiroController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ControleFinanceiroController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
