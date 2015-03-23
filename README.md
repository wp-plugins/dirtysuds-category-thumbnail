# Category Thumbnail

[![Plugin Version](https://img.shields.io/wordpress/plugin/v/dirtysuds-category-thumbnail.svg)](https://wordpress.org/plugins/dirtysuds-category-thumbnail/)
[![License](https://img.shields.io/badge/license-GPLv2-blue.svg)](https://wordpress.org/about/license/)
[![Tested Version](https://img.shields.io/wordpress/v/dirtysuds-category-thumbnail.svg)](https://wordpress.org/plugins/dirtysuds-category-thumbnail/)
[![Rating](https://img.shields.io/wordpress/plugin/r/dirtysuds-category-thumbnail.svg)](https://wordpress.org/support/view/plugin-reviews/dirtysuds-category-thumbnail)
[![Downloads](https://img.shields.io/wordpress/plugin/dt/dirtysuds-category-thumbnail.svg)](https://wordpress.org/plugins/dirtysuds-category-thumbnail/)

## Adds shortcode `[catthumb]` to embed a thumbnail image for a category.

`[catthumb id="CategoryID" link="true"]` will find the most recent post in the specified Category with a featured image and return the thumbnail for that image. If *link="true"* is specified, the image will link to the category specified.

You can optionally search custom post types with the `post_type` attribute, and specify the thumbnail size with the `size` attribute. IE
`[catthumb id="CategoryID" link="true" post_type="restaurants" size="full"]`

The plugin will only search *featured images*, not *attached images*. It will not look for images embedded in the post itself, or other attached images. If a category does not have any posts with featured images, this plugin will not return a thumbnail image, even if the category has posts with attached images.
