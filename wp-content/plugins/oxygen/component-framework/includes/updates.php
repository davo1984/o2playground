<?php 

function oxygen_vsb_update_3_6() {

    if ( !get_option("oxygen_vsb_update_3_6") && oxygen_vsb_is_touched_install() ) {

        oxygen_vsb_check_is_agency_bundle();

        // need to update universal.css to apply new Columns Padding Global Styles
        $updated = oxygen_vsb_cache_universal_css();

        if ($updated) {
            add_option("oxygen_vsb_update_3_6", true);
        }
    };
}
add_action("init", "oxygen_vsb_update_3_6");