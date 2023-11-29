import 'highlight.js/styles/github.css';
import React from "react";
import {ImageBase} from "../Image";

interface TagProps {
    tag: {
        name: any;
        url_alias: string | undefined;
        id: any;
        title: string;
        files: {
            url
            map(element: (file) => JSX.Element): any;
        }
    };
}

export const Tag = ({
                        tag
                    }: TagProps) => {
    return (
        <div key={tag.id}>
            <div className="flex space-x-2">
                <a href={"/tag/" + tag.url_alias}>
                    {tag.files.map(file => (
                        <ImageBase
                            alt={tag.name}
                            title={tag.name}
                            src={file.url}
                            width={40}
                            height={40}
                        >
                        </ImageBase>
                    ))}
                </a>

            </div>
        </div>
    );
}

export default Tag;
