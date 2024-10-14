<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ControleFinanceiro Entity
 *
 * @property int $id
 * @property int $funcionario_id
 * @property int $ganho_id
 * @property int $despesa_id
 * @property string $fechamento_mes
 * @property string $valor_liquido
 * @property \Cake\I18n\Date $data_lanc
 * @property string $ano
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Ganho $ganho
 * @property \App\Model\Entity\Despesa $despesa
 */
class ControleFinanceiro extends Entity
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
        'funcionario_id' => true,
        'ganho_id' => true,
        'despesa_id' => true,
        'fechamento_mes' => true,
        'valor_liquido' => true,
        'data_lanc' => true,
        'ano' => true,
        'funcionario' => true,
        'ganho' => true,
        'despesa' => true,
    ];
}
