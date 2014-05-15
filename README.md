Onion
=====

Onion is the name for my *personal* WordPress boilerplate. As you may expect, this might not be perfect for your needs and uses, the point is that it's perfect for mine. **THIS IS NOT A BOOTSTRAP!** There are no predefined interface elements, no ready-made WordPress templates, and very little in way of preconfigured anythings. This is intended as a starting point, not a shortcut. 

Onion uses Sass for stylesheets, so `cd`ing into the theme directory and using `sass --watch scss/stylesheet.scss:css/stylesheet.css` should put you right. Also note that I make use of the maps data type, so you'll need at least Sass 3.3 if you're going to be using this.

Media query management and CSS grid generation lovingly stolen from [zurb/foundation](https://github.com/zurb/foundation). The included pattern primer is [querkmachine/pattern-primer](https://github.com/querkmachine/pattern-primer).

Also included are a few WordPress plugins that I nearly always end up using. These are:
* [Advanced Custom Fields](http://advancedcustomfields.com) by Elliot Condon
* [Advanced Custom Fields Date & Time Picker add-on](http://www.advancedcustomfields.com/add-ons/date-time-picker/) by Per Søderlind
* [Advanced Custom Fields Image Crop add-on](http://wordpress.org/plugins/acf-image-crop-add-on/) by Anders Thorborg
* [Redirection](http://wordpress.org/plugins/redirection/) by John Godley
* [Regenerate Thumbnails](http://wordpress.org/plugins/regenerate-thumbnails/) by Alex Mills