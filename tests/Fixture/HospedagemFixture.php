<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospedagemFixture
 */
class HospedagemFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'hospedagem';
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
                'funcionario_id' => 1,
                'reserva_id' => 1,
                'data_hosp' => '2024-10-14 22:11:10',
                'valor_total' => 1.5,
                'tipo_pagamento' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
