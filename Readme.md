#Wordpress Theme for Mary Ann Liebert

Basic wordpress theme to create a custom post type for 'quotations', store the data for each quotation in the database and retrieve in a browser.

##Dependencies

The theme depends on two plugins - 'ACF' and the custom 'Quotations' plugin which is part of this package.

##Usage

Theme is installed and leveraged as normal. Once plugins are installed and activated, create a quotation in the 'Quotations' section by selecting the icon in the admin menu.

In 'Theme' -> 'Customize' set your homepage to 'static home page' and Wordpress will automatically redirect you to the page which outputs the quotations gallery when it loads the homepage.

###Features

 - ACF is leveraged to create and retrieve custom field groups, attached to the 'Quotations' post type
 - The ACF definitions are housed in json files in the 'acf-json' folder in the main theme directory. This cuts down on database calls
 - Quotations are auto-titled and named with a concatonation of the author and first few words of the quotation via a hook into the post update function
 - Front end output is modularized via template parts, see the 'template-parts' folder. This allows for hierarchical calling and automatic fallbacks, granting extensibility and maximum code reuse

