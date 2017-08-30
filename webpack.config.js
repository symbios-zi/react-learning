var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')

    .enableReactPreset()
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('global', './assets/css/global.scss')
    .enableSassLoader()
    .autoProvidejQuery()
    .enableReactPreset()
    .enableSourceMaps(!Encore.isProduction());

module.exports = Encore.getWebpackConfig();