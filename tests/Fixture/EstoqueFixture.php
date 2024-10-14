<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstoqueFixture
 */
class EstoqueFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'estoque';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'produto_id' => 1,
                'ifuncionario_id' => 1,
                'data_baixa' => '2024-10-14 22:10:57',
                'data_lanc' => '2024-10-14 22:10:57',
                'tipo_operacao' => 'Lo',
                'quant' => 1,
                'obs' => 'Lorem ipsum dolor sit amet',
                'num_fiscal' => 1,
            ],
        ];
        parent::init();
    }
}
