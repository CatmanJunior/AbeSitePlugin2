from collections import Counter
import re
import requests
from bs4 import BeautifulSoup
import generate_php_array_filters as gpaf


def make_http_request(url):
    try:
        response = requests.get(url)
        response.raise_for_status()
        return response
    except requests.exceptions.HTTPError as e:
        return f"HTTP Error: {e}"
    except requests.exceptions.RequestException as e:
        return f"Request Error: {e}"


def parse_content_by_class(response, class_name: str) -> list[str]:
    """
    Parses the webpage content and returns the text of elements with the specified class name.

    Args:
        response (Response): The HTTP response object.
        class_name (str): The class name of the elements to be extracted.

    Returns:
        list[str]: A list of text content of elements with the specified class name.
    """
    soup = BeautifulSoup(response.content, 'html.parser')
    elements = soup.find_all(class_=class_name)
    return [element.get_text() for element in elements]
