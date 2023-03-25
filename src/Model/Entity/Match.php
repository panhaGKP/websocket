<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Match Entity
 *
 * @property int $id
 * @property int $room_code
 * @property int $bleu_team_id
 * @property string|null $bleu_team_name
 * @property int $bleu_team_score
 * @property int $red_team_id
 * @property string|null $red_team_name
 * @property int $red_team_score
 * @property int $timer
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Match extends Entity
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
    protected $_accessible = [
        'room_code' => true,
        'bleu_team_id' => true,
        'bleu_team_name' => true,
        'bleu_team_score' => true,
        'red_team_id' => true,
        'red_team_name' => true,
        'red_team_score' => true,
        'timer' => true,
        'created' => true,
        'modified' => true,
    ];
}
