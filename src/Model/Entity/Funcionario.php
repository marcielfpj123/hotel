<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property string $cpf
 * @property string $doc_pessoal
 * @property string $nome
 * @property string $endereco
 * @property \Cake\I18n\Date $data_nasc
 * @property string $funcao
 * @property string $salario
 * @property string|null $avaliacao
 * @property \Cake\I18n\DateTime $data_cadastro
 *
 * @property \App\Model\Entity\Contato[] $contato
 * @property \App\Model\Entity\ControleFinanceiro[] $controle_financeiro
 * @property \App\Model\Entity\Despesa[] $despesa
 * @property \App\Model\Entity\Hospedagem[] $hospedagem
 * @property \App\Model\Entity\Reserva[] $reserva
 */
class Funcionario extends Entity
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
        'cpf' => true,
        'doc_pessoal' => true,
        'nome' => true,
        'endereco' => true,
        'data_nasc' => true,
        'funcao' => true,
        'salario' => true,
        'avaliacao' => true,
        'data_cadastro' => true,
        'contato' => true,
        'controle_financeiro' => true,
        'despesa' => true,
        'hospedagem' => true,
        'reserva' => true,
    ];
}
