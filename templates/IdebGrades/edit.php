<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebGrade $idebGrade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $idebGrade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $idebGrade->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ideb Grades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebGrades form content">
            <?= $this->Form->create($idebGrade) ?>
            <fieldset>
                <legend><?= __('Edit Ideb Grade') ?></legend>
                <?php
                    echo $this->Form->control('location_id', ['options' => $locations]);
                    echo $this->Form->control('year');
                    echo $this->Form->control('mat');
                    echo $this->Form->control('lp');
                    echo $this->Form->control('avg');
                    echo $this->Form->control('network');
                    echo $this->Form->control('stage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
