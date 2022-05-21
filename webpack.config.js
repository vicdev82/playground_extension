const path = require('path');

module.exports = {
  mode: 'development',
  entry: './packages/site_package/Resources/Private/Javascript/app.js',
  output: {
    filename: 'main.js',
    path: path.resolve('packages/site_package/Resources/Public/Javascript/'),
  },
};