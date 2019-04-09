var modxExtension = function (config) {
    config = config || {};
    modxExtension.superclass.constructor.call(this, config);
};
Ext.extend(modxExtension, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('modxextension', modxExtension);

modxExtension = new modxExtension();