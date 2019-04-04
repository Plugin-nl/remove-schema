<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://timvaniersel.com/
 * @since      1.0.0
 *
 * @package    Remove_Schema
 * @subpackage Remove_Schema/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <p><?php _e('Select the Schema that you want to remove from your website. For more information about Schema visit', $this->plugin_name);?> <a target="_blank" href="#">Schema.org</a>.</p>

    <form method="post" name="remove_schema_options" action="options.php">

        <?php
       //Grab all options
       $options = get_option($this->plugin_name);

       // Schema
       $rm_jsonld = $options['rm_jsonld'];
       $yoast_jsonld = $options['yoast_jsonld'];
       $microdata = $options['microdata'];
       $rdfa = $options['rdfa'];
   ?>

   <?php
       settings_fields($this->plugin_name);
       do_settings_sections($this->plugin_name);
   ?>

        <!-- remove all JSONLD -->
        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Remove all JSON-LD', $this->plugin_name);?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-rm-json-ld">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-rm-json-ld" name="<?php echo $this->plugin_name; ?>[rm_jsonld]" value="1" <?php checked($rm_jsonld, 1); ?> />
                <span><?php esc_attr_e('Remove all JSON-LD', $this->plugin_name); ?></span>
            </label>

        </fieldset>

        <!-- remove Yoast JSONLD -->
        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Remove Yoast JSON-LD', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-yoast-json-ld">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-yoast-json-ld" name="<?php echo $this->plugin_name; ?>[yoast_jsonld]" value="1" <?php checked($yoast_jsonld, 1); ?> />
                <span><?php esc_attr_e('Remove Yoast JSON-LD', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        <!-- Remove all Microdata -->
        <fieldset>
          <legend class="screen-reader-text"><span><?php _e('Remove all Microdata', $this->plugin_name); ?></span></legend>
          <label for="<?php echo $this->plugin_name; ?>-microdata">
            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-microdata" name="<?php echo $this->plugin_name; ?>[microdata]" value="1" <?php checked($microdata, 1); ?> />
            <span><?php esc_attr_e('Remove all Microdata', $this->plugin_name); ?></span>
          </label>
        </fieldset>


        <!-- Remove all RDFa -->
        <fieldset>
          <legend class="screen-reader-text"><span><?php _e('Remove all RDFa', $this->plugin_name); ?></span></legend>
          <label for="<?php echo $this->plugin_name; ?>-rdfa">
            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-rdfa" name="<?php echo $this->plugin_name; ?>[rdfa]" value="1" <?php checked($rdfa, 1); ?> />
            <span><?php esc_attr_e('Remove all RDFa', $this->plugin_name); ?></span>
          </label>
        </fieldset>

        <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>

    </form>

</div>
