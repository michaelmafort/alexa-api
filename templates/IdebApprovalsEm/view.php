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
            <?= $this->Html->link(__('Edit Ideb Approvals Em'), ['action' => 'edit', $idebApprovalsEm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ideb Approvals Em'), ['action' => 'delete', $idebApprovalsEm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsEm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ideb Approvals Em'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ideb Approvals Em'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebApprovalsEm view content">
            <h3><?= h($idebApprovalsEm->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $idebApprovalsEm->has('location') ? $this->Html->link($idebApprovalsEm->location->name, ['controller' => 'Locations', 'action' => 'view', $idebApprovalsEm->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Network') ?></th>
                    <td><?= h($idebApprovalsEm->network) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov Total') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 1') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 2') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 3') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 4') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rendimento') ?></th>
                    <td><?= $this->Number->format($idebApprovalsEm->rendimento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
