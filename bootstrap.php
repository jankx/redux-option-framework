<?php

/**
 * Change option framework to Redux Framework
 */
add_filter('jankx/option/framework/active', function () {
    return 'redux';
});
