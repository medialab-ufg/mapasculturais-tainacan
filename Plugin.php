<?php
namespace Tainacan;

use MapasCulturais\app;

/**
 * Plugin que permite um museu adicionar a 
 * URL de seu repositório no Tainacan
 */
class Plugin extends \MapasCulturais\Plugin {

    public function _init() {
        $app = App::i();
        
        $app->hook('template(space.<<create|edit|single>>.tab-about-service):end', function() use($app){
            $spaceEntity = $app->view->controller->requestedEntity;
            $this->part('tainacan-repository-url', ['entity' => $spaceEntity]);
        });
    }

    public function register() {
        $app = App::i();
        $app->view->registerSpaceMetadata('tainacan_url', array(
            'label' => 'Link do Repositório Tainacan',
            'type' => 'string',
            'validations' => [
                'v::url()' => 'URL inválida'
            ]
        ));
    }
}
