<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebApprovalsAf $idebApprovalsAf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $idebApprovalsAf->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsAf->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ideb Approvals Af'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebApprovalsAf form content">
            <?= $this->Form->create($idebApprovalsAf) ?>
            <fieldset>
                <legend><?= __('Edit Ideb Approvals Af') ?></legend>
                <?php
                    echo $this->Form->control('location_id', ['options' => $locations]);
                    echo $this->Form->control('year');
                    echo $this->Form->control('aprov_total');
                    echo $this->Form->control('aprov_6');
                    echo $this->Form->control('aprov_7');
                    echo $this->Form->control('aprov_8');
                    echo $this->Form->control('aprov_9');
                    echo $this->Form->control('rendimento');
                    echo $this->Form->control('network');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
