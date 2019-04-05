<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'deployer');

// Hosts
host('31.15.27.87')
    ->user('cbuilder_ssh')
    ->set('deploy_path', '/var/www/tki72/sites/cbuilder');    
    
// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:update_code',
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
