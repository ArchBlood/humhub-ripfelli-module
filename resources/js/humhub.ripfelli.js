humhub.module('ripfelli', function(module, require, $) {

    var init = function() {
        console.log('ripfelli module activated');
    };

    var hello = function() {
        alert(module.text('rip')+' - '+module.config.username)
    };

    module.export({
        //uncomment the following line in order to call the init() function also for each pjax call
        //initOnPjaxLoad: true,
        init: init,
        rip: rip
    });
});
