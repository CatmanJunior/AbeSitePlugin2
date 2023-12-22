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
        None
    """
    filter_ids.insert(0, "all")
    filter_ids.append("Overig")
    filterarray = generate_filter_string(filter_ids)
    #write to txt
    with open("filter_php_array.txt", "wb") as f:
        f.write(filterarray.encode())
    
    #map filterids to a dictionary with numerical keys
    filter_ids = {i: filter for i, filter in enumerate(filter_ids)}
    print("filter ids: ", filter_ids)
    
    
    # Map the filters to their corresponding IDs if they dont exist put them in the "Overig" category
    mapped_filters = []
    for filter in filterList:
        if filter in filter_ids.values():
            for key, value in filter_ids.items():
                if filter == value:
                    mapped_filters.append(key)
                    break
        else:
            mapped_filters.append(len(filter_ids) - 1)
    print("mapped filters: ", mapped_filters)
    return mapped_filters

