from collections import Counter
import re

def clean_elements(elements):
    return [element.strip() for element in elements]

def extract_first_element(element):
    #if after the split there is only one part, use a space as the separator
    if len(re.split(r',|\.|:|;', element, maxsplit=1)) == 1:
        return re.split(r' ', element, maxsplit=1)[0]
    else:
        return re.split(r',|\.|:|;', element, maxsplit=1)[0]
        
def count_element_frequencies(elements):
    counter = Counter(elements)
    return counter

def categorize_elements(counter, threshold):
    more_than_threshold = []
    less_or_equal_threshold = []

    for element in counter:
        if counter[element] > threshold:
            more_than_threshold.append(element)
        else:
            less_or_equal_threshold.append(element)

    return more_than_threshold, less_or_equal_threshold

def get_first_part_element_from_list(elements):
    return [extract_first_element(element) for element in elements]
