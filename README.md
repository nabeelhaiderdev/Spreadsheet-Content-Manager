## Functionality

Spreadsheet Content Manager is a WordPress plugin that allows you to manage content for your website directly from Google Sheets. All you have to do is use a shortcode in your WordPress editor to specify the Row and column name (example: [cm table=1 row=1 column=annualfee]), then the value of that cell will display and automatically update on your website.

The primary audience for this plugin is review websites and content publishers, not e-commerce stores.

## Google Sheet

Each row in the Google Sheet will be filled with an entity, or “product.” For example, if I’m a website that talks about credit cards, like “creditcards.com”, each row in the table will be a different credit card. Each column in the Google Sheet will contain dimensions of that product, or characteristics. In the example above, these could be characteristics like APR, rewards rates, or anything else.

### Example Google Sheet

[Here](https://docs.google.com/spreadsheets/d/1JHhiWPobfprCf09j_GIyrF-qXEqkqT_FVgCoTJjoMeA/edit#gid=0) is an example of a Google Sheet that could be used for the plugin.

The Spreadsheet Content Manager plugin should use the Google Sheets API to send the spreadsheet data to the site. As mentioned above, WordPress users can use shortcodes to insert content in pages and posts.

## ShortCode format

The shortcodes should be formatted as such like the example above: `[cm sheetnumber="1" table="1" row="1" column="A"]`

“cm” is used to specify that this is a shortcode for the Spreadsheet Content Manager plugin.

“Table” is used for table “row” is used to specify the row of the product in the Google Sheet. The ROW should always be the first column in the spreadsheet. In the example above, “row=1” is the row of the Discover it Cash Back card.

“column” is used to specify the column of the value that should be displayed. In the example above, the shortcode should pull in the annual fee of the Discover it Cash Back card, which has a “$0” value.

### WordPress Options Menu

There should be a WordPress options menu for the Spreadsheet Content Manager plugin, creating a new menu item in the left-hand navigation of a user’s WordPress admin. The options menu should have the following fields:

-   **License key**: a field for the user to enter their license key for the plugin, which they obtain by signing up for an account on the Spreadsheet Content Manager website (not created yet).
-   **Google Sheets Authenticator**: a field for the user to authenticate their Google account and choose the Google Sheets spreadsheet where they have their product database stored.
-   **User Guide link**: a link to the support documentation on the Spreadsheet Content Manager website (not created yet).
-   **Multiple fields** : Would users be able to add another sheet field if they needed one? So, the options menu starts out with a single field to enter a google sheet URL, then a user has acbutton where they can add another field. We could set an upper limit so users can't have ancunlimited number of sheet URLs (could set the initial upper limit to 5).
-   **Sheet Update** : I would love to get to a point where it auto updates every hour or so. Maybe that cron job can update it every hour and then if the user needs an update sooner, they can also hit "save changes" in the settings page to update it.

### Licensing

To obtain full functionality of the plugin, users will have to obtain a paid license key. Without a license key, the plugin will only accept up to 5 rows of products from the user’s Google Sheets spreadsheet. Update Plugin : Create functionality to send auto plugin updates, If you send any update or new version of the plugin, the customer gets an update.
