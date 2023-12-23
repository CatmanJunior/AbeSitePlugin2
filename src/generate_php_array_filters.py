import re
import phpserialize

def generate_filter_string(m_filters: list[str]):
    # add "all" to the list of filters

    # Convert list of filters to a dictionary with numerical keys
    filter_dict = {i: filter for i, filter in enumerate(m_filters)}
    
    # Serialize the dictionary to a PHP serialized string
    return phpserialize.dumps(filter_dict, object_hook=phpserialize.phpobject).decode("utf-8")


def generate_filter_ids(filterList, filter_ids):
    """
    Retrieves the filter IDs from the serialized PHP array file and maps them to their corresponding filters.

    Args:
        filterList (list): A list of filters.

    Returns:
        mapped_filters (list): A list of mapped filter IDs.
    """
    filter_ids.insert(0, "all")
    filter_ids.append("Overig")
    filterarray = generate_filter_string(filter_ids)
    
    # Write filterarray to a text file
    with open("filter_php_array.txt", "w") as f:
        f.write(filterarray)
    
    # Create a dictionary to map filter IDs to numerical keys
    filter_ids_dict = {i: filter for i, filter in enumerate(filter_ids)}
    print("filter ids: ", filter_ids_dict)
    
    mapped_filters = [filter_ids_dict.get(filter, len(filter_ids_dict) - 1) for filter in filterList]

    
    return mapped_filters

