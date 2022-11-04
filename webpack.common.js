const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: './resources/js/app.js',
  output: {
    filename: 'js/main.js',
    path: path.resolve(__dirname, 'public/assets'),
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/,
        use: [
            MiniCssExtractPlugin.loader,
            'css-loader',
            'postcss-loader',
            'sass-loader'
        ]
      }
    ]
  },
  plugins: [
      new CleanWebpackPlugin(),
      new MiniCssExtractPlugin({
        filename: 'css/style.css',
        chunkFilename: "css/[id].css"
      })
  ]
};