/* eslint-disable no-param-reassign */

const creatorData = {
  chiselVersion: '1.0.0',
  app: {
    name: 'Chisel Demo',
    author: 'Alvind',
    projectType: 'wp-with-fe',
    browsers: ['modern', 'edge18'],
    nameSlug: 'chisel-demo',
    hasJQuery: false,
  },
  wp: {
    title: 'Chisel Demo',
    url: 'http://chisel-demo.local',
    adminUser: 'admin',
    adminEmail: 'alvind.caesar@gmail.com',
    tablePrefix: '7kzmdpg2_',
  },
  wpPlugins: {
    plugins: [
      'WP Premium: Advanced Custom Fields Pro',
      'WP Premium: Gravity Forms',
      'WP Sync DB',
      'WP Sync DB Media File Addon',
    ],
  },
};

const wp = {
  directoryName: 'wp',
  themeName: 'chisel-demo-chisel',
  url: 'http://chisel-demo.local',
};

module.exports = {
  creatorData,

  wp,

  output: {
    base: `${wp.directoryName}/wp-content/themes/${wp.themeName}/dist`,
  },

  // To use React and hot reload for React components:
  // 1. Run `yarn add react-hot-loader @hot-loader/react-dom`
  // 3. Mark your root component as hot-exported as described on
  //    https://github.com/gaearon/react-hot-loader#getting-started (step 2)
  // 4. Uncomment line below
  // react: true,

  plugins: ['chisel-plugin-code-style', 'chisel-plugin-wordpress'],
};
