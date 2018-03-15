const path = require('path')
const webpack = require('webpack')

const production = process.env.NODE_ENV === 'production'

let config = {
    entry: {
        app: [
            './app/Resources/assets/js/app.js'
        ],
        plugins: [
            './app/Resources/assets/js/check-integrity.js'
        ],
        vendor: [
            'jquery',
            'popper.js',
            'bootstrap'
        ]
    },
    output: {
        path: path.resolve(__dirname, 'web'),
        filename: production ? 'js/[name].[chunkhash].js' : 'js/[name].js'
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ]
}

module.exports = config;
