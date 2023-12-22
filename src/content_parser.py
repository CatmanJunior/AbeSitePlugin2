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
    counter = Counter()
    for element in elements:
        counter[element] += 1
    counter_to_md(counter, "filter_count.md")
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

def list_to_md(list_to_store, filename):
    with open(filename, "w") as f:
        for item in set(list_to_store):
            f.write(f"* {item}\n")

def counter_to_md(counter, filename):
    with open(filename, "w") as f:
        for item, count in counter.most_common():
            f.write(f"* {item}: {count}\n")

def get_first_part_element_from_list(elements):
    return [extract_first_element(element) for element in elements]



    


# def get_filter_ids(filterList):
#     # get filter list from phpsera.txt
#     with open("phpsera.txt", "rb") as f:
#         serialized_filters = f.read().decode()
#     filter_ids = gpaf.get_filter_ids(serialized_filters)

#     filter_ids = []
#     for filter in filterList:
#         if filter not in filter_ids:
#             filter_ids.append(filter)
#     return filter_ids