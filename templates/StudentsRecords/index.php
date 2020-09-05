<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $studentsRecords
 */
?>
<div class="studentsRecords index content">
    <?= $this->Html->link(__('New Students Record'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Students Records') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('class_room') ?></th>
                    <th><?= $this->Paginator->sort('teachers_name') ?></th>
                    <th><?= $this->Paginator->sort('student_firstname') ?></th>
                    <th><?= $this->Paginator->sort('student_lastname') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('joined_year') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($studentsRecords as $studentsRecord): ?>
                <tr>
                    <td><?= $this->Number->format($studentsRecord->id) ?></td>
                    <td><?= h($studentsRecord->class_room) ?></td>
                    <td><?= h($studentsRecord->teachers_name) ?></td>
                    <td><?= h($studentsRecord->student_firstname) ?></td>
                    <td><?= h($studentsRecord->student_lastname) ?></td>
                    <td><?= h($studentsRecord->gender) ?></td>
                    <td><?= $this->Number->format($studentsRecord->joined_year) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $studentsRecord->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentsRecord->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentsRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsRecord->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
