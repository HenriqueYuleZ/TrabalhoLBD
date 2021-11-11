<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 * @var string[]|\Cake\Collection\CollectionInterface $livros
 * @var string[]|\Cake\Collection\CollectionInterface $menus
 * @var string[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorias form content">
            <?= $this->Form->create($categoria) ?>
            <fieldset>
                <legend><?= __('Edit Categoria') ?></legend>
                <?php
                    echo $this->Form->control('livro_id', ['options' => $livros]);
                    echo $this->Form->control('menu_id', ['options' => $menus]);
                    echo $this->Form->control('usuario_id', ['options' => $usuarios]);
                    echo $this->Form->control('paginas_lidas');
                    echo $this->Form->control('tipo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
