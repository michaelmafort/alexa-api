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
            <?= $this->Html->link(__('Edit Ideb Approvals Ai'), ['action' => 'edit', $idebApprovalsAi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ideb Approvals Ai'), ['action' => 'delete', $idebApprovalsAi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsAi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ideb Approvals Ai'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ideb Approvals Ai'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebApprovalsAi view content">
            <h3><?= h($idebApprovalsAi->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $idebApprovalsAi->has('location') ? $this->Html->link($idebApprovalsAi->location->name, ['controller' => 'Locations', 'action' => 'view', $idebApprovalsAi->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Network') ?></th>
                    <td><?= h($idebApprovalsAi->network) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov Total') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 1') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 2') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 3') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 4') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aprov 5') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rendimento') ?></th>
                    <td><?= $this->Number->format($idebApprovalsAi->rendimento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
