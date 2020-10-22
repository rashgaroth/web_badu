<?php

namespace Deployer;

desc('Symlink Laravel public To public_html');
task('app:symlink_public_html', function () {
    run('ln -s /home/baduidco/source/current/public /home/baduidco/public_html');
});
