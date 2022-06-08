<?php 
function designhubs_section_data($sections){
    $sections = array(
	    		'slider' =>	array(
						'title'       => array('Business' , 'New Skill'),
						'description' => array('We are experienced professionals who understand that It services is charging, and are true partners who care about your success.', 'We are experienced professionals who understand that It services is charging, and are true partners who care about your success.'),
						'button'      => array('Read More','Read More'),
						'button_link' => array('#','#'),
					),
	    		'featured_section' => array(
	    				'icon' => array('fa fa-cloud', 'fa fa-signal', 'fa fa-shield'),
	    				'title' => array('clouds','networking','Cybersecurity'),
	    				'description' => array('Lorem ipsum dolor sit amet, consectetur.','Lorem ipsum dolor sit amet, consectetur.','Lorem ipsum dolor sit amet, consectetur.'),
	    			),
	    		'about' => array(
	    				'description' => 'Magnam Dolores Commodi Suscipit. Necessitatibus Eius Consequatur Ex Aliquid Fuga Eum Quidem. Sit Sint Consectetur Velit. Quisquam Quos Quisquam Cupiditate. Et Nemo Qui Impedit Suscipit Alias Ea.',
	    				'description1' => 'Yes, I Know My Stuff! And Throughout Our Coaching Time, You Will Develop The Tools And Confidence To Take Action. My Way Of Coaching Is To Empower You In Becoming The Leader You Want To Be. You Are Unique And So Your Coaching Should Be Too.',
	    				'icon' => array('fa fa-bar-chart-o', 'fa fa-life-ring', 'fa fa-search', 'fa fa-user'),
	    				'title' => array('Our Mission', 'Our Work', 'Our Vision', 'Our Team'),
	    				'description3' => array('To Generate Highly Focused Leads Ready To Purchases.','To Generate Highly Focused Leads Ready To Purchases.','To Generate Highly Focused Leads Ready To Purchases.','To Generate Highly Focused Leads Ready To Purchases.'),
	    			),
	    		'portfolio' => array(
	    				'description' => 'Magnam Dolores Commodi Suscipit. Necessitatibus Eius Consequatur Ex Aliquid Fuga Eum Quidem. Sit Sint Consectetur Velit. Quisquam Quos Quisquam Cupiditate. Et Nemo Qui Impedit Suscipit Alias Ea.',
	    				'title' => array('Free Consulting', 'Best Analysis', 'Successes Reports'),
	    				'sub_heading' => array('Business Consulting', 'Financial Analysis', 'Project Reporting'),
	    			),
	    		'service' => array(
	    				'description' => 'Magnam Dolores Commodi Suscipit. Necessitatibus Eius Consequatur Ex Aliquid Fuga Eum Quidem. Sit Sint Consectetur Velit. Quisquam Quos Quisquam Cupiditate. Et Nemo Qui Impedit Suscipit Alias Ea.',
	    				'icon' => array('fa fa-lightbulb-o', 'fa fa-search-plus', 'fa fa-desktop'),
	    				'title' => array('Digital Branding', 'Seo Optimization', 'Wireframe Design'),
	    				'subheading' =>  array('This Is Photoshops Version Of Lorem Ipsum. Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin.', 'This Is Photoshops Version Of Lorem Ipsum. Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin.', 'This Is Photoshops Version Of Lorem Ipsum. Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin.'),
	    			),
	    		'team' => array(
	    				'description' => 'Magnam Dolores Commodi Suscipit. Necessitatibus Eius Consequatur Ex Aliquid Fuga Eum Quidem. Sit Sint Consectetur Velit. Quisquam Quos Quisquam Cupiditate. Et Nemo Qui Impedit Suscipit Alias Ea.',
	    				'title'    => array('Steven Lucy','Glenn Maxwell','Aaron Finch', 'Christiana Ena'),
	    				'headline' => array('Executive','Project Manager','Manager And Director', 'Executive'),
	    			),
	    		'testimonial' => array(
	    			'description' => 'Magnam Dolores Commodi Suscipit. Necessitatibus Eius Consequatur Ex Aliquid Fuga Eum Quidem. Sit Sint Consectetur Velit. Quisquam Quos Quisquam Cupiditate. Et Nemo Qui Impedit Suscipit Alias Ea.',
	    			'title'       => array('Glen Maxwell', 'Project Manager', 'Rizon Pet'),
	    			'sub_heading' => array('Project Manager', 'Project Manager', 'Project Manager'),
	    			'deacription1' => array('This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.', 'This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.', 'This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.'),
	    			),
	    		'sponsor' => array(
	    			'description' => 'Magnam Dolores Commodi Suscipit. Necessitatibus Eius Consequatur Ex Aliquid Fuga Eum Quidem. Sit Sint Consectetur Velit. Quisquam Quos Quisquam Cupiditate. Et Nemo Qui Impedit Suscipit Alias Ea.',
	    			'image_link' => array('#','#','#','#','#'),
	    			),
	    		'icon' => array('fa fa-facebook','fa fa-twitter','fa fa-linkedin','fa fa-instagram'),
				);
//print_r( $sections['logo'] );
    return $sections;
}
add_filter( 'designhubs_section', 'designhubs_section_data');

?>