var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')

    // read main.js     -> output as web/build/app.js
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('global', './assets/css/global.scss')
    // enable features!
    .enableSassLoader()
    .autoProvidejQuery()
    .enableReactPreset()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning() // hashed filenames (e.g. main.abc123.js)
;

module.exports = Encore.getWebpackConfig();