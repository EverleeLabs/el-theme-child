# Everlee Labs Child Theme

A child theme for the el-theme parent theme, allowing for customizations without modifying the parent theme directly.

## Installation

1. Ensure the parent theme `el-theme` is installed in your WordPress `wp-content/themes/` directory
2. Upload this child theme folder to `wp-content/themes/el-theme-child/`
3. Log in to your WordPress admin dashboard
4. Navigate to **Appearance > Themes**
5. Activate the "Everlee Labs Child Theme"

## Customization

### Adding Custom Styles

Add your custom CSS to the `style.css` file. The parent theme's styles are loaded first, so your child theme styles will override them as needed.

### Adding Custom Functionality

Add custom PHP functions to the `functions.php` file. This file is loaded in addition to the parent theme's `functions.php`, so you can extend functionality without modifying the parent theme.

### Overriding Templates

To override parent theme templates, copy the template file from the parent theme to this child theme directory and modify it as needed. WordPress will automatically use the child theme version.

## Parent Theme

This child theme extends the **el-theme** parent theme. For updates and support, visit the parent theme repository: https://github.com/EverleeLabs/el-theme

## License

GNU General Public License v2 or later

