<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servico Entity
 *
 * @property int $id
 * @property string $tipo_servico
 * @property string $valor_servico
 *
 * @property \App\Model\Entity\HospedagemServico[] $hospedagem_servicos
 * @property \App\Model\Entity\Hospedagem[] $hospedagem
 */
class Servico extends Entity
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
        'tipo_servico' => true,
        'valor_servico' => true,
        'hospedagem_servicos' => true,
        'hospedagem' => true,
    ];
}
