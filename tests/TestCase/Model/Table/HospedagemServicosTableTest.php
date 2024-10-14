<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospedagemServicosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospedagemServicosTable Test Case
 */
class HospedagemServicosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HospedagemServicosTable
     */
    protected $HospedagemServicos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.HospedagemServicos',
        'app.Hospedagem',
        'app.Servico',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('HospedagemServicos') ? [] : ['className' => HospedagemServicosTable::class];
        $this->HospedagemServicos = $this->getTableLocator()->get('HospedagemServicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->HospedagemServicos);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HospedagemServicosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
