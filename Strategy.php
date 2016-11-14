<?php

class StrategyAndAdapterExampleClass {
    private $_class_one;
    private $_class_two;
    private $_context;

    public function __construct( $context ) {
        $this->_context = $context;
        }

    public function operation1() {
        if( $this->_context == "context_for_class_one" ) {
            $this->_class_one->operation1_in_class_one_context();
                } else ( $this->_context == "context_for_class_two" ) {
            $this->_class_two->operation1_in_class_two_context()
                };
        }
}