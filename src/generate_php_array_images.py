import phpserialize

def create_pf_gallery_settings(image_ids, filter_ids) -> dict[str, str]:
    length = len(image_ids)
    image_ids = image_ids[:length]
    filter_ids = filter_ids * (length // len(filter_ids) + 1)
    gal_sizes = ["large", "medium", "thumbnail"]

    # Building the data structure
    pf_gallery_settings = {
        "image-ids": {i: str(id) for i, id in enumerate(image_ids)},
        "image_title": {i: "" for i in range(len(image_ids))},
        "slide-type": {i: "image" for i in range(len(image_ids))},
        "image_desc": {i: "" for i in range(len(image_ids))},
        "image-link": {i: "" for i in range(len(image_ids))},
        "filters": {image_id: [filter_id] for image_id, filter_id in zip(image_ids, filter_ids)},
        "filter-image": {},  # Assuming empty for now
        "gal_size": gal_sizes[2],
        "col_large_desktops": "col-lg-3",
        "col_desktops": "col-md-12",
        "col_tablets": "col-sm-4",
        "col_phones": "col-12",
        "gallery_direction": "ltr",
        "image_hover_effect_four": "hvr-grow-shadow",
        "title_thumb": "show",
        "image_numbering": "0",
        "thumb_border": "yes",
        "no_spacing": "0",
        "gray_scale": "0",
        "sort_by_title": "no",
        "url_target": "_blank",
        "filter_bg": "#1c3f0a",
        "filter_title_color": "#ffffff",
        "light-box": "4",
        "hide_filters": "0",
        "all_txt": "All",
        "sort_filter_order": "1",
        "filter_position": "left",
        "search_box": "0",
        "search_txt": "Search Images",
        "bootstrap_disable": "no",
        "custom-css": "",
    }
    serialized_settings = serialize_dictionary(pf_gallery_settings)
    # Writing PHP array settings
    with open("output/php_array_gallery_settings.txt", "w") as file:
        file.write(serialized_settings)
    return pf_gallery_settings

def serialize_dictionary(dictionary: dict[str, str]) -> str:
    return phpserialize.dumps(dictionary, object_hook=phpserialize.phpobject).decode("utf-8")


