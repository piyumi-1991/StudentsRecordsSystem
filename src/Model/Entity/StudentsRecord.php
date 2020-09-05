<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StudentsRecord Entity
 *
 * @property int $id
 * @property string|null $class_room
 * @property string|null $teachers_name
 * @property string|null $student_firstname
 * @property string|null $student_lastname
 * @property string|null $gender
 * @property int|null $joined_year
 */
class StudentsRecord extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'class_room' => true,
        'teachers_name' => true,
        'student_firstname' => true,
        'student_lastname' => true,
        'gender' => true,
        'joined_year' => true,
    ];
}
