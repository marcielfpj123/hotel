<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estoque Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property int $ifuncionario_id
 * @property \Cake\I18n\DateTime|null $data_baixa
 * @property \Cake\I18n\DateTime|null $data_lanc
 * @property string $tipo_operacao
 * @property int $quant
 * @property string|null $obs
 * @property int|null $num_fiscal
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Estoque extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'produto_id' => true,
        'ifuncionario_id' => true,
        'data_baixa' => true,
        'data_lanc' => true,
        'tipo_operacao' => true,
        'quant' => true,
        'obs' => true,
        'num_fiscal' => true,
        'produto' => true,
        'funcionario' => true,
    ];
}
