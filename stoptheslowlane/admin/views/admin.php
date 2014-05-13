<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   StopTheSlowLane
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 */
?>

<?php if ($show_update_message) : ?>
<div class="updated"><p><strong><?php _e('settings saved.', 'menu-test' ); ?></strong></p></div>
<?php endif; ?>

<div class="wrap">
  <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
  <form name="form1" method="post" action="">
    <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
    
    <p><?php _e("Style:", 'menu-test' ); ?> 
      <select name="<?php echo $data_field_name; ?>">
        <option value="loading" <?php if ($opt_val == "loading") : ?>selected<?php endif; ?>>Loading</option>
        <option value="blur" <?php if ($opt_val == "blur") : ?>selected<?php endif; ?>>Blur</option>
      </select>
    </p><hr />
    
    <p class="submit">
    <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
    </p>
  </form>
</div>
