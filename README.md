Flex-Grid-System
================

Flex is a CSS grid framework inspired by both Skeleton and Pure grid frameworks.


Installation
============

Simply include Flex in the `<head>` like you would any other CSS file:

`<link rel="stylesheet" href="flex.css">`

Then simply use the `.grid` class to nest your grids within and you're good to go!

Customization
============

Flex currently comes with 2 filetypes: `css` and `less`.

Both come full-featured and have a 12 column grid, a default gutter of 2% and the following breakpoints:

* small:   400px
* medium:  600px
* large:   900px
* xlarge:  1200px

While it is possible to edit the `css` file, it's quite difficult given the complexity of a grid system and Flex's features.  However, the media query values can be easily set at the bottom of the file.

The `less` file is what Flex is built in and gives much more control over the framework.  At the top of the file, you will find the following variables and their defaults:

* `@gutter`: 2%
* `@numOfColumns`: 12
* `@small`: 400px
* `@medium`: 600px
* `@large`: 900px
* `@xlarge`: 1200px

Flex is built using severl Mix-Ins as functions, so changing any of these values __EXCEPT `@numOfColumns`__ will automatically be reflected in the compiled css.

### Editing `@numOfColumns` ###

`@numOfColumns` can be updated to any number and the compiled css will automatically reflect the changes to the widths and margins.  However, Flex only includes classes up to twelve columns.  Therefore, if you change `@numOfColumns` to a number above 12, you must add the extra classes to every area in order to use those respective widths.
