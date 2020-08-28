<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebApprovalsEm $idebApprovalsEm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $idebApprovalsEm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsEm->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ideb Approvals Em'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebApprovalsEm form content">
            <?= $this->Form->create($idebApprovalsEm) ?>
            <fieldset>
                <legend><?= __('Edit Ideb Approvals Em') ?></legend>
                <?php
                    echo $this->Form->control('location_id', ['options' => $locations]);
                    echo $this->Form->control('year');
                    echo $this->Form->control('aprov_total');
                    echo $this->Form->control('aprov_1');
                    echo $this->Form->control('aprov_2');
                    echo $this->Form->control('aprov_3');
                    echo $this->Form->control('aprov_4');
                    echo $this->Form->control('rendimento');
                    echo $this->Form->control('network');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
