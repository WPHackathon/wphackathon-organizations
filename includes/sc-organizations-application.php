<?php

// Shortcode to show the form for Organizations Application
function wphackathon_sc_organizations_application( $atts ) {

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) ) {

    	// Do some minor form validation to make sure there is content
    	$name        = $_POST['wph-organization-name'];
    	$firstname   = $_POST['wph-organization-first-name'];
    	$secondname  = $_POST['wph-organization-second-name'];
    	$email       = $_POST['wph-organization-email'];
    	$phone       = $_POST['wph-organization-phone'];
    	$vat         = $_POST['wph-organization-vat-number'];
    	$description = $_POST['wph-organization-description'];

      $street1     = $_POST['wph-organization-street-address1'];
      $street2     = $_POST['wph-organization-street-address2'];
      $city        = $_POST['wph-organization-city'];
      $state       = $_POST['wph-organization-state'];
      $zipcode     = $_POST['wph-organization-zip-code'];
      $country     = $_POST['wph-organization-country'];

    	// Add the content of the form to $post as an array
    	$post = array(
    		'post_title'	  => $name,
    		'post_content'	=> $description,
    		'post_status'	  => 'draft',
    		'post_type'	    => 'organization',
        'meta_input'    => array(
          'organization_first_name' => $firstname,
          'organization_second_name' => $secondname,
          'organization_email' => $email,
          'organization_phone' => $phone,
          'organization_vat_number' => $vat,
          'organization_street1' => $street1,
          'organization_street2' => $street2,
          'organization_city' => $city,
          'organization_state' => $state,
          'organization_zip_code' => $zipcode,
          'organization_country' => $country,
        ),
    	);

    	wp_insert_post( $post );

    } // end IF

  ?>


  <!-- New Organization Form -->

  <div id="postbox">

    <form id="new_post" name="new_post" method="post" action="">

    <h3><?php _e( 'Contact Information', $wph_textdomain ); ?></h3>

    <p>
      <label for="wph-organization-name"><?php _e( 'Organization Full Name (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-name" value="" name="wph-organization-name" tabindex="2" size="30" / required>
    </p>

    <p>
      <label for="wph-organization-first-name"><?php _e( 'First Name (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-first-name" value="" name="wph-organization-first-name" tabindex="3" size="20" / required>
    </p>

    <p>
      <label for="wph-organization-second-name"><?php _e( 'Second Name (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-second-name" value="" name="wph-organization-second-name" tabindex="4" size="20" / required>
    </p>

    <p>
      <label for="wph-organization-email"><?php _e( 'Email (required)', $wph_textdomain); ?></label><br />
      <input type="email" id="wph-organization-email" name="wph-organization-email" value="" tabindex="5" size="20" required>
    </p>

    <p>
      <label for="wph-organization-phone"><?php _e( 'Phone Number (required)', $wph_textdomain); ?></label><br />
      <input type="text" id="wph-organization-phone" name="wph-organization-phone" value="" tabindex="6" size="20" required>
    </p>

    <p>
      <label for="wph-organization-vat-number"><?php _e( 'VAT Number (required)', $wph_textdomain); ?></label><br />
      <input type="text" id="wph-organization-vat-number" name="wph-organization-vat-number" value="" tabindex="7" size="20" required>
    </p>

    <p>
      <label for="wph-organization-description"><?php _e( 'Describe your Organization (required)', $wph_textdomain ); ?></label><br />
      <textarea id="wph-organization-description" name="wph-organization-description" tabindex="8" cols="50" rows="6"></textarea>
    </p>

    <h3><?php _e( 'Direction', $wph_textdomain ); ?></h3>

    <p>
      <label for="wph-organization-street-address1"><?php _e( 'Address 1 (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-street-address1" name="wph-organization-street-address1" value="" tabindex="9" size="50" required>
    </p>

    <p>
      <label for="wph-organization-street-address2"><?php _e( 'Address 2', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-street-address2" name="wph-organization-street-address2" value="" tabindex="10" size="50">
    </p>

    <p>
      <label for="wph-organization-city"><?php _e( 'City (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-city" name="wph-organization-city" value="" tabindex="11" size="30" required>
    </p>

    <p>
      <label for="wph-organization-state"><?php _e( 'State (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-state" name="wph-organization-state" value="" tabindex="12" size="30" required>
    </p>

    <p>
      <label for="wph-organization-zip-code"><?php _e( 'ZIP Code (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-zip-code" name="wph-organization-zip-code" value="" tabindex="13" size="30" required>
    </p>

    <p>
      <label for="wph-organization-country"><?php _e( 'Country (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-organization-country" name="wph-organization-country" value="" tabindex="14" size="30" required>
    </p>

    <p><input type="submit" value="<?php _e( 'Apply', $wph_textdomain ); ?>" tabindex="15" id="submit" name="submit" /></p>

    <input type="hidden" name="action" value="new_organization" />

    </form>

  </div>

  <!--// New Organization Form -->

  <?php



}
add_shortcode( 'wph_organizations_application', 'wphackathon_sc_organizations_application' );
