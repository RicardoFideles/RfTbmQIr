<?php
App::uses('AppModel', 'Model');
/**
 * Enquete Model
 *
 */
class Enquete extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório',
				'allowEmpty' => false,
			),
		),
		'texto' => array(
			'rule' => array('maxLength', 340),
			'message' => 'Quantidade máxima de caracteres excedida.',
		),
	);
}
