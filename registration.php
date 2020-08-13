<?php
/*
Plugin Name: PMPro Customizations
Plugin URI: https://www.paidmembershipspro.com/wp/pmpro-customizations/
Description: Customizations for my Paid Memberships Pro Setup
Version: .1
Author: Paid Memberships Pro
Author URI: https://www.paidmembershipspro.com
*/
 
// We have to put everything in a function called on init, so we are sure Register Helper is loaded.
function my_pmprorh_init() {
	// Don't break if Register Helper is not loaded.
	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {
		return false;
	}
	
	// Define the fields.
	$fields = array();
	$fields[] = new PMProRH_Field(
		'sex',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'Please select a sex', 	// template label
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> false,				// make this field required
			'options' => array(					// option elements for select field
				'male'	=> 'Male',				// option 1
				'female'	=> 'Female',		// option 2
				'prefer'	=> 'Prefer not to say',		// option 2
			)
		)
	);
	
	$fields[] = new PMProRH_Field(
		'guardianfirst',							// template text
		'text',								// template field
		array(
			'label'		=> 'Parent/Guardian First Name',		// template label
			'class'		=> 'guardianfirst',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
			'levels'	=> 5,			// make this field required
		)
	);
	
	$fields[] = new PMProRH_Field(
		'guardianlast',							// template text
		'text',								// template field
		array(
			'label'		=> 'Parent/Guardian Last Name',		// template label
			'class'		=> 'guardianlast',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
			'levels'	=> 5,			// make this field required
		)
	);
	
	$fields[] = new PMProRH_Field(
		'guardianrelationship',							// template text
		'text',								// template field
		array(
			'label'		=> 'Parent/Guardian Relationship to Junior',		// template label
			'class'		=> 'guardianrelationship',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
			'levels'	=> 5,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'cellphone',							// template text
		'text',								// template field
		array(
			'label'		=> 'Contact Number',		// template label
			'class'		=> 'cellphone',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'ethnicity',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'Please select your ethnic group', 	// template label
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> true,				// make this field required
			'options' => array(					// option elements for select field
				'whiteb'		=> 'White - British',			// option 1
				'whitei'	=> 'White - Irish',		// option 2
				'whiteo'	=> 'White - Other',		// option 3
				'mixedwbca'	=> 'Mixed - White & Black Caribbean',		// option 4
				'mixedwbaf'		=> 'Mixed - White & Black African',			// option 5
				'mixedwbas'	=> 'Mixed - White & Asian',		// option 6
				'mixedo'	=> 'Mixed - Other',		// option 7
				'asianindia'	=> 'Asian or Asian British - Indian',		// option 8
				'asianpakistan'	=> 'Asian or Asian British -  Pakistani',		// option 9
				'asianbangladesh'	=> 'Asian or Asian British -  Bangladeshi',		// option 10
				'asiano'	=> 'Asian or Asian British - Other',		// option 11
				'blackc'	=> 'Black or Black British - Caribbean',		// option 12
				'blacka'	=> 'Black or Black British - African',		// option 13
				'blacko'	=> 'Black or Black British - Other',		// option 14
				'chinese'	=> 'Chinese',		// option 15
				'otherethnic'	=> 'Other Ethnic Group',		// option 16
			)
		)		
	);

	$fields[] = new PMProRH_Field(
		'birth',									// input name, will also be used as meta key
		'date',												// type of field
		array(
			'label'		=> 'Please input your date of birth',	// custom field label
			'class'		=> 'date',							// custom class
			'profile'	=> true,							// show in user profile
			'memberslistcsv'	=> true,					// show in user csv export
			'required'	=> true,							// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'firstline',							// template text
		'text',								// template field
		array(
			'label'		=> '1st Line of Home Address',		// template label
			'class'		=> 'firstline',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'secondline',							// template text
		'text',								// template field
		array(
			'label'		=> '2nd Line of Home Address',		// template label
			'class'		=> 'secondline',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> false,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'citytown',							// template text
		'text',								// template field
		array(
			'label'		=> 'City/Town',		// template label
			'class'		=> 'citytown',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'county',							// template text
		'text',								// template field
		array(
			'label'		=> 'County',		// template label
			'class'		=> 'county',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> false,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'postcode',							// template text
		'text',								// template field
		array(
			'label'		=> 'Postcode',		// template label
			'class'		=> 'postcode',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'country',							// template text
		'text',								// template field
		array(
			'label'		=> 'Country',		// template label
			'class'		=> 'country',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> false,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'status',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'Are you new to squash?', 	// template label
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> true,				// make this field required
			'options' => array(					// option elements for select field
				'yes'		=> 'Yes',			// option 1
				'no'	=> 'No',				// option 2
			)
		)
	);

	$fields[] = new PMProRH_Field(
		'joining',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'What is the reason for joining City of Manchester', 	// template label
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> true,				// make this field required
			'options' => array(					// option elements for select field
				'competition'		=> 'Competition',	// option 1
				'social'	=> 'Social',				// option 2
				'fitness'	=> 'Fitness',		// option 3
				'improve'	=> 'Improve Squash Ability',	// option 4
			)
		)
	);

	$fields[] = new PMProRH_Field(
		'hear',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'How did you hear about City of Manchester?', 	// template label
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> true,				// make this field required
			'options' => array(					// option elements for select field
				'exist'		=> 'Existing Member',	// option 1
				'family'	=> 'Friends & Family',				// option 2
				'mouth'	=> 'Word of Mouth',		// option 3
				'website'	=> 'Website Search',	// option 4
				'media'		=> 'Social Media',	// option 5
				'center'	=> 'National Squash Centre',				// option 6
				'other'	=> 'Other',		// option 7
			)
		)
	);

	$fields[] = new PMProRH_Field(
		'food',							// template text
		'text',								// template field
		array(
			'label'		=> 'Food Requirements (If applicable) (Allergies/Dietary Requirements)',	// food
			'size'		=> 200,				// template size
			'class'		=> 'food',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> false,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'conditions',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'Do you have any medical or physical conditions we should be aware of?',
			'size'		=> 200,				// template size
			'class'		=> 'conditions',		// template class
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> true,				// make this field required
			'options' => array(					// option elements for select field
				'no'	=> 'No', 				// option 1
				'yes'		=> 'Yes',			// option 2
			)
		)
	);

	$fields[] = new PMProRH_Field(
		'preventative',							// template text
		'text',								// template field
		array(
			'label'		=> 'If yes above, please make us aware of any medical requirements you may need',		// template label
			'size'		=> 200,				// template size
			'class'		=> 'conditions',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> false,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'emergency',							// template text
		'text',								// template field
		array(
			'label'		=> 'Emergency Contact Name',		// template label
			'class'		=> 'emergency',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'emergencie',							// template text
		'text',								// template field
		array(
			'label'		=> 'Emergency Contact Number',		// template label
			'class'		=> 'emergencie',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'emergencierelation',							// template text
		'text',								// template field
		array(
			'label'		=> 'Emergency Contact Relation',		// template label
			'class'		=> 'emergencierelation',		// template class
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'clothing',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'Please select your clothing size', 	// template label
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> true,				// make this field required
			'options' => array(					// option elements for select field
				'twelve'		=> 'Age 11/12 (Junior)',			// option 1
				'xsmall'	=> 'X-Small (35" Chest)(Unisex)',		// option 2
				'small'	=> 'Small (38" Chest)(Unisex)',				// option 3
				'medium'	=> 'Medium (40" Chest)(Unisex)',		// option 4
				'large'		=> 'Large (43" Chest)(Unisex)',			// option 5
				'xlarge'	=> 'X-Large (45" Chest)(Unisex)',		// option 6
				'xxlarge'	=> 'XX-Large (48" Chest)(Unisex)',		// option 7
				'xxxlarge'	=> 'XXX-Large (51" Chest)(Unisex)',		// option 8
				'xsmallw'	=> 'X-Small (8)(Womens)',		// option 9
				'smallw'	=> 'Small (10)(Womens)',		// option 10
				'mediumw'	=> 'Medium (12)(Womens)',		// option 11
				'largew'	=> 'Large (14)(Womens)',		// option 12
				'xlargew'	=> 'X-Large (16)(Womens)',		// option 13
			)
		)		
	);

	$fields[] = new PMProRH_Field(
		'shirt',							// template text
		'text',								// template field
		array(
			'label'		=> 'Please input your Display Shirt Name (Maximum 16 characters)',		// template label
			'class'		=> 'shirt',		// template class
			'size'		=> '16',			// field size
			'profile'	=> true,			// show in user profile
			'memberslistcsv'	=> true,	// show in csv export
			'required'	=> true,			// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'consent',									// input name, will also be used as meta key
		'select',								// type of field
		array(
			'label' => 'Do you consent to your Photograph/Video content being used by the City of Manchester?',
			'profile'	=> true,				// show in user profile
			'memberslistcsv'	=> true,		// show in csv export
			'required'	=> true,				// make this field required
			'options' => array(					// option elements for select field
				'yes'		=> 'Yes',			// option 1
				'no'	=> 'No',				// option 2
			)
		)
	);

	// Add the fields into a new checkout_boxes are of the checkout page.
	foreach ( $fields as $field ) {
		pmprorh_add_registration_field(
			'checkout_boxes',				// location on checkout page
			$field							// PMProRH_Field object
		);
	}

	// That's it. See the PMPro Register Helper readme for more information and examples.
}
add_action( 'init', 'my_pmprorh_init' );
