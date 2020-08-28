<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebApprovalsAi $idebApprovalsAi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ideb Approvals Ai'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebApprovalsAi form content">
            <?= $this->Form->create($idebApprovalsAi) ?>
            <fieldset>
                <legend><?= __('Add Ideb Approvals Ai') ?></legend>
                <?php
                    echo $this->Form->control('location_id', ['options' => $locations]);
                    echo $this->Form->control('year');
                    echo $this->Form->control('aprov_total');
                    echo $this->Form->control('aprov_1');
                    echo $this->Form->control('aprov_2');
                    echo $this->Form->control('aprov_3');
                    echo $this->Form->control('aprov_4');
                    echo $this->Form->control('aprov_5');
                    echo $this->Form->control('rendimento');
                    echo $this->Form->control('network');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
