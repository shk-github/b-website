const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  entry: './resources/js/app.js',
  output: {
    filename: 'js/main.js',
    path: path.resolve(__dirname, 'public/assets'),
  },
  plugins: [
      new CleanWebpackPlugin()
  ]
};