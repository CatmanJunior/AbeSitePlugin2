import unittest
from unittest.mock import MagicMock, patch

import requests
from scraper import make_http_request, parse_content_by_class


class ScraperTests(unittest.TestCase):
    def test_make_http_request_success(self):
        # Mock the requests.get method to return a successful response
        with patch('requests.get') as mock_get:
            mock_response = MagicMock()
            mock_response.status_code = 200
            mock_get.return_value = mock_response

            # Call the function under test
            result = make_http_request('http://example.com')

            # Assert that the function returns the response object
            self.assertEqual(result, mock_response)

    def test_make_http_request_http_error(self):
        # Mock the requests.get method to raise an HTTPError
        with patch('requests.get') as mock_get:
            mock_get.side_effect = requests.exceptions.HTTPError('404 Not Found')

            # Call the function under test
            result = make_http_request('http://example.com')

            # Assert that the function returns the error message
            self.assertEqual(result, 'HTTP Error: 404 Not Found')

    def test_make_http_request_request_error(self):
        # Mock the requests.get method to raise a RequestException
        with patch('requests.get') as mock_get:
            mock_get.side_effect = requests.exceptions.RequestException('Connection Error')

            # Call the function under test
            result = make_http_request('http://example.com')

            # Assert that the function returns the error message
            self.assertEqual(result, 'Request Error: Connection Error')

    def test_parse_webpage_content_of_class(self):
        # Mock the response object and BeautifulSoup
        mock_response = MagicMock()
        mock_response.content = '<html><body><div class="my-class">Element 1</div><div class="my-class">Element 2</div></body></html>'
        mock_soup = MagicMock()
        mock_soup.find_all.return_value = [MagicMock(get_text=lambda: 'Element 1'), MagicMock(get_text=lambda: 'Element 2')]
        with patch('scraper.BeautifulSoup', return_value=mock_soup):
            # Call the function under test
            result = parse_content_by_class(mock_response, 'my-class')

            # Assert that the function returns the expected list of text content
            self.assertEqual(result, ['Element 1', 'Element 2'])


if __name__ == '__main__':
    unittest.main()