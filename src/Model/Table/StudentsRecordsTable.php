<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StudentsRecords Model
 *
 * @method \App\Model\Entity\StudentsRecord newEmptyEntity()
 * @method \App\Model\Entity\StudentsRecord newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StudentsRecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StudentsRecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\StudentsRecord findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StudentsRecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StudentsRecord[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StudentsRecord|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StudentsRecord saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StudentsRecord[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StudentsRecord[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StudentsRecord[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StudentsRecord[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StudentsRecordsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('students_records');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('class_room')
            ->maxLength('class_room', 1)
            ->allowEmptyString('class_room');

        $validator
            ->scalar('teachers_name')
            ->maxLength('teachers_name', 8)
            ->allowEmptyString('teachers_name');

        $validator
            ->scalar('student_firstname')
            ->maxLength('student_firstname', 13)
            ->allowEmptyString('student_firstname');

        $validator
            ->scalar('student_lastname')
            ->maxLength('student_lastname', 17)
            ->allowEmptyString('student_lastname');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->allowEmptyString('gender');

        $validator
            ->integer('joined_year')
            ->allowEmptyString('joined_year');

        return $validator;
    }
}
