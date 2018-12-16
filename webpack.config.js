

var path = require('path');
var glob = require('glob-all');
var webpack = require('webpack');

var UglifyJsPlugin = require("uglifyjs-webpack-plugin");
var PurifyCSSPlugin = require('purifycss-webpack');
var MiniCssExtractPlugin = require("mini-css-extract-plugin");
var OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = {
    mode: 'production',
    entry: { app: __dirname + '/assets/app.js' },
    output: {
        path: __dirname + '/public/dist',
        filename: '[name].js'
    },

    module: {
        rules: [
            {
              test: /\.css$/,
              use: 
              [ 
                { loader: MiniCssExtractPlugin.loader }, 
                "css-loader"
              ]

            },

            {
              test: /\.(png|jpg|gif)$/,
              use: 
              [ 
                { 
                  loader: 'url-loader', 
                  options: { limit: 8192 } 
                }
              ]
            }
        ]
    },

    optimization: {
      minimizer: [

        new UglifyJsPlugin({
          cache: true,
          parallel: true,
          sourceMap: true
        }),

        new OptimizeCSSAssetsPlugin({
          cssProcessor: require('cssnano'),
          cssProcessorPluginOptions: {
            preset: ['default', { discardComments: { removeAll: true } }],
          },
        canPrint: true})

      ]
    },

    plugins: [

        new MiniCssExtractPlugin({
          filename: '[name].css'
        }),

        new PurifyCSSPlugin({
        
        purifyOptions: {
          whitelist: [ ]
        },

        paths: glob.sync([
          path.join(__dirname, '/app/views/*{.php,.html}'),
          path.join(__dirname, '/app/views/partials/*{.php,.html}'),
          path.join(__dirname, '/app/views/snippets/*{.php,.html}'),
          path.join(__dirname, '/app/public/post/*{.php,.html}')
          ]),
        })
    ]
};

