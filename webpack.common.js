
const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = {
  entry: './assets/app.js',

  plugins: [
    new CleanWebpackPlugin(['dist'])
  ],

  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist')
  },

  resolve: {
    extensions: ['.js']
  },

  externals: {
    foundation: 'Foundation'
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['es2015']
        }
      },

      {
        test: /\.scss$/,
        use: [ 'style-loader', "css-loader", "sass-loader" ]
      }
    ]
  }
}