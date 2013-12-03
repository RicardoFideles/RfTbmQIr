<?php
App::uses('AppModel', 'Model');
/**
 * Photo Model
 *
 * @property News $News
 */
class Photo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'news_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

	
	);
	
	var $actsAs = array('MeioUpload' => array(
            'imagem' => array(
            'dir' => 'fotos',
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
            'thumbsizes' => array(
                'small'  => array('width'=>180, 'height'=>80),
                'thumb' => array('width' => 100, 'height' => 75),
                'homeunidade' => array('width' => 436, 'height' => 290),
                'slide'  => array('width'=>955, 'height'=>316),
                'big'  => array('width'=>955, 'height'=>316),
            ),
            'default' => 'default.jpg',
            )
        )
    );
}
