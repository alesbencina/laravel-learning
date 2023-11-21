import 'highlight.js/styles/github.css';
import React from "react";
import SafeHTMLContent from "../Content/SafeHtmlContent";
import {TagsList} from "../Tag/Tags";

interface BlogPostProps {
    post: {
        title: string;
        description: string;
        author: string
    };
}

export const BlogPostDetail =({
    post
}: BlogPostProps) => {
    return (
            <article className="mt-8 prose prose-slate mx-auto lg:prose-lg">
                <div className="flex justify-between">
                    <div>Author: {post.author.name}</div>
                    <TagsList tags={post.tag}></TagsList>
                </div>
                <h1>{post.title}</h1>
                <div>
                    <SafeHTMLContent html={post.description} ></SafeHTMLContent>
                </div>
            </article>

    );
}

export default BlogPostDetail;
