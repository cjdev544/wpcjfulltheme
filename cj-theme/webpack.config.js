// Change the url in pluging BrowserSync

const path = require('path'),
      webpack = require('webpack'),
      MiniCssExtractPlugin = require('mini-css-extract-plugin'),
      BrowserSyncWebpackPlugin = require('browser-sync-webpack-plugin')

module.exports = {
    entry: './src/app.js',
    output: {
        path: path.resolve(__dirname, 'img'),
        filename: '../script.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.(css|scss)$/,
                use: [
                  'style-loader',
                  MiniCssExtractPlugin.loader,
                  'css-loader',
                  'postcss-loader',
                  'resolve-url-loader',
                  'sass-loader'
                ]
            },
            {
                test: /\.(jpe?g|png|gif|svg|webp)$/i,
                use: [
                  {
                    loader: 'file-loader',
                    options: {
                      name: '[name].[ext]',
                      publicPath: 'img/'
                    }
                  },
                  'image-webpack-loader?bypassOnDebug'
                ]
              },
              {
                test: /\.(ttf|eof|woff2?|mp4|mp3|txt|xml|pdf)$/i,
                use: 'file-loader?name=[name].[ext]'
              }
        ]
    },

    plugins : [
        new webpack.SourceMapDevToolPlugin({}),
        new MiniCssExtractPlugin({
            filename: '../style.css',
          }),
        new BrowserSyncWebpackPlugin({
            // browse to http://localhost:3000/ during development,
            // ./public directory is being served
            files: './**/*.php',
            injectChanges: true,
            proxy: 'localhost/cj-gym'
        })
    ],

    devtool: 'eval-cheap-source-map'
};