Ext.onReady(function () {
    modxExtension.config.connector_url = OfficeConfig.actionUrl;

    var grid = new modxExtension.panel.Home();
    grid.render('office-modxextension-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});