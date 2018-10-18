<?php
/**
 * Created by PhpStorm.
 * User: martinnicholson
 * Date: 02/10/2018
 * Time: 14:01
 */

namespace oat\taoDocs2\controller;


class Greeter extends \tao_actions_CommonModule {

    /**
     * initialize the services
     */
    public function __construct() {
        parent::__construct();
        // Data for our example extension:
        $this->pilots = [
            'red_1' => 'luke',
            'red_2' => 'biggs',
            'red_3' => 'wedge',
        ];
    }

    public function helloFromTemplate() {
        $this->setData('name', 'tao');
        $this->setView('Greeter/myName.tpl');
    }

    public function getPilotsList() {
        $data = array(
            'data'  => __("Pilots"),
            'attributes' => array(
                'id' => 1,
                'class' => 'node-class'
            ),
            'children' => array()
        );

        foreach ($this->pilots as $index => $name) {
            $data['children'][] =  array(
                'data'  => 'my name is ' . ucfirst($name),
                'attributes' => array(
                    'id' => $index,
                    'class' => 'node-instance'
                )
            );
        }
        echo json_encode($data);
    }

    public function vader() {
        $name = '';
        if($this->hasRequestParameter('uri')) {
            $uri = $this->getRequestParameter('uri');
            if(array_key_exists($uri, $this->pilots)) {
                $name = $this->pilots[$uri];
            }
        }
        echo ucfirst($name) . ', I\'m your father.';

    }

    public function obiwan() {
        $name = '';
        if($this->hasRequestParameter('uri')) {
            $uri = $this->getRequestParameter('uri');
            if(array_key_exists($uri, $this->pilots)) {
                $name = $this->pilots[$uri];
            }
        }
        echo ucfirst($name) . ', may the force be with you.';
    }
}