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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $studentsRecord->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $studentsRecord->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Students Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="studentsRecords form content">
            <?= $this->Form->create($studentsRecord) ?>
            <fieldset>
                <legend><?= __('Edit Students Record') ?></legend>
                <?php
                    echo $this->Form->control('class_room');
                    echo $this->Form->control('teachers_name');
                    echo $this->Form->control('student_firstname');
                    echo $this->Form->control('student_lastname');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('joined_year');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
