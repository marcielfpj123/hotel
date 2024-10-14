<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $cpf
 * @property string $doc_pessoal
 * @property string $nome
 * @property string $endereco
 * @property string $cidade
 * @property string $estado
 * @property string $pais
 * @property string $motivo_visita
 * @property string $email
 * @property string $redes_socias
 * @property string $profissao
 *
 * @property \App\Model\Entity\Contato[] $contato
 * @property \App\Model\Entity\Reserva[] $reserva
 */
class Cliente extends Entity
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
        'cidade' => true,
        'estado' => true,
        'pais' => true,
        'motivo_visita' => true,
        'email' => true,
        'redes_socias' => true,
        'profissao' => true,
        'contato' => true,
        'reserva' => true,
    ];
}
