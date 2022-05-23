const path = require('path');

module.exports = {
  mode: 'development',
  entry: path.resolve(__dirname, './packages/site_package/Resources/Private/Javascript/app.js'),
  output: {
    filename: '[name].main.js',
    path: path.resolve(__dirname, 'packages/site_package/Resources/Public/Javascript/')
  }
};