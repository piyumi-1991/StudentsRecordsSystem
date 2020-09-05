<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $studentsRecord
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Students Record'), ['action' => 'edit', $studentsRecord->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Students Record'), ['action' => 'delete', $studentsRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsRecord->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Students Record'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="studentsRecords view content">
            <h3><?= h($studentsRecord->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Class Room') ?></th>
                    <td><?= h($studentsRecord->class_room) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teachers Name') ?></th>
                    <td><?= h($studentsRecord->teachers_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student Firstname') ?></th>
                    <td><?= h($studentsRecord->student_firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student Lastname') ?></th>
                    <td><?= h($studentsRecord->student_lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($studentsRecord->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($studentsRecord->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Joined Year') ?></th>
                    <td><?= $this->Number->format($studentsRecord->joined_year) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
