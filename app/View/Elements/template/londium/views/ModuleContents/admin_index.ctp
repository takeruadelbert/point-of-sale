<?php
echo $this->element(_TEMPLATE_DIR."/{$template}/filter/module-content");
?>
<div class="panel panel-default">
    <div class="datatable-pagination">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?= __("Label") ?></th>
                    <th><?= __("Alias") ?></th>
                    <th><?= __("Module") ?></th>
                    <th><?= __("Parent") ?></th>
                    <th><?= __("Aksi") ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $limit = intval(isset($this->params['named']['limit']) ? $this->params['named']['limit'] : 10);
                $page = intval(isset($this->params['named']['page']) ? $this->params['named']['page'] : 1);
                $i = ($limit * $page) - ($limit - 1);
                foreach ($data['rows'] as $item) {
                    ?>
                    <tr id="row-<?= $i ?>">
                        <td><?= $i ?></td>
                        <td><?= $item['ModuleContent']['name'] ?></td>
                        <td><?= $this->Echo->empty_strip($item['ModuleContent']['alias']) ?></td>
                        <td><?= $item['Module']['name'] ?></td>
                        <td><?= $this->Echo->empty_strip($item['Parent']['name']) ?></td>
                        <td><a href="<?= Router::url("/admin/module_contents/edit/{$item['ModuleContent']['id']}")?>"><span class="btn btn-info"><?= __("Ubah") ?></span></a>&nbsp;<span class="btn btn-danger" onclick="hapusData(<?= $item[Inflector::classify($this->params['controller'])]['id']; ?>, '#row-<?= $i ?>')"><?= __("Hapus") ?></span></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->element(_TEMPLATE_DIR."/{$template}/pagination") ?>
