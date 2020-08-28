<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebProjection $idebProjection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $idebProjection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $idebProjection->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ideb Projections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebProjections form content">
            <?= $this->Form->create($idebProjection) ?>
            <fieldset>
                <legend><?= __('Edit Ideb Projection') ?></legend>
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
