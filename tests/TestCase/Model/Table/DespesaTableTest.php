<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DespesaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DespesaTable Test Case
 */
class DespesaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DespesaTable
     */
    protected $Despesa;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Despesa',
        'app.Funcionario',
        'app.Produto',
        'app.ControleFinanceiro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Despesa') ? [] : ['className' => DespesaTable::class];
        $this->Despesa = $this->getTableLocator()->get('Despesa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Despesa);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DespesaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DespesaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
