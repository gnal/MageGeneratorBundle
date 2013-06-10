<?php

namespace Mage\GeneratorBundle\Generator;

use Sensio\Bundle\GeneratorBundle\Generator\Generator;

class CrudGenerator extends Generator
{
    public function generate()
    {
        $namespace = 'Msi';
        $module = 'Nivo';
        $entity = 'Slider';

        $parameters = [
            'namespace' => $namespace,
            'module'    => $module,
            'entity'    => $entity,
        ];

        $templateModulePath = 'crud/app_code_local_Foo_Bar';
        $targetModulePath = 'app/code/local/'.$namespace.'/'.$module;

        $files = [
            // Block
            [
                'template' => $templateModulePath.'_Block_Adminhtml_Baz.php.twig',
                'target'     => $targetModulePath.'/Block/Adminhtml/'.$entity.'.php',
            ],
            [
                'template' => $templateModulePath.'_Block_Adminhtml_Baz_Edit_Form.php.twig',
                'target'     => $targetModulePath.'/Block/Adminhtml/'.$entity.'/Edit/Form.php',
            ],
            [
                'template' => $templateModulePath.'_Block_Adminhtml_Baz_Edit.php.twig',
                'target'     => $targetModulePath.'/Block/Adminhtml/'.$entity.'/Edit.php',
            ],
            [
                'template' => $templateModulePath.'_Block_Adminhtml_Baz_Grid.php.twig',
                'target'     => $targetModulePath.'/Block/Adminhtml/'.$entity.'/Grid.php',
            ],
            // controllers
            [
                'template' => $templateModulePath.'_controllers_Adminhtml_BazController.php.twig',
                'target'     => $targetModulePath.'/controllers/Adminhtml/'.$entity.'Controller.php',
            ],
            // etc
            [
                'template' => $templateModulePath.'_etc_adminhtml.xml.twig',
                'target'     => $targetModulePath.'/etc/adminhtml.xml',
            ],
            [
                'template' => $templateModulePath.'_etc_config.xml.twig',
                'target'     => $targetModulePath.'/etc/config.xml',
            ],
            // Helper
            [
                'template' => $templateModulePath.'_Helper_Data.php.twig',
                'target'     => $targetModulePath.'/Helper/Data.php',
            ],
            // Model
            [
                'template' => $templateModulePath.'_Model_Baz.php.twig',
                'target'     => $targetModulePath.'/Model/'.$entity.'.php',
            ],
            [
                'template' => $templateModulePath.'_Model_Mysql4_Baz.php.twig',
                'target'     => $targetModulePath.'/Model/Mysql4/'.$entity.'.php',
            ],
            [
                'template' => $templateModulePath.'_Model_Mysql4_Baz_Collection.php.twig',
                'target'     => $targetModulePath.'/Model/Mysql4/'.$entity.'/Collection.php',
            ],
            // sql
            [
                'template' => $templateModulePath.'_sql_foo_bar_setup_mysql4-install-1.0.0.php.twig',
                'target'     => $targetModulePath.'/sql/'.strtolower($namespace).'_'.strtolower($module).'_setup/mysql4-install-1.0.0.php',
            ],
            // other
            [
                'template' => 'crud/app_design_adminhtml_default_default_layout_foo_bar.xml.twig',
                'target'     => 'app/design/adminhtml/default/default/layout/'.strtolower($namespace).'/'.strtolower($module).'.xml',
            ],
            [
                'template' => 'crud/app_etc_modules_Foo_Bar.xml.twig',
                'target'     => 'app/etc/modules/'.$namespace.'_'.$module.'.xml',
            ],
        ];

        foreach ($files as $value) {
            $this->renderFile($value['template'], 'Magento/'.$value['target'], $parameters);
        }
    }
}
