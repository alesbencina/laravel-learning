import 'highlight.js/styles/github.css';
import React from "react";
import {ImageBase} from "../Image";

interface TagProps {
    tag: {
        title: string;
        files: {
            url
        }
    };
}

export const Tag = ({
                        tag
                    }: TagProps) => {
    return (
        <div key={tag.id}>
            <div className="flex space-x-2">
                <a href={"/tags/" + tag.url_alias}>
                    {tag.files.map(file => (
                        <ImageBase
                            alt={tag.name}
                            title={tag.name}
                            src={file.url}
                            width={50}
                            height={50}
                        >
                        </ImageBase>
                    ))}
                </a>

            </div>
        </div>
    );
}

export default Tag;
