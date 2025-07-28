/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued by
 * default in `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import MobileMenu from './modules/MobileMenu';
import Marquee from './modules/Marquee';
import Accordion from './modules/Accordion';



new MobileMenu();
new Marquee();
new Accordion();
