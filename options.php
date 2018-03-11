<?php if (!defined('FW')) die('Forbidden');


$options = array(
    'faq_block' => array(
        'type' => 'addable-popup',
        'label' => __('FAQ tab block', 'ust'),
        'popup-title' => __('Add/Edit Block', 'ust'),
        'desc' => __('Create your FAQ Block', 'ust'),
        'template' => '{{=tab_text}}',
        'popup-options' => array(
            'tab_text' => array(
                'type' => 'text',
                'label' => __('Tab title text', 'ust')
            ),

            'faq' => array(
                'type' => 'addable-popup',
                'label' => __('Single FAQ Block', 'ust'),
                'popup-title' => __('Add/Edit FAQ', 'ust'),
                'desc' => __('Create your single FAQ', 'ust'),
                'template' => '{{=question}}',
                'popup-options' => array(
                    'question' => array(
                        'type' => 'text',
                        'label' => __('Question', 'ust'),
                    ),

                    'answer' => array(
                        'type' => 'wp-editor',
                        'label' => __('Answer', 'ust'),
                    ),
                ),
            ),
        ),
    ),
);