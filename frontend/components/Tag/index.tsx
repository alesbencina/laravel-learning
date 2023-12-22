import 'highlight.js/styles/github.css';
import React from "react";
import {ImageBase} from "../Image";
import {ITag} from "@/app/services/models/blog";

interface TagProps {
    tag: ITag
}

export const Tag = ({tag}: TagProps) => {
    return (
        <div key={tag.id}>
            <div className="flex space-x-2">
                <a href={"/tag/" + tag.url_alias}>
                    {tag.files.map((file,index) => (
                        <ImageBase
                            key={index}
                            alt={tag.name}
                            title={tag.name}
                            src={file.path}
                            width={40}
                            height={40}
                        />
                    ))}
                </a>

            </div>
        </div>
    );
}

export default Tag;
