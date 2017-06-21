<?php if($this->isEditable() || $entity->tainacan_url): ?>
        <p><span class="label"><?php \MapasCulturais\i::_e("Link do Repositório Tainacan");?>:</span>
        <?php if($this->isEditable()): ?>
            <span class="js-editable" data-edit="tainacan_url" data-original-title="Tainacan" 
                  data-emptytext="Insira a url do seu repositório"><?php echo $entity->tainacan_url; ?></span></p>
        <?php else: ?>
            <a class="url" href="<?php echo $entity->tainacan_url; ?>"><?php echo $entity->tainacan_url; ?></a>
        <?php endif; ?>
<?php endif; ?>