<?php
if ( ! defined( 'ABSPATH' ) ) {
    wp_die( __( 'This file cannot be called directly!', 'ns' ) );
    exit;
}
//Amministrazione WP

//Genero la pagina
function ns_product_rating_woocommerce_update_options_form()
{
    ?>
    <div class="wrap">
        <div class="icon32" id="icon-options-general"><br/></div>
        <h2>NS Product Rating Woocommerce</h2>
        <form method="post" action="options.php">
            <?php settings_fields('ns_product_rating_woocommerce_options_group'); ?>
            <table class="form-table">
                <tbody>
                <tr valign="top">
                    <th scope="row" colspan="2">
                        <br>
                        <label>General Settings</label>
                        <hr>
                    </th>
                </tr>

                <tr valign="top">
                    <th scope="row">
                        <label for="ns_wcm_symbol_color">Symbol Color:</label>
                    </th>
                    <td>
                        <input type="text" id="ns_wcm_symbol_color" name="ns_product_rating_woocommerce_symbol_color"
                               value=" <?php echo get_option('ns_product_rating_woocommerce_symbol_color'); ?>"
                               class="color-field"/>
                        <span class="description"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"></th>
                    <td>
                        <p>
                            <input type="submit" class="button-primary" id="submit" name="submit"
                                   value="<?php _e('Save Changes') ?>"/>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <p>
                            <a href="http://www.nsthemes.com/product/woocommerce-product-rating/?utm_source=WooCommerce%20Product%20Rating%20Bannerino&utm_medium=Bannerino%20dentro%20settings&utm_campaign=WooCommerce%20Product%20Rating%20Bannerino%20premium">
                                <img src="<?php echo NS_WP_PRODUCT_RATING_WC_PLUGIN_ROOT_INTERNAL;  ?>/asset/img/banneriiino.png" style="height: auto;">
                            </a>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

        </form>
    </div>

    <?php
}

//Aggiungo il link all'amministrazione
function ns_product_rating_woocommerce_add_option_page()
{
    add_menu_page('NS Product Rating WooCommerce', 'Product Rating', 'administrator', 'ns-product-rating-woocommerce-options-page',
        'ns_product_rating_woocommerce_update_options_form', NS_WP_PRODUCT_RATING_WC_PLUGIN_ROOT_INTERNAL . '/asset/img/backend-sidebar-icon.png', 60);
    add_submenu_page( 'ns-product-rating-woocommerce-options-page', 'Ratings results page', 'Ratings results page', 'administrator',
        'ns-product-rating-woocommerce-options-page-sub', 'tt_render_list_page');
}

add_action('admin_menu', 'ns_product_rating_woocommerce_add_option_page');
