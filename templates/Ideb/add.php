<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ideb $ideb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ideb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ideb form content">
            <?= $this->Form->create($ideb) ?>
            <fieldset>
                <legend><?= __('Add Ideb') ?></legend>
                <?php
                    echo $this->Form->control('location_id', ['options' => $locations]);
                    echo $this->Form->control('year');
                    echo $this->Form->control('score');
                    echo $this->Form->control('network');
                    echo $this->Form->control('stage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
