import 'highlight.js/styles/github.css';
import React from "react";
import Tag from "../index";
import { ITag } from "@/app/services/models/blog";

interface TagListProps {
    tags: ITag[];
}

export const TagsList: React.FC<TagListProps> = ({tags}) => {
    return (
        <div className="flex space-x-6 tags_list">
            {tags.map(tag => (
                <Tag tag={tag}></Tag>
            ))}
        </div>
    );
}

export default TagsList;
