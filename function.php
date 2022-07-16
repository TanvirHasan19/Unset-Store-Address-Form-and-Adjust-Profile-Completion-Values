#-- Unset Store Address Form --#
function remove_address_required($fields){
  unset($fields);
}
add_action( 'dokan_seller_address_fields', 'remove_address_required' );

#-- Adjust Profile Completion Values --#
function adjust_profile_completion_values( $values ){
    unset( $values['banner_val'] );
    $values['payment_method_val'] = 30;
    return $values;
}
add_filter( 'dokan_profile_completion_values', 'adjust_profile_completion_values' );
