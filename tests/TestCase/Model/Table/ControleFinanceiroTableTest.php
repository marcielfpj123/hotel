<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControleFinanceiroTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControleFinanceiroTable Test Case
 */
class ControleFinanceiroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ControleFinanceiroTable
     */
    protected $ControleFinanceiro;

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
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ControleFinanceiro') ? [] : ['className' => ControleFinanceiroTable::class];
        $this->ControleFinanceiro = $this->getTableLocator()->get('ControleFinanceiro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ControleFinanceiro);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ControleFinanceiroTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ControleFinanceiroTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
