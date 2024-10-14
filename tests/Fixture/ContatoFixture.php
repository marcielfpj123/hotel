<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContatoFixture
 */
class ContatoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'contato';
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
                'cliente_id' => 1,
                'funcionario_id' => 1,
                'numero_telefone' => 'Lorem ipsum dolor ',
                'tipo_contato' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
