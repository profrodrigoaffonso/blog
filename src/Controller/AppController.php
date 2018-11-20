<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadModel("Categories");        

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $categories = $this->Categories->find('list');
        $this->set(compact("categories"));
    }

    public function dataExtenso($date){
        $mes = (int)date('m',strtotime($date));

        switch ($mes) {
           case 1: $mes_extenso = "janeiro"; break;
           case 2: $mes_extenso = "fevereiro"; break;
           case 3: $mes_extenso = "março"; break;
           case 4: $mes_extenso = "abril"; break;
           case 5: $mes_extenso = "maio"; break;
           case 6: $mes_extenso = "junho"; break;
           case 7: $mes_extenso = "julho"; break;
           case 8: $mes_extenso = "agosto"; break;
           case 9: $mes_extenso = "stembro"; break;
           case 10: $mes_extenso = "outubro"; break;
           case 11: $mes_extenso = "novembro"; break;
           case 12: $mes_extenso = "dezembro"; break;            
           
        }

        return (int)date('d',strtotime($date))." de {$mes_extenso} de ".date('Y',strtotime($date))." às ".date('H:i',strtotime($date));
    }
}
