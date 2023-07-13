#Wordpress Theme for Mary Ann Liebert

Basic wordpress theme to create a custom post type for 'quotations', store the data for each quotation in the database and retrieve in a browser.

##Dependencies

The theme depends on two plugins - 'ACF' and the custom 'Quotations' plugin which is part of this package.

##Usage

Theme is installed and leveraged as normal. Once plugins are installed and activated, create a quotation in the 'Quotations' section by selecting the icon in the admin menu.

In 'Theme' -> 'Customize' set your homepage to 'static home page' and Wordpress will automatically redirect you to the page which outputs the quotations gallery when it loads the homepage.

##Installation

Navigate to the theme directory and run `npm  install`

Start the Tailwind watch and build process with `npm start`

###Features

 - ACF is leveraged to create and retrieve custom field groups, attached to the 'Quotations' post type
 - The ACF definitions are housed in json files in the 'acf-json' folder in the main theme directory. This cuts down on database calls
 - Quotations are auto-titled and named with a concatonation of the author and first few words of the quotation via a hook into the post update function
 - Front end output is modularized via template parts, see the 'template-parts' folder. This allows for hierarchical calling and automatic fallbacks, granting extensibility and maximum code reuse
 - 'Quotations Created' timestamp currently defaults to America/NY, plan to extend later with a browser query to automatically deliver information in browser based timezone
 - Tailwindcss watch/build script, see above for install

###Planned upgrades

 - 'Template Parts' and the custom post specific templates should live in the Quotations plugin directory, however this complicates the usage of 'get_template_part()' which is important for modularity. Concluded that this implementation was outside current scope.
 - Quotations code should be executed as a singleton class, however this brings complications because of the `$data` and `$postarr` variables currently passed into the `add_custom_title()` function. Concluded this is outside the scope of this implementation.
 - Function documentation standards should be improved to include `@since`, `@param`, & `@return`
 

