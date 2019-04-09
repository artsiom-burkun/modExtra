modxExtension.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'modxextension-panel-home',
            renderTo: 'modxextension-panel-home-div'
        }]
    });
    modxExtension.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(modxExtension.page.Home, MODx.Component);
Ext.reg('modxextension-page-home', modxExtension.page.Home);