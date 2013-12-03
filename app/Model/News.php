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
	
	public $hasMany = array(
		'Photo' => array(
			'className' => 'Photo',
			'foreignKey' => 'news_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	var $actsAs = array('Sluggable',
		'MeioUpload' => array(
	            'name' => array(
	            'dir' => 'img',
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	            'default' => 'default.jpg',
	            )
	        )
	);
}


