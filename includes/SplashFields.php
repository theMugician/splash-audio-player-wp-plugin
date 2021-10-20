<?php
class SplashFields {
    /**
     * Render text field
     * @param  string $name
     * @param  string $title
     * @param  string $type : 'text', 'email', 'number', 'phone'
     * @param  string $placeholder
     * @param  string $desc
     * 
     * @return void     
     */
    public function text( $name, $title, $type = 'text', $placeholder = '', $desc = '' ) { 
    ?>
    <div class="splash-field splash-field--text">
        <label class="splash-field__label" for="<?php echo $name; ?>"><?php echo $title; ?></label>
        <input 
            class="splash-field__input"
            type="<?php echo $type; ?>" 
            name="<?php echo $name; ?>" 
            id="<?php echo $name; ?>" 
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), $name, true ) ); ?>" 
            placeholder="<?php echo $placeholder; ?>" />	
        <?php if( $desc != '' ) {
            echo '<p class="splash-field__description">' . $desc . '</p>';
        }?>
    </div>
    <?php
    }

    /**
     * Render radio button group
     * @param  string $name
     * @param  string $title
     * @param  string $type - should always be 'radio'
     * @param  string $desc
     * @param  array  $options[['id', 'title', 'value', false]]
     * 
     * @return void     
     */    
    public function radio( $name, $title, $type = 'radio', $desc = '', $options = array() ) { 
        ?>
        <div class="splash-field">
            <p class="splash-field__label"><?php echo $title; ?></p>
            <div class="splash-field__radio-group">
            <?php
                $value = get_post_meta( get_the_ID(), $name, true );
                foreach ($options as $option) {
                    var_dump($option);
                    echo '<label for="' . $option[0] . '">' . $option[1] . '</label>';
                    echo '<input class="splash-field__radio-button" name="' . $name . '" id="' . $option[0] . '" type="'.  $type . '" ' . checked( $value, $option[2], false ) . ' value="' . $option[2] . '">';
                }
			?>	
            <?php if( $desc != '' ) {
                echo '<p class="splash-field__description">' . $desc . '</p>';
            }?>
            </div>
        </div>
        <?php
        }    
}