import 'highlight.js/styles/github.css';
import React from "react";
import Tag from "../index";

export const TagsList = ({
                        tags
                    }) => {
    return (
        <div className="flex space-x-6 tags_list">
            {tags.map(tag => (
                <Tag tag={tag}></Tag>
            ))}
        </div>
    );
}

export default TagsList;
