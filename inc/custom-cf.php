<?php
/*define('CSF_ACTIVE_FRAMEWORK', true);//default true
define('CSF_ACTIVE_METABOX', true);//default true
define('CSF_ACTIVE_TAXONOMY', false);//default true
define('CSF_ACTIVE_SHORTCODE', false);//default true
define('CSF_ACTIVE_CUSTOMIZE', false);//default true
define('CSF_ACTIVE_LIGHT_THEME', true);//default true*/

// active modules
define( 'CS_ACTIVE_FRAMEWORK',   true  );
define( 'CS_ACTIVE_METABOX',     true  );
define( 'CS_ACTIVE_TAXONOMY',    true  );
define( 'CS_ACTIVE_SHORTCODE',   true  );
define( 'CS_ACTIVE_CUSTOMIZE',   true  );
define( 'CS_ACTIVE_LIGHT_THEME', true );

//framework options filter example
function extra_cs_framework_options($options){
	$options = array(); //remove old option

	$options[] = array(
		'name'=>'section_unique_id',
		'title'=>'First Section',
		'icon'=>'fa fa-heart',
		'fields'=>array(
			array(
				'id'=>'option_id',
				'type'=>'text',
				'title'=>'First Option',
			),
			array(
				'id'=>'other_option_id',
				'type'=>'text',
				'title'=>'Second Option',
			)
		),
	);

	return $options;
}
add_filter('cs_framework_options', 'extra_cs_framework_options');


