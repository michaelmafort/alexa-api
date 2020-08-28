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
            <?= $this->Html->link(__('Edit Ideb Approvals Af'), ['action' => 'edit', $idebApprovalsAf->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ideb Approvals Af'), ['action' => 'delete', $idebApprovalsAf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsAf->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ideb Approvals Af'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ideb Approvals Af'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebApprovalsAf view content">
            <h3><?= h($idebApprovalsAf->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $idebApprovalsAf->has('location') ? $this->Html->link($idebApprovalsAf->location->name, ['controller' => 'Locations', 'action' => 'view', $idebApprovalsAf->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Network') ?></th>
                    <td><?= h($idebApprovalsAf->network) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov Total') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 6') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 7') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 8') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_8) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 9') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_9) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rendimento') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAf->rendimento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
