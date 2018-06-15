<?php
/*
 * basic label and input shortcode to add input fields one at a time to create a form.
 * if left blank, default values will be added
 * shortcode takes (placeholder, for, id, label_name, label_class, input_class) attributes to be able to customize inputs and labels for total customization
 * CSS can be targeted by using outside containers and targeting the label and inputs or classes if added
 */

function shortcode_input( $atts ){

    $a = shortcode_atts( [
        'placeholder' => 'Please Fill Out',
        'for' => '',
        'id' => '',
        'label_name' => 'Label',
        'label_class' => '',
        'input_class' => ''
        ],
        $atts);

    return "<label class='{$a['label_class']}' for='{$a['for']}'>{$a['label_name']}:</label>
                <input class='{$a['input_class']}' placeholder='{$a['placeholder']}' id='{$a['id']}'/>
           ";

}
add_shortcode( 'basic_input', 'shortcode_input' );
