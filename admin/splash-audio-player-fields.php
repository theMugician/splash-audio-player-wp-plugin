<?php

require plugin_dir_path(__FILE__) . '../includes/class-splash-fields.php';

/**
 * Render text field
 * @var  string $id
 * @var  string $title
 * @var  array  $options *Optional
 * 
 */
$fields = new Splash_Fields();

$fields->text('splash_audio_player_text', 'Audio Player Text');

/**
 * Render radio button group
 * @var  string $id
 * @var  string $title
 * @var  array  $options *Required Custom options
 * 
 */

$radio_options_id = 'splash_audio_player_mute_toggle';
$radio_options = array(
    'name' => 'splash_audio_player_mute_toggle',
    'value' => esc_attr( get_post_meta( get_the_ID(), $radio_options_id, true )),
    'description' => '',
    'radio_buttons' => array(
        array(
            'id' => 'mute_toggle_no',
            'title' => 'No',
            'name' => 'mute_toggle_no',
            'value' => 'mute_toggle_no'
        ),
        array(
            'id' => 'mute_toggle_yes',
            'title' => 'Yes',
            'name' => 'mute_toggle_yes',
            'value' => 'mute_toggle_yes'
        )       
    )
);
$fields->radio('splash_audio_player_mute_toggle', 'Mute Toggle', $radio_options);

/**
 * Render checkbox
 * @var  string $id
 * @var  string $title
 * @var  array  $options *Required Custom options
 * 
 */

$fields->checkbox('splash_audio_player_autoplay', 'Autoplay');

