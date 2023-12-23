# Database Array Builder for Wordpress Plugin
OVERENGINEERD!!
This project is a Python-based web scraper that generates PHP array gallery settings for a wordpress plugin. I had to transfer 700+ images from one gallery plugin to the other. 
Manually this would've taken me a week.
BONUS: I get to exceed the limit on maximum filters this way. 

## Installation
 
1. Clone the repository.
2. Install the required dependencies by running `pip install -r requirements.txt`.

## Usage

1. Edit the url and classes to scrape. URL CLASS_NAME
2. Add the Image IDs to the IMAGE_ID_LIST 
3. Run the `main.py` script to initiate the web scraping process.
4. The gallery settings will be serialized and written to a `php_array_gallery_settings.txt` file.
5. The filter settings will be serialized and written to a `filter_php_array.txt` file
6. A Markdown file named `first_elements.md` will be generated, containing a table with information about the first elements, filters, and counts. This is to check if all the data is correctly parsed. 
7. Add the content of the 2 txt files to the database. Goto PHPmyAdmin
8. Search in Options(the pf_gallery_options) and PostMeta (the number of the gallery)
   
## Additional Notes

- The PHP code in `scripts/plugincode.php` is the plugin file that handles the database loading. I edited it  so it displays the captions instead of the title
- The Python function `create_pf_gallery_settings` in `src/generate_php_array_images.py` generates PHP array gallery settings based on image IDs and filter IDs.
- The Python script `main.py` orchestrates the web scraping process, filtering, and generating PHP array gallery settings.
