Plugin to monitor performance of eaccelerator module for PHP.

To use: 

1. Copy script to munin plugins folder
2. Symbolically link to eacc_memory and eacc_cached
   * eacc_memory shows memory usage
   * eacc_cached shows number of scripts cached and discarded
3. Set configuration options in munin config file as follows
   > [eacc_*]
   > env.auth_user username
   > env.auth_pwd password
   > env_cpanel url_of_stats.php
4. Copy stats.php into the eacc control panel folder and set $user/$pw to match auth_user/auth_pwd
   * Ideally, these should be the same values as set in control.php
5. Run `munin-run eacc_memory` and `munin-run eacc_cached` to make sure scripts are running correctly, you should see non-zero values
6. Restart munin-node

This script's homepage: https://github.com/hermzz/munin-eaccelerator-plugin
eAccelerator homepage: http://eaccelerator.net/
