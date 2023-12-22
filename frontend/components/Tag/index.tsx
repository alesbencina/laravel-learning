import 'highlight.js/styles/github.css';
import React from "react";
import {ImageBase} from "../Image";
import {ITag} from "@/app/services/models/blog";
import Link from "next/link";

interface TagProps {
    tag: ITag
}

export const Tag = ({tag}: TagProps) => {
    return (
        <div key={tag.id}>
            <div className="flex space-x-2">
                <Link href={`/tag/${tag.url_alias}`} key={tag.id} target="_blank">
                    <a>
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
                </Link>
            </div>
        </div>
    );
}

export default Tag;
