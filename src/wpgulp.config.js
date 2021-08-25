/**
 * WPGulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package
 */

// Project options.

// Local project URL of your already running WordPress site.
// > Could be something like "wpgulp.local" or "localhost:8080"
// > depending upon your local WordPress setup.
const projectURL = 'localhost/ca-marketing';

// Theme name
const themeFolder = 'ca-marketing';

// Theme/Plugin URL
const productURL = `../wp-content/themes/${themeFolder}/`;
const browserAutoOpen = false;
const injectChanges = true;

// >>>>> Style options.
// Path to main .scss file.
const styleSRC = './styles/main.scss';

// Path to place the compiled CSS file. Default set to root folder.
const styleDestination = `../wp-content/themes/${themeFolder}/assets/css/`;

// Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
const outputStyle = 'expanded';
const errLogToConsole = true;
const precision = 10;

// JS Vendor options.

// Path to JS vendor folder.
const jsVendorSRC = './scripts/vendor/*.js';

// Path to place the compiled JS vendors file.
const jsVendorDestination = `../wp-content/themes/${themeFolder}/assets/js/`;

// Compiled JS vendors file name. Default set to vendors i.e. vendors.js.
const jsVendorFile = 'vendor';

// JS Custom options.

// Path to JS custom scripts folder.
const jsCustomSRC = './scripts/*.js';

// Path to place the compiled JS custom scripts file.
const jsCustomDestination = `../wp-content/themes/${themeFolder}/assets/js/`;

// Compiled JS custom file name. Default set to custom i.e. custom.js.
const jsCustomFile = 'main';

// Images options.

// Source folder of images which should be optimized and watched.
// > You can also specify types e.g. raw/**.{png,jpg,gif} in the glob.
const imgSRC = './images/**/*';

// Destination folder of optimized images.
// > Must be different from the imagesSRC folder.
const imgDST = `../wp-content/themes/${themeFolder}/assets/img/`;

// >>>>> Watch files paths.
// Path to all *.scss files inside css folder and inside them.
const watchStyles = './styles/**/*.scss';

// Path to all vendor JS files.
const watchJsVendor = './scripts/vendor/*.js';

// Path to all custom JS files.
const watchJsCustom = './scripts/*.js';

// Path to all PHP files.
const watchPhp = `../wp-content/themes/${themeFolder}/**/*.php`;

// >>>>> Zip file config.
// Must have.zip at the end.
const zipName = `${themeFolder}.zip`;

// Must be a folder outside of the zip folder.
const zipDestination = './../'; // Default: Parent folder.
const zipIncludeGlob = [`../wp-content/themes/${themeFolder}/**/*`]; // Default: Include all files/folders in theme directory.

// Default ignored files and folders for the zip file.
const zipIgnoreGlob = [
	'!./{node_modules,node_modules/**/*}',
	'!./.git',
	'!./.svn',
	'!./gulpfile.babel.js',
	'!./wpgulp.config.js',
	'!./.eslintrc.js',
	'!./.eslintignore',
	'!./.editorconfig',
	'!./phpcs.xml.dist',
	'!./vscode',
	'!./package.json',
	'!./package-lock.json',
	'!./assets/css/**/*',
	'!./assets/css',
	'!./assets/img/raw/**/*',
	'!./assets/img/raw',
	`!${imgSRC}`,
	`!${styleSRC}`,
	`!${jsCustomSRC}`,
	`!${jsVendorSRC}`,
];

// >>>>> Translation options.
// Your text domain here.
const textDomain = 'contaazul';

// Name of the translation file.
const translationFile = 'contaazul.pot';

// Where to save the translation files.
const translationDestination = './languages';

// Package name.
const packageName = 'contaazul';

// Where can users report bugs.
const bugReport = 'https://contaazul.com/';

// Last translator Email ID.
const lastTranslator = 'Johan Guse <johanguse@gmail.com>';

// Team's Email ID.
const team = 'Johan Guse <johanguse@gmail.com>';

// Browsers you care about for auto-prefixing. Browserlist https://github.com/ai/browserslist
// The following list is set as per WordPress requirements. Though; Feel free to change.
const BROWSERS_LIST = ['last 2 version', '> 1%'];

// Export.
module.exports = {
	projectURL,
	productURL,
	browserAutoOpen,
	injectChanges,
	styleSRC,
	styleDestination,
	outputStyle,
	errLogToConsole,
	precision,
	jsVendorSRC,
	jsVendorDestination,
	jsVendorFile,
	jsCustomSRC,
	jsCustomDestination,
	jsCustomFile,
	imgSRC,
	imgDST,
	watchStyles,
	watchJsVendor,
	watchJsCustom,
	watchPhp,
	zipName,
	zipDestination,
	zipIncludeGlob,
	zipIgnoreGlob,
	textDomain,
	translationFile,
	translationDestination,
	packageName,
	bugReport,
	lastTranslator,
	team,
	BROWSERS_LIST,
};
