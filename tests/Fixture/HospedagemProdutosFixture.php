<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospedagemProdutosFixture
 */
class HospedagemProdutosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'hospedagem_id' => 1,
                'produto_id' => 1,
            ],
        ];
        parent::init();
    }
}
