modxExtension.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'modxextension-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('modxextension') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('modxextension_items'),
                layout: 'anchor',
                items: [{
                    html: _('modxextension_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'modxextension-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    modxExtension.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(modxExtension.panel.Home, MODx.Panel);
Ext.reg('modxextension-panel-home', modxExtension.panel.Home);
