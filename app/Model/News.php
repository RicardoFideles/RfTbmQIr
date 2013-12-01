<?php
App::uses('AppModel', 'Model');
/**
 * News Model
 *
 */
class News extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'O título não pode ser vazio',
				'allowEmpty' => false,
			),
		),
		'subtitulo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o subtítulo',
				'allowEmpty' => false,
			),
		),
		'emfoco' => array(
            'valid' => array(
                'rule' => array('inList', array('sim', 'nao')),
                'message' => 'Destaque inválido',
                'allowEmpty' => false
            )
        )
	);
	
	var $actsAs = array('Sluggable');
}
